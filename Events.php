<?php

namespace humhub\modules\rockethub;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{

    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('RockethubModule.base', 'Rockethub Settings'),
            'url' => Url::toRoute('/rockethub/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-rocket"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'rockethub' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    public static function addRockethubFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(assets\Assets::class);
        $event->sender->addWidget(widgets\RockethubFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'rockethub')
        ]);
    }
}
