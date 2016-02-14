<?php
namespace icron\simplemde;

use yii\web\AssetBundle;

class SimpleMDEAsset extends AssetBundle
{
    public $sourcePath = '@bower/simplemde/dist';
    public $js = [
        'simplemde.min.js'
    ];
    public $css = [
        'simplemde.min.css'
    ];
}
