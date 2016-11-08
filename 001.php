<?php 
$date_today = mktime(); //текущая дата 

$date_new_year = mktime(0,0,0,1,1,2017); //дата нового года

$days_before = $date_new_year-$date_today; //количество оставшегося времени до нового года

$arr_days_before = getdate($days_before); // выводим количество оставшегося времени до нового года в ассоциативный массив

$amount_days =  $arr_days_before['yday']; // извлекаем из массива количество дней

echo "До нового года осталось $amount_days дней";