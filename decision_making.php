<!-- Php Decision Making -->
<!-- if, if else, else if, switch -->
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!<br>";
} else {
    echo "Have a good night!";
}
?>

<!-- if else if example -->

<?php 
$t=date("H");
if($t < "20")
{
	echo "have a great day!!";
	echo("<br>");
}
elseif ($t<	"25") 
{
	echo "have a nice day!!<br>";
}
else 
{
	echo "Good Night!";
}
?>
