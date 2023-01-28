<!-- PHP if/else...else/if Statements -->
<!-- In PHP we have the following conditional statements:
if statement ----- executes some code if one condition is true
if...else statement ------executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement ----- selects one of many blocks of code to be executed -->

<!--========= Example(if else)======== -->
<?php
$z=3;
$y=7;
if ($z>$y) {
echo "X is Greater";
}
else{
echo "Y is Greater";
echo "<br>"; // used to display result in next line	
}
?>

<!-- ===========================Example(if else, else if, else)======================== -->
<?php
$w=102;
$u=21;
if($w<$u){
	echo "W is smaller";
}
elseif ($u<$w) {
	echo "U is Greater";
	echo "<br>";
}
else{
	echo "Error";
}
?>

<!-- ===============Switch statement is used to perform different actions based on different conditions============== -->
<!-- ===============See An Example============== -->
<?php
$programming="PHP";
switch ($programming) {
case 'PHP':
echo "You Favourite language is PHP";
break;
case 'C++':
echo "Your Favourite language is C++";
break;
case 'JAVA':
echo "Your Favourite language is JAVA";
break;
case 'Dart':
echo "Your Favourite language is Dart";
break;
default:
echo "You have not selected any option";
break;
}
?>
<!-- *************===========You can do more examples on your behalf=============*************** -->

