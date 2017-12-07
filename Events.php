<?php
namespace humhub\modules\linkedin;

use Yii;
use yii\helpers\Url;
use humhub\modules\linkedin\widgets\LinkedinFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('LinkedinModule.base', 'LinkedIn Settings'),
            'url' => Url::toRoute('/linkedin/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-linkedin"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'linkedin' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addLinkedinFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(LinkedinFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'linkedin')
        ]);
    }
}
