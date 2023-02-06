<!-- =============PHP Sorting Arrays=========== -->
<!-- Elements in an array can be sorted in alphabetical or numerical order, descending or ascending. -->

<?php
$subjects = array('Math' ,'Programming','DSA','AI','CNDC','IOTs','OS','SPM','APD','DS' );
sort($subjects);   //Here sort functions is used to sort an array in Asending Order

$lenght=count($subjects);
for ($i=0; $i <$lenght ; $i++) { 
	echo "<br>";
	echo $subjects[$i];
}
?>

<!-- ==============See Another Example using rsort() will sort an array in desc Order============= -->
<?php
$id = array('Umer' =>'19' ,'Qasim'=>'22','Hammad'=>'11' );
rsort($id);
$lenght=count($id);
for ($i=0; $i <$lenght ; $i++) { 
	echo "<br>";
	echo $id[$i];
}
?><!-- 
=================================================== -->
<?php
$fruit = array('apple','banana','Peach','appricot' );
sort($fruit);
$lenght=count($fruit);
for ($i=0; $i <$lenght ; $i++) { 
	echo "<br>";
	echo $fruit[$i];
}
	?>

<!-- ======================PHP Global Variables - Superglobals========================
=========Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special===================

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
 -->




<!-- ===============PHP Global Example================ -->

<?php 
$x = 13;
$y = 12; 

function addition1() {
  $GLOBALS['f'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition1();
echo $f;
?>

<!-- ================PHP Server Example=========== -->
<?php
ECHO $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
	?>

<!-- <a href="https://www.w3schools.com/php/php_superglobals_server.asp"> //Read more about Server -->
<!-- ================PHP $_REQUEST============
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form. -->


<!-- =============PHP GET & POST================

"GET" and "POST" are two methods used in HTTP (Hypertext Transfer Protocol) to send data from a client (e.g. a web browser) to a server.

"GET" method is used to retrieve data from a server and is the default method for most web browsers. The data is sent in the URL, making it visible to the user. "GET" method is limited in the amount of data it can send, as the total size of the URL is restricted.

"POST" method is used to send data to a server, typically to submit a form. The data is sent in the body of the HTTP request and is not visible in the URL. "POST" method has no restrictions on the amount of data that can be sent and is generally more secure than "GET".

In PHP, "GET" data is accessed using the $_GET superglobal array and "POST" data is accessed using the $_POST superglobal array. -->