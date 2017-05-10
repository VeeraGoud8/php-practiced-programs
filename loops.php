<!-- Loop Types -->
<!-- Foor Loop -->
<?php 
$a=0;
$b=0;
for($i=0;$i<=5;$i++)
{
	$a+=10;
	$b+=5;
}
echo "Value of a = $a and b=$b <br>";
?>

<!-- While Loop -->
<?php 
$i=0;
$num=50;
while ($i < 10) 
{
	$num--;
	$i++;
}
echo "After execution: i value is: $i and num =$num <br>";
?>


<!-- Do While Statement -->
<?php
$i=0;
$num=0;
do{
	$i++;
}while ($i < 10); 

echo "loop stopped at i=$i <br>";
?>


<!-- for each statement -->

<?php
$array=array(1,2,3,4,5);
foreach ($array as $value)
 {
 	echo "for each: value of $value <br>";
 } 
?>

<!-- Break Statement -->
<?php
$i=0;
while ($i <= 10)
 {
 	$i++;
 	if($i==4)Break;
 } 
 echo "Break Stmt: Loop stopped at $i <br>";
?>

<!-- Continue Statement -->
<?php
$array=array(1,2,3,4,5);
foreach ($array as $value) 
{
	if($value==3)Continue;
	echo "Value is $value <br>";
}
?>




