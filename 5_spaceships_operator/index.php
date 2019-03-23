<?php

$games = ['Mass Effect', 'Super Mario Bros', 'Zelda', 'Fallout', 'Metal Gear'];

// sort($games);
// rsort($games);

// If a  = b we return 0, a > b return 1,
usort($games, function ($a, $b) {
    // return $a <=> $b; // -1, 0, 1
    return strlen($a) <=> strlen($b);
});

var_dump($games);
