<?php 
$word = "";
$charecter = "";
if (isset($_POST['btn'])) {
		// function defination
	function wordCharacterCount($data){
		$user_string = $data['user_string'];

		// make array
		$result = array();
		$result['strLength'] = strlen($user_string);
		$result['strWord'] = str_word_count($user_string);

		return $result;
	}

	// function calling
	$res = wordCharacterCount($_POST);
	$word = $res['strWord'];
	$charecter = $res['strLength'];
}

?>


<form action="" method="post">
	<table>
		<tr>
			<td>Enter String :</td>
			<td><input type="text" name="user_string"></td>
		</tr>
		<tr>
			<td>Number of Word :</td>
			<td><input type="text" value="<?php echo $word?>"></td>
		</tr>
		<tr>
			<td>Number of Charecter</td>
			<td><input type="text" value="<?php echo $charecter?> "></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn" value="SubmiT"></td>
		</tr>
	</table>	
</form>