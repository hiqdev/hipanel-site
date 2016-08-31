<?php

namespace hipanel\site\helpers;

use Yii;
use yii\base\InvalidConfigException;

class SiteHelper
{
    /**
     * @return mixed
     * @throws InvalidConfigException
     */
    public static function getSeller()
    {
        if (Yii::$app->user->isGuest) {
            if (isset(Yii::$app->params['seller'])) {
                $seller = Yii::$app->params['seller'];
            } else throw new InvalidConfigException('"seller" param must be set');
        } else {
            $seller = Yii::$app->user->identity->seller;
        }

        return $seller;
    }

    /**
     * @param $resources
     * @param $zones
     * @return mixed
     */
    public static function domain($resources, $zones)
    {
        foreach ($resources as $k => $v) {
            if ($zones[$v['object_id']]) $resource['zone:.' . $zones[$v['object_id']]][$v['type']] = $v;
            if (preg_match('/^premium_dns/', $v['type'])) $resource['ref:class,feature'][$v['type']] = $v;
        }

        return $resource;
    }

    /**
     * @param $resources
     * @param $models
     * @param null $profile_to_model
     * @return mixed
     */
    public static function server($resources, $models, $profile_to_model = null)
    {
        if (!$profile_to_model) {
            foreach ($resources as $resource) {
                if ($resource['partno']) $resource['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $resource['partno']));
                if ($models[$resource['object_id']]) {
                    $resource['partno'] = $models[$resource['object_id']]['partno'];
                    $resource['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $resource['partno']));
                    $resource['model_type'] = $models[$resource['object_id']]['model_type'];
                }
                $_resources[$resource['model_type'] ?: $resource['type']] = $resource;
            }
        } else {
            foreach ($resources as $resource) {
                if ($resource['partno']) $resource['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $resource['partno']));
                $model_id = $profile_to_model[$resource['object_id']];
                if (array_key_exists($resource['object_id'], $profile_to_model)) {
                    $resource['partno'] = $models[$model_id]['partno'];
                    $resource['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $resource['partno']));
                    $resource['model_type'] = $models[$model_id]['type_name'];
                }
                $_resources[$resource['model_type'] ?: $resource['type']] = $resource;
            }
        }

        return $_resources;
    }
}
