<?php

//•輸入3個英文字串，例如：abc xyz hello
//•小於3個或大於3個數量請提示「重新輸入」
//•將輸入字串轉換成大寫，1行顯示1個字串

// The first argument $argv[0] is always the name that was used to run the script
if (count($argv) === 4) {
    $index = 0;
    foreach ($argv as $eachStr) {
        if ($index !== 0) {
            echo strtoupper($eachStr) . "\n";
        }
        $index++;
    }
} else {
    echo 'please retry';
}
