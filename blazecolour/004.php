<?php
$cities = [
'Абакан', 'Абдулино', 'Агинское',
'Барнаул', 'Белгород',
'Великий Новгород', 'Владивосток',
'Владикавказ', 'Владимир', 'Волгоград', 'Вологда', 'Воронеж',
];

$firstLetter = '';
foreach ($cities as $city) {
	if (mb_substr($city, 0, 1) != $firstLetter) {
		$firstLetter = mb_substr($city, 0, 1);
		$result .= '<dt>' . $firstLetter . '</dt>';
	}	
	$result .= '<dd>' . $city . '</dd>';
}
echo '<dl>' . $result . '</dl>';