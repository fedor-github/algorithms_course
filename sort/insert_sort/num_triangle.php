<?php

require_once __DIR__ . '/../lib.php';

function gaussSum($num)
{
    return ($num * ($num + 1)) / 2;
}

function brutForceSum($num)
{
    $range = range(1, $num);
    $ret = 0;
    for ($i = 0; $i < count($range); $i++) {
        $ret = $ret + $range[$i];
    }
    return $ret;
}

Timer::start();
$gauss = gaussSum(3452098);
$time = Timer::end();
echo 'gauss = ' . $gauss . ' - ' . $time . PHP_EOL;

Timer::start();
$brutForce = brutForceSum(3452098);
$time = Timer::end();
echo 'brutForce = ' . $brutForce . ' - ' . $time . PHP_EOL;
