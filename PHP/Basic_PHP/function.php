<?php 
	// Function Definition
	function concation(){
		$firstName = "Shaeed Al Hasan";
		$lastName = "Siam";
		$fullName = $firstName ." ". $lastName;
		echo $fullName;
	}
	// Function Calling
	concation();
	?>

	<?php 
/*
	function add($firstNumber, $secondNumber){
		 $result = $firstNumber + $secondNumber;
		 return $result;
	}

	echo add(10,2);
*/
	?>


	<?php 
	/*
	$result = "";
	if (isset($_POST['btn'])) {
			// function definition
		function myfullName($data){
			$firstName = $data['firstName'];
			$lastName = $data['lastName'];
			$phone =$data['phoneNo'];
			$fullName = $firstName ." ". $lastName ." ". $phone;
			return $fullName;
		}
		// function calling
		$result = myfullName($_POST);

	}

	echo $result

	?>

	<form action="" method="post">
		<table>
			<tr>
				<td>First Name :</td>
				<td><input type="text" name="firstName"></td>
			</tr>
			<tr>
				<td>Last Name :</td>
				<td><input type="text" name="lastName"></td>
			</tr>
			<tr>
				<td>Phone :</td>
				<td><input type="text" name="phoneNo"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="Submit"></td>
			</tr>
		</table>
	</form>
	*/