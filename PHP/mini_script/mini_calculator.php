<?php 
$result = '';

if (isset($_POST['btn'])) {
// echo "<pre>";
// print_r($_POST);
$firsNumber = $_POST['firsNumber'];
$secondNumber = $_POST['secondNumber'];
$btn = $_POST['btn'];

// usein switch case
switch ($btn) {
	case '+':
		$result = $firsNumber + $secondNumber;
		break;
	case '-':
		$result = $firsNumber - $secondNumber;
		break;
	case '*':
		$result = $firsNumber * $secondNumber;
		break;
	case '/':
		$result = $firsNumber / $secondNumber;
		break;
	case '%':
		$result = $firsNumber % $secondNumber;
		break;
}

// using if elseif
		/*if ($btn == "+") {
			$result = $firstNumber + $secondNumber;
		}
		elseif ($btn == "-") {
			$result = $firstNumber - $secondNumber;
		}
		elseif ($btn == "*") {
			$result = $firstNumber * $secondNumber;
		}
		elseif ($btn == "/") {
			$result = $firstNumber / $secondNumber;
		}
		elseif ($btn == "%") {
			$result = $firstNumber % $secondNumber;
		}*/
}
?>

<form action="" method="post">
	<table>
		<tr>
			<th>First Number</th>
			<td><input type="text" name="firsNumber" placeholder="Enter Your First Number"></td>
		</tr>
		<tr>
			<th>Second Number</th>
			<td><input type="text" name="secondNumber" placeholder="Enter Your Second Number"></td>
		</tr>
		<tr>
			<th>Result</th>
			<td><input type="text" value="<?php echo $result; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input type="submit" name="btn" value="+">
			<input type="submit" name="btn" value="-">
			<input type="submit" name="btn" value="*">
			<input type="submit" name="btn" value="/">
			<input type="submit" name="btn" value="%">
			</td>
		</tr>
	</table>
</form>