<?php

namespace humhub\modules\linkedin\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.

 */
class ConfigureForm extends \yii\base\Model
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
            'serverUrl' => Yii::t('LinkedinModule.base', 'LinkedIn Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('LinkedinModule.base', 'e.g. https://linkedin.com/in/{usernaem}?trk=profile-badge'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('linkedin')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('linkedin')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
