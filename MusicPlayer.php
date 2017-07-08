<?php

namespace aki\player;

/**
 * This is just an example.
 */
class MusicPlayer extends \yii\base\Widget
{
    public function init() {  
        Id3Asset::register($this->view);
        WavesurferAsset::register($this->view);
        MusicPlayerAsset::register($this->view);
        
    }
    public function run()
    {
        return $this->render('music_player', [
            'widget' => $this
        ]);
    }
}
