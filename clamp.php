<?php

$sum = 0;

for ($i = 0; $i < 30_000_000; $i++) {
    $sum += clamp($i, 10_000_000, 20_000_000);
}

var_dump($sum);
