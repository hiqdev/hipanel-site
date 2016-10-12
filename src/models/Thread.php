<?php

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
            $this->anonym_seller = Yii::$app->params['seller'];

            return true;
        }
        return false;
    }
}
