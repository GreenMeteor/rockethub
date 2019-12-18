<?php

namespace humhub\modules\rockethub\widgets;

use Yii;
use yii\base\Widget;

/**
 *
 * @author Felli
 */
class RockethubFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('rockethub')->getServerUrl() . '';
        return $this->render('rockethubframe', ['rocketHub' => $url]);
    }
}
