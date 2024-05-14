<?php

// Data Types 
// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);



//php math

echo(pi());
echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));

echo(abs(-6.7));

echo(round(0.60)); //
echo(round(0.49)); //

echo(rand());

echo(rand(10, 100));



// if else 
$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}

$a = 5;

if ($a < 10) $b = "Hello";

echo $b



$favcolor = "red";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


//functions 
function myMessage() {
    echo "Hello world!";
  }


  // Arrays 
  $cars = array("Volvo", "BMW", "Toyota"); //

  $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction); //

// $myArr[2][1] = "Mango"; 
// $myArr[2]
   $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);



//Super Globals

// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST -> create, update , delete
// $_GET -> read
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION


// $GLOBALS

// $x = 75;
  
function myfunction() {
  global $x = 12;
  echo $x;
}


function callGlobal(){
  echo $x 
}

myfunction()


// $_SERVER
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];


// $_REQUEST

<html>
<body>

<form method="post" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>

// POST
<html>
<body>

<form method="POST" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

$name = $_post["fname"]


</body>
</html>



// GET
<html>
<body>

<form action="welcome_get.php" method="GET">
  Name: <input type="text" name="name">
  E-mail: <input type="text" name="email">
  <input type="submit">
</form>

</body>
</html>
?>