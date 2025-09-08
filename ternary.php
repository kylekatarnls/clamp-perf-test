<?php

function clamp3($value, $min, $max)
{
    return $value < $min ? $min : ($value > $max ? $max : $value);
}

$sum = 0;

for ($i = 0; $i < 30_000_000; $i++) {
    $sum += clamp3($i, 10_000_000, 20_000_000);
}

var_dump($sum);
