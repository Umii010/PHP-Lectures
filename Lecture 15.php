<!-- ==============PHP Continue & Break=================== -->
<?php
for ($i=0; $i <=8 ; $i++) { 
if ($i==5) {    //==========As the condition matchs it will stop here==========
break;
}
echo "Numbers are:$i";
echo "<br>";
}
?>

<!-- =================PHP Continue Example============ -->
<?php
for ($i=0; $i <=7 ; $i++) { 
	if ($i==4) {
		continue;
	}
echo "Numbers are:$i";
echo "<br>";
}
?>

<!-- =================PHP Functions================== -->
<!--==========The real power of PHP comes from its functions=======

============PHP has more than 1000 built-in functions, and in addition you can create your own custom functions========= -->
<?php
function mywork()
{
	echo "Hello to the PHP Programming";
}
mywork();
	?>

<!-- ==============PHP Function Argument============ -->

<?php
function mycode($fname)
{
	echo "$fname Muhammad.<br>";
}
mycode("Shoaib");
mycode("Qasim");

	?>

<!-- =============Another Example=============== -->
<?php
function addNumbers( $a, $b)  //===========As PHP is loosely typed language so it automatically takes the integar==========
{
	return $a*$b;
}
echo addNumbers(5,5);
	?>



<?php declare(strict_types=1);
function multiplyNumbers($int z,$int c)
{
	return $z*$c;
}
echo multiplyNumbers("5",8); //=======It gives you an error beacause strict type is present & can't take the String========
	?>


<!-- =======================PHP Passing Arguments by Reference========================= -->
<?php
function by_arugument(&$value)
{
	$value+=5;

}
$num=4;
by_arugument($num);
echo("$num");
	?>