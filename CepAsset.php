<?php

namespace yiibr\correios;

use yii\web\AssetBundle;

class CepAsset extends AssetBundle
{
    public $sourcePath = '@vendor/havennow/yii2-correios/assets';

    public $js = [
        'jquery.cep.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
} 