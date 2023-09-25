<?php

namespace backend\modules\helpdesk\widgets\languageSwitcher\assets;


use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;

class LanguageSwitcherAsset extends AssetBundle
{
    public $sourcePath = __DIR__.DIRECTORY_SEPARATOR.'web';

    public $css = [
        'css/language_switcher.css'
    ];

    public $depends = [
       BootstrapAsset::class
    ];


}