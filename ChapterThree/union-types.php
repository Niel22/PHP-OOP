<?php

require_once "Song.php";

$song = new Song("Yesterday", 100, );

$song->setRatings(2.4);

print $song->getRatings();