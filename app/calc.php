<?php
/**
 * Created by PhpStorm.
 * User: Dmitry Andreevich
 * Date: 18.09.2018
 * Time: 15:45
 */

    function calcDaysInYear($year){
        if(! isset($year) || intval($year) === 0 )
            return false;

        $totalDays = 0;

        for($i = 0; $i < 12; $i++)
            $totalDays += cal_days_in_month(CAL_GREGORIAN, $i + 1, $year);

        return $totalDays;
    }

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
            $daysInYear = calcDaysInYear($year);
            $daysInYear = !$daysInYear ? 365 : $daysInYear; // Если произошла ошибка с годом, то будет 365 дней.

            $summn = $summn - 1 + ($summn - 1 + ($isRefill ? $summAdd : 0)) * $daysInMonth * ($percent / $daysInYear);

            echo round($summn);
            exit;
        }
    }

    echo 'error';
    exit;