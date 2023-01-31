<?php

//使用 PHP 開發 cal 指令

// IF 檢查輸入資料是否正常 EX: 1 2023
if (count($argv) === 3 and $argv[1] > 0 and $argv[1] < 13) {
    $year = $argv[2];
    $month = $argv[1];

    // 該年該月1號是星期幾
    $weekDay = date('N', strtotime($year . "-" . $month . '-1'));
    // 該年該月有幾天
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $separator = "  ";
    // 印出標題與星期幾
    echo '             ' . $month . ' ' . $year . "\n";
    echo 'Sun' . $separator . 'Mon' . $separator . 'Tue' . $separator . 'Wen' . $separator . 'Thu' . $separator . 'Fri' . $separator . "Sat\n";
    // 計算該月1號是星期幾
    $startFrom = $weekDay % 7;
    // 印製時若該月不是從星期一開始會需要印出空白，為了方便後續透過for迴圈印出日期會透過此變數計算跳過了幾次
    $skipCount = 0;
    for ($index = 0; $index < $daysInMonth + $startFrom; $index++) {
        if ($index < $startFrom) {
            echo "     ";
            $skipCount++;
        } else {
            $currDay = $index - $skipCount + 1;
            echo $currDay;
            if ($currDay < 10) {
                echo "    ";
            } else {
                echo "   ";
            }
        }
        if (($index + 1) % 7 === 0) {
            echo "\n";
        }
    }
} else {
    echo 'please retry';
}