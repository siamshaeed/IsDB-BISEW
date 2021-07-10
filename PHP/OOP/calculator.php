<?php 
$res = " ";
if (isset($_POST['btn'])) {
	require_once 'class.php';
	$objmycalculator = new calculator;
	$res = $objmycalculator -> mycalculator($_POST);
	// echo "<pre>";
	// print_r($res);
}
?>

<form  method="post">
	<table>
		<tr>
			<td>First Number :</td>
			<td><input type="text" name="firstNumber"></td>
		</tr>
		<tr>
			<td>Second Number :</td>
			<td><input type="text" name="secondNumber"></td>
		</tr>
		<tr>
			<td>Result :</td>
			<td><input type="text" value="<?php echo $res;?>"></td>
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