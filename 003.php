<?php 	
$arr_months = [
['January', 'February', 'March', 'April'],
['May', 'June', 'July', 'August'],
['September', 'October', 'November', 'December']
];

$comma = ', ';

foreach ($arr_months as $value) {
	foreach ($value as $month) {
		if ($month == $arr_months[2][3]) echo $month;
		elseif ($month .= $comma ) echo $month;
	}	
}