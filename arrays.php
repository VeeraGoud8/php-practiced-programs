<!-- Numeric Arrays -->

<?php 
$array = array(1,2,3,4,5);
foreach ($array as $value) 
{
	echo "Array Value $value <br>";
}
//Another way of creating array
echo"----------------------<br>";
$array[0]="one";
$array[1]="two";
$array[2]="three";
$array[3]="four";
$array[4]="five";
foreach ($array as $value) 
{
	echo "Array value $value<br>";
}
?>

<!-- Associative Array -->
<?php 
$age=array('A1' =>20 ,'B1'=>21,'C1'=>22);

echo "----------------------<br>";
echo "Age of A1 is". $age['A1'] . "<br>";
echo "Age of B1 is". $age['B1'] . "<br>";
echo "Age of C1 is". $age['C1'] . "<br>";

$age['A1']="Low";
$age['B1']="Medium";
$age['C1']="High";

echo "----------------------<br>";
echo "Age of A1 is". $age['A1'] . "<br>";
echo "Age of B1 is". $age['B1'] . "<br>";
echo "Age of C1 is". $age['C1'] . "<br>";
echo "----------------------<br>";
?>

<!-- Multi Dimensional Array -->


