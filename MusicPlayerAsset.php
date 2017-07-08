<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\player;

/**
 * Description of MusicPlayerAsset
 *
 * @author asus
 */
class MusicPlayerAsset extends \yii\web\AssetBundle{
//    public $sourcePath = '@bower/wavesurfer.js/dist';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
