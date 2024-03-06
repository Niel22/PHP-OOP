<?php

class Playlist
{

    public $songs = [];

    public function addSongs(Song $song): void
    {

        $this->songs[] = $song;
    }

    public function getLength(): int
    {
        return count($this->songs);
    }


}

?>