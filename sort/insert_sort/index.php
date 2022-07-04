<?php

require_once __DIR__ . '/../lib.php';

// n = count($arr)
// t(i) - count of while checks
function insertionSort(&$arr)
{
    for ($i = 1; $i < count($arr); $i++) {      // c1, n
        $cur = $arr[$i];                        // c2, n-1
        $j = $i - 1;                            // c3, n-1
        while ($j >= 0 && $arr[$j] > $cur) {    // c4, SUM(2, n, $i)
            $arr[$j + 1] = $arr[$j];            // c5, SUM(2, n - 1, t($i))
            $j = $j - 1;                        // c6, SUM(2, n - 1, t($i))
        }
        $arr[$j + 1] = $cur;                    // c7, n-1
    }
}
// Tmin(n) = c1*n + c2*(n-1) + c3*(n-1) + c5*n + c6*(n-1) + c7*(n-1)
// Tmax(n) = c1*n + c2*(n-1) + c3*(n-1) + c5*(n(n+1)/2 - 1) + c6*((n-1)n)/2 + c7*(n-1)
// Tmin(n) = a*n + b
// Tmax(n) = a*n^2 + b*n + c

// 4*n^2 + 3*n + 2
// n = 1   -> 4 + 3 + 2
// n = 10  -> 400 + 30 + 2
// n = 100 -> 40000 + 300 + 2

// Q(g(n)) = {f(n): c1*g(n) <= f(n) <= c2*g(n), for all n >= n0}
// g(n) = n^2 -> Q(n^2)

// O(g(n)) = {f(n): 0 <= f(n) <= c*g(n), for all n >= n0}
// O(n^2)

$arr = getRandNumbers(10000, 0, 10000);

Timer::start();
insertionSort($arr);
$res = Timer::end();

print_r($arr);
echo "time taken: $res\n";
