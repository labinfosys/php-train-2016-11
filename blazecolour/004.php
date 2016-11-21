<?php
$cities = [
'Абакан', 'Абдулино', 'Агинское',
'Барнаул', 'Белгород',
'Великий Новгород', 'Владивосток',
'Владикавказ', 'Владимир', 'Волгоград', 'Вологда', 'Воронеж',
];

foreach ($cities as $city) {
	$first_symb .=  reset(preg_split('//u', $city, null, PREG_SPLIT_NO_EMPTY));
} // Выбираем все заглавные буквы

$arr_first_symb = preg_split('//u', $first_symb, null, PREG_SPLIT_NO_EMPTY); // создаем массив с заглавными буквами

$new_cities = array_combine($cities, $arr_first_symb); // создаем массив с ключами городами

$dl = '';
foreach ($new_cities as $dd => $dt) {
	$dl .= '<dt>' . $dt . '</dt>';
	$dl .= '<dd>' . $dd . '</dd>';
}
$dl = '<dl>' . $dl . '</dl>';

echo $dl;