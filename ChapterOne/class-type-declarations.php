<?php

require_once "playlist.php";
require_once "song.php";

$playlist = new Playlist();

$song1 = new Song("BlackBird", 40);
$song2 = new Song("Yesterday", 3);

$playlist->addSongs($song1);
$playlist->addSongs($song2);

print $playlist->getLength() . PHP_EOL;

foreach ($playlist->songs as $song) {
    print $song->name . " " . $song->numberOfPlays . PHP_EOL;
}