<?php
$full_name ='';
if(isset($_POST['btn'])){
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$full_name = $firstName  .  $lastName;
}
?>
<form action="" method="post">
	<table>
		<tr>
			<th>First Name :</th>
			<td><input type="text" name="first_name"></td>
		</tr>
		<tr>
			<th>Last Namee :</th>
			<td><input type="text" name="last_name"></td>
		</tr>
		<tr>
			<th>Full Namee :</th>
			<td><input type="text" name="full_name" value="<?php echo "FullName :" . $full_name ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn" value="Submit"></td>
		</tr>
	</table>
</form>