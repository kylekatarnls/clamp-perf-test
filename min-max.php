<?php

function clamp2($value, $min, $max)
{
    return min(max($value, $min, $max));
}

$sum = 0;

for ($i = 0; $i < 30_000_000; $i++) {
    $sum += clamp2($i, 10_000_000, 20_000_000);
}

var_dump($sum);
