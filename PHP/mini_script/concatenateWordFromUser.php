<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Concatenate word from user</title>
</head>
<body>
	<?php 
	$fullName = " ";

	if (isset($_POST['btn'])) {
		$firstName = $_POST['firstName'];
		$middleName = $_POST['middleName'];
		$lastName = $_POST['lastName'];
		$fullName = $firstName . $middleName . $lastName;
	}
	?>

	<form action="" method="POST" >
		<table align="center">
			<tr>
				<td>First Name :</td>
				<td><input type="text" name="firstName" placeholder="First Name"></td>
			</tr>
			<tr>
				<td>Middle Name :</td>
				<td><input type="text" name="middleName" placeholder="Middle Name"></td>
			</tr>
			<tr>
				<td>last Name :</td>
				<td><input type="text" name="lastName" placeholder="Last Name"></td>
			</tr>
			<tr>
				<td>Full Name :</td>
				<td><input type="text" placeholder="Full Name" value="<?php echo $fullName;?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>