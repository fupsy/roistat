<?php
	class SymbReverse
	{
		public function symbolsReverse($str) { 
			$specSymbArr = [];

			for ($i = 0; $i < strlen($str); $i++) {
				if (preg_match('/[\d\w\s]/', $str[$i]) == 0) {
					$specSymbArr[] = $str[$i];
				}
			}

			for ($i = 0; $i < strlen($str); $i++) {
				if (preg_match('/[\d\w\s]/', $str[$i]) == 0) {
					$str[$i] = array_pop($specSymbArr);
				}
			}

			return $str;
		}
	}

$test = new SymbReverse;
echo $test->symbolsReverse('Hi, my name Maksim!');
