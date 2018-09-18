<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Andreevich
 * Date: 18.09.2018
 * Time: 15:45
 */

    if( isset($_POST['summn']) && isset($_POST['month']) &&
        isset($_POST['year']) && isset($_POST['refill']) &&
        isset($_POST['amountReplenish'])){

        $percent = 10;
        $summn = intval( htmlspecialchars($_POST['summn']) ); // На случай обхода клиентской валидации
        $month = intval( htmlspecialchars($_POST['month']) );
        $year = intval( htmlspecialchars($_POST['year']) );
        $summAdd = intval( htmlspecialchars($_POST['amountReplenish']) );
        $isRefill = htmlspecialchars($_POST['refill']) === 'true';

        if($summn >= 1000 && $summn <= 3000000) {
            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
            $daysInYear = 365; // check

            $summn = $summn - 1 + ($summn - 1 + ($isRefill ? $summAdd : 0)) * $daysInMonth * ($percent / $daysInYear);

            echo round($summn);
            exit;
        }
    }

    echo 'error';
    exit;