<?php

namespace humhub\modules\rockethub\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('RockethubModule.base', 'Rocket.Chat URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('RockethubModule.base', 'e.g. https://<rocket-chat-domain>/livechat'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('rockethub')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('rockethub')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
