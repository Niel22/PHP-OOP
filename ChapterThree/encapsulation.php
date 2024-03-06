<?php

require_once "song.php";
require_once "playlist.php";

$beatLessSong = new Playlist();

$song = new Song("Someday", 30);

$fakeSong = "This is not a song... It is a string";

$beatLessSong->addSongs($song);
// $beatLessSong->addSongs($fakeSong);

// $beatLessSong->addSongs($fakeSong);

var_dump($beatLessSong->getSongs());