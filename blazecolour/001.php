<?php
//функция справедлива только для двумерного массива
function without_symb_end ($arr = [], $symb = '') {
	foreach ($arr as $value1) {
		foreach ($value1 as $value2) {
			if ($value2 == end(end($arr))) echo $value2;
			elseif ($value2 .= $symb) echo $value2;
		}	
	}}

$months = [
['January', 'February', 'March'],
['April', 'May', 'June'],
['July', 'August', 'September'],
['October', 'November', 'December']
];		

without_symb_end($months, ', ');