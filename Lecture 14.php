<!-- ======================PHP Loops==================== -->
<!-- =======Loops Basically we are using when we want to run or display something again and again. In simple words if you want to display the number '3' hundered times so you can use loop to save your time. In PHP we have four types of loops namely; while, do while, for loop, foreach loop. Let's try to understand this using an Example =================== -->

<!-- ==================PHP While Loop Example============= -->
<?php  
$d = 1;
 
while($d <= 10) {
  echo "The number is: $d ";

  $d++;
  
} 
?>  

<!-- ==============See Another Example============ -->
<?php
$l=1;
while ($l<=10) {
	echo "Number is: $l";
	echo "<br>";
	$l++;
}
?>

<!-- =================PHP do while Loop============= -->
<?php
$s=5;
do {
	echo "Result is: $s <br>";
	$s++;
} while ($s<=10);

?>

<!-- ================PHP For Loop============ -->
<!-- ====You use the for loop when you know in advance how may times you want to run the script===== -->

<?php
for ($i=0; $i <=8 ; $i++) { 
	echo "$i<br>";
}   // ==================More Examples you can solve===============
?>   

<!-- ===============PHP Foreach Loop============== -->
<!-- =============This loop only works on arrays and used to loop through each key/value pair in an array============ -->
<?php
$color= array('Red' ,'White','balck','green','Brown' ); // ======Array Declartion=====
foreach ($color as $value) {
	echo "$value <br>";   // ==========It will Actually return all values present in an array=======
}
	?>

<!-- ==========See Another Example=========== -->
<?php
$person = ['umer' =>'22' ,'Qasim'=>'20','Zain'=>'18' ];  // ===You can also write the array as well using square bracket===
foreach ($person as $x => $value) {
	echo "$x=$value <br>";
}
	?>

