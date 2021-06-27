<?php 
$result = " ";
if (isset($_POST['btn'])) {
	$startNumber = $_POST['startNumber'];
	$endNumber = $_POST['endNumber'];
	$choice = $_POST['choice'];

	if ($startNumber <= $endNumber) {
		if ($choice == 'odd') {
			for($i=$startNumber; $i<=$endNumber; $i++){
				if($i % 2 !=0){
					$result .= $i." " ;
				}
			}
		}else{

			for($i=$startNumber; $i<=$endNumber; $i++){
				if ($i%2 == 0 ) {
					$result.=$i." ";
				}
			}
		}
	}
}
?>
<form action="" method="post">
	<table>
		<tr>
			<td>Starting Number :</td>
			<td><input type="text" name="startNumber" placeholder="Starting Nummber"></td>
		</tr>
		<tr>
			<td>Ending Number :</td>
			<td><input type="text" name="endNumber" placeholder="Ending Number"></td>
		</tr>
		<tr>
			<td>Choice :</td>
			<td>
				<input type="radio" name="choice" value="odd"> ODD :
				<input type="radio" name="choice" value="even"> EVEN :
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<textarea cols="20" rows="5">
					<?php echo $result; ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn" value="Submit"></td>
		</tr>
	</table>
</form>