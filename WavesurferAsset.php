<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\player;

/**
 * Description of WavesurferAsset
 *
 * @author asus
 */
class WavesurferAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@bower/wavesurfer.js/dist';
    
    public $js = [
        'wavesurfer.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
