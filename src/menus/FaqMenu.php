<?php

/*
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\menus;

use Yii;

class FaqMenu extends \hiqdev\menumanager\Menu
{
    public $path;

    public function getView()
    {
        return Yii::$app->view;
    }

    public function items()
    {
        $title = $this->view->title;
        $data = $this->crawlDir(Yii::getAlias($this->path));
        $this->view->title = $title;

        return $data['items'];
    }

    private function crawlDir($path)
    {
        $items = [];
        foreach ($this->scanDir($path) as $key => $file) {
            if (is_dir($file)) {
                $items[$key] = $this->crawlDir($file);
            } else {
                $items[$key] = $this->readFile($file);
            }
        }
        $index = "$path/index.php";
        if (is_file($index)) {
            $label = $this->readFile($index)['label'];
        }

        return compact('label', 'items');
    }

    private function readFile($path)
    {
        return [
            'content' => $this->view->renderFile($path),
            'label' => $this->view->title,
        ];
    }

    private function scanDir($path)
    {
        $res = [];
        foreach (scandir($path) as $file) {
            if ($file[0] === '.' || $file === 'index.php') {
                continue;
            }
            $info = pathinfo($file);
            $res[$info['filename']] = $path . '/' . $file;
        }
        return $res;
    }
}
