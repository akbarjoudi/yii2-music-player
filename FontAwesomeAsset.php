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
 * @author Akbar Joudi <akbar.joody@gmail.com>
 */
class FontAwesomeAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@bower/fontawesome/';
    
    public $css = [
        'css/font-awesome.min.css'
    ];
}
