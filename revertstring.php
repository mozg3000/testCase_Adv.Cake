<?php

$string = "Привет! Давно не виделись.";

print_r(
	implode(
		'',
		array_reverse(
			str_split($string)
		)
	)
);

print_r(revertString($string));

/**
 *  @brief Функция переворачивающая строки
 *  
 *  @param $string Входная строка
 *  @return Перевёрнутая строка
 *  
 *  @details Функция разработанная для прохождения тестового задания
 */
function revertString(string $string):string{
	$revertedString = '';
	for ($i = strlen($string) -1; $i>0; --$i){
		$revertedString .= $string[$i];
	}
	return $revertedString;
}