<?php
$cities = [
'Абакан', 'Абдулино', 'Агинское',
'Барнаул', 'Белгород',
'Великий Новгород', 'Владивосток',
'Владикавказ', 'Владимир', 'Волгоград', 'Вологда', 'Воронеж',
];

function determ ($arr = []) {
	$firstLetter = '';
	$result = '';
	foreach ($arr as $key) {
		if (mb_substr($key, 0, 1) != $firstLetter) {
			$firstLetter = mb_substr($key, 0, 1);
			$result .= '<dt>' . $firstLetter . '</dt>';
		}	
		$result .= '<dd>' . $key . '</dd>';
	}
	echo '<dl>' . $result . '</dl>';
}

determ($cities);