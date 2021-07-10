<?php
class calculator{
	function mycalculator($data){
		$firstNumber = $data['firstNumber'];
		$secondNumber = $data['secondNumber'];
		$btn = $data['btn'];

		switch ($btn) {
			case '+':
			$result = $firstNumber + $secondNumber;
			break;
			case '-':
			$result = $firstNumber - $secondNumber;
			break;
			case '*':
			$result = $firstNumber * $secondNumber;
			break;
			case '/':
			$result = $firstNumber / $secondNumber;
			break;
			case '%':
			$result = $firstNumber / $secondNumber;
			break;
		}
		return $result;
	}
}
?>