<?php
function calc(){
    $data = htmlspecialchars($_POST['data']);
    $datas = explode(".", $data);
    $month = (int)$datas[1];
    $year = (int)$datas[2];
    $sum_dep = htmlspecialchars($_POST['sum_dep']);
    $term_dep = htmlspecialchars($_POST['term_dep']);
    $vklad = htmlspecialchars($_POST['vklad']);
    $dep_repl = htmlspecialchars($_POST['dep_repl']);
    $percent = 0.1;
    $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $days = date('L', mktime(0, 0, 0, 1, 1, $datas[2]))?366:365;
    if ($vklad == 'no'){
        $dep_repl = 0;
    }
    $summn = round((int)$sum_dep + ((int)$sum_dep + (int)$dep_repl) * (int)$day_in_month * ($percent / $days), 2);
    echo "$summn руб";
}
calc();
?>