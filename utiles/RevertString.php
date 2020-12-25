<?php
namespace app\utiles;
class RevertString{
	public function revert1(string $string):string{
		return implode(
						'',
						array_reverse(
							str_split($string)
						)
					);
	}
	/**
	 *  @brief Функция переворачивающая строки
	 *  
	 *  @param $string Входная строка
	 *  @return Перевёрнутая строка
	 *  
	 *  @details Функция переворачивающая строки. Разработанна для прохождения тестового задания
	 */
	public function revert(string $string):string{
		$revertedString = '';
		for ($i = strlen($string) -1; $i>0; --$i){
			$revertedString .= $string[$i];
		}
		return $revertedString;
	}
}


