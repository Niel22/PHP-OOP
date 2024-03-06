<?php

class Song{
    public string $name;
    public int $numberOfPlays;

    private int|float $ratings;

    public function __construct(string $name, int $numberOfPlays){
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }

    public function setRatings(int|float $rating){
        $rating = max(0, $rating);

        $this->ratings = min(5, $rating);
    }

    public function getRatings(){
        return $this->ratings;
    }
}