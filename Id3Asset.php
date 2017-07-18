<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace aki\player;

/**
 * Description of Id3Asset
 *
 * @author asus
 */
class Id3Asset extends \yii\web\AssetBundle{
    public $source = "@bower/id3/dist";
    
    public $js = [
      "id3.min.js",  
    ];
    
}
