<?php
$result = '';
if (isset($_POST['btn'])){
// echo "<pre>";
// print_r($_POST);
	$startingNUmber = $_POST['starting'];
	$endingNumber = $_POST['ending'];
	$chack = $_POST['chack'];
	if ($startingNUmber <= $endingNumber) {
		if($chack == 'odd'){
			for ($i=$startingNUmber; $i <= $endingNumber ; $i++) { 
				if ($i % 2 != 0 ) {
					$result.=$i."";
				}
			}
		}else{
			for ($i=$startingNUmber; $i <= $endingNumber ; $i++) { 
				if ($i % 2 == 0){
					$result.=$i."";
				}
			}
		}
		}
	}
	?>
	<form action="" method="post">
		<table>
			<tr>
				<th>Starting Number</th>
				<td><input type="text" name="starting" placeholder="Enter your starting number"></td>
			</tr>
			<tr>
				<th>Ending Number</th>
				<td><input type="text" name="ending" placeholder="Enter your ending number"></td>
			</tr>
			<tr>
				<th>Select </th>
				<td>
					<input type="radio" name="chack" value="odd" >Odd
					<input type="radio" name="chack" value="even" >Even
				</td>
			</tr>
			<tr>
				<td></td>
				<td><textarea  cols="40" rows="8"><?php echo $result;?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="Show Result"></td>
			</tr>
		</table>
	</form>