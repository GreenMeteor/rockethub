<?php

namespace humhub\modules\rockethub\assets;

use Yii;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@rockethub/resources';

    public $publishOptions = [
        'forceCopy' => false
    ];
}
