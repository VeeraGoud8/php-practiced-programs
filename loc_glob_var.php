<!-- Local Variables -->

<!-- variable declared inside function is local variabel -->
<?php
   $x = 4;
   
   function assignx () { 
      $x = 0;
      print "\$Local Variable :x inside function is $x. <br />";
   }
   
   assignx();
   print "\$Global Variable: x outside of function is $x. <br />";
?>


<!-- Constants: case insensitive -->
<?php
define("GREETING", "Welcome to W3Schools.com! <br>");
echo GREETING;
?>


<!-- Constants: case sensitive -->
<?php
define("GREETING", "Welcome to W3Schools.com! <br>",true);
echo greeting;
?>


<!-- Global Constants -->
<?php 
define("GlobalConst","Global Constant!");

function myTest()
{
	echo GlobalConst."<br />";
}
myTest();
?>


<!-- Static Variable -->
<?php 
function static_example()
{
	STATIC $count=0;
	$count++;
	//var_dump($count);
	print($count);
	print "<br />";
}
static_example();
static_example();
static_example();
?>