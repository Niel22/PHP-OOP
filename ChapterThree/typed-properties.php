<?php

require_once "Song.php";

$songTitle = ["Yesterday", "Help", "Something"];

$song = new Song($songTitle[0], 12);

// $song->name = $songTitle;

var_dump($song->name);