<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\models;

use Yii;

class Thread extends \hipanel\base\Model
{
    const SCENARIO_SUBMIT = 'create';

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return ['id', 'anonym_email', 'anonym_name', 'anonym_seller', 'subject', 'message'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge([
            [['anonym_email', 'anonym_name', 'subject', 'message'], 'required', 'on' => self::SCENARIO_SUBMIT],
            [['anonym_seller'], 'safe', 'on' => self::SCENARIO_SUBMIT],
            [['anonym_email'], 'email', 'on' => self::SCENARIO_SUBMIT],
            [['subject'], 'string', 'max' => 200, 'on' => self::SCENARIO_SUBMIT],
            [['message'], 'string', 'max' => 3000, 'on' => self::SCENARIO_SUBMIT],
//            [['captcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator2::class,
//                'secret' => Yii::$app->params['reCaptcha.secretKey'],
//                'uncheckedMessage' => Yii::t('hisite', 'Please confirm that you are not a bot.')],
        ], parent::rules());
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'anonym_name' => Yii::t('hipanel:site:pages', 'Name'),
            'anonym_email' => Yii::t('hipanel:site:pages', 'E-mail'),
            'subject' => Yii::t('hipanel:site:pages', 'Subject'),
            'message' => Yii::t('hipanel:site:pages', 'Message'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->anonym_seller = Yii::$app->params['user.seller'];

            return true;
        }

        return false;
    }
}
