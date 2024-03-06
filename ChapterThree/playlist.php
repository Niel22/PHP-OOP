<?php

class Playlist
{

    private $songs = [];

    public function addSongs(Song $song){
        $this->songs[] = $song;
    }

    public function getSongs(){
        return $this->songs;
    }
}

?>