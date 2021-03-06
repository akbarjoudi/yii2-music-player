<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\player;
\Yii::setAlias('@akiPath', dirname(__FILE__));
/**
 * Description of MusicPlayerAsset
 *
 * @author asus
 */
class MusicPlayerAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@akiPath/asset/';
    
    public $js = [
        'js/id3-minimized.js',
        'js/script.js'
    ];
    
    public $css = [
        'css/styles.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
