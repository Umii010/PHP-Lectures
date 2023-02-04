<!-- ==================PHP Arrays================
==========The Advantage of an array is that it can store multiple values of same data type in one variable=================== -->
<?php
$laptop=['HP','Lenovo','intel','Acer','DELL']; //Creating an Array
echo $laptop[0];

?>

<!-- =============See Another Example================ -->
<?php
$colors=array('Red' ,'Blue','Orange','Green'); //Another way to create an Array is to use Array Function
echo $colors[2];
echo count($colors); //You can also get the lenght of an array using count function
?>
<!-- 
=====In PHP there are 3 types of arrays======:
1: Indexed Array
2:Associative Array
3: Multidimensional Array 


=======PHP Indexed Arrays========
There are two ways to create indexed arrays:
The index can be assigned automatically (index always starts at 0), like this:
$cars = array("Yaris", "Ford", "Toyota");


OR the index can be assigned manually:
$cars[0] = "Nissan";
$cars[1] = "Hyundai";
$cars[2] = "Suzuki";-->


<!-- ==============PHP Associative Arrays==============
Associative arrays are arrays that use named keys that you assign to them. -->

<?php
$mobiles = array('Samsung' =>'300$' ,'Iphone'=>'500$','Google'=>'150$' ); // ========An Example of Associative array======
echo $mobiles[1];
	?>
<!-- 
==============PHP - Multidimensional Arrays===============
A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.============= -->



<!-- ==============Two_Dimensional Array Example============= -->
<?php
$bikes = array( array('Suzuki','3200$'),array('Yamaha' ,'3600$'));
echo $bikes[0][1];
echo "<br>";
echo $bikes[1][0];

	?>


<!-- =============See Another Example of 2D Array============ -->
<?php
$networks = array( array('Zong' ,'4G' ), array('Ufone' ,'5G' ),array('jazz' ,'4G' ));
echo $networks[2][1];
echo "<br>";
echo $networks[1][0];
	?>