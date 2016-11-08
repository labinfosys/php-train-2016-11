<?php 
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officiis sit ratione quibusdam commodi voluptatem tempore recusandae unde, exercitationem molestiae neque fugit, possimus inventore amet aperiam ullam laudantium in illo!';

$arr = explode(" ", $text); //выводим текст в массив

foreach ($arr as $value) {
	echo mb_strimwidth("$value ", 0, 9, "* ");
} //перебираем все слова, обрезая длинные до 7 символов, ставим * на место последнего символа в длинных словах