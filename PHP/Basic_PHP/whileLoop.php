<?php
/*The while statement will execute a block of code if and as long as a test expression is true.
If the test expression is true then the code block will be executed. After the code has executed the test expression will again be evaluated and the loop will continue until the test expression is found to be false*/

//Example :1
$x = 1;
while ( $x <= 5) {
	echo "The Number is : $x <br>";
	$x++;
}

//Example :2
$a = 50;
$b = 0;
while ($b < 10) {
	$a--;
	$b++;
}
echo "Here A = $a and B=$b";
?>