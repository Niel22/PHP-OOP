<?php

require_once "playlist.php";
require_once "song.php";

$playlist = new Playlist();

$song1 = new Song("BlackBird", 40);
$song2 = new Song("Yesterday", 3);

$playlist->addSongs($song1);
$playlist->addSongs($song2);

if($playlist->getLength() < 10){
    print "Short Playlist..." . PHP_EOL;
}