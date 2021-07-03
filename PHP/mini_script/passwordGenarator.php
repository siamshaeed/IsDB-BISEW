<?php 
$genPass = "";
if (isset($_POST['btn'])) {
		// function definition
	function mypassGenarator($data){
		$password = " ";
		$passwordLanghtTake = $data['passwordLanghtTake'];
		$value  = array('0','A','a','m','*','b','@','0','9','Z');
		for ($i=1; $i <= $passwordLanghtTake ; $i++) { 
			$index = rand(0,9);
			$password.=$value[$index];
		}
		return $password;
	}

		// function calling
	$genPass = mypassGenarator($_POST);
}
?>
<form action="" method="post">
	<table>
		<tr>
			<td>Password Langht :</td>
			<td><input type="number" name="passwordLanghtTake"></td>
		</tr>
		<tr>
			<td>Genarate Password :</td>
			<td><input type="text" value=""></td>
		</tr>
		<tr>
			<td><?php echo $genPass;?></td>
			<td><input type="submit" name="btn" value="SubmiT"></td>
		</tr>
	</table>
</form>