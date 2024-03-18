<?php
$num = 17;
$divider = 2;
$isPrime = true;

while ($divider * $divider <= $num && $isPrime) {
    if ($num % $divider == 0) {
        $isPrime = false;
    }
    $divider++;
}

if ($isPrime && $num > 1) {
    echo $num . " является простым числом";
} else {
    echo $num . " не является простым числом";
}



