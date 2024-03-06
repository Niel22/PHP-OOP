<?php

declare(strict_types=1);

require_once 'song.php';

$song = new Song('Shoki', 30);

print $song->numberOfPlays;