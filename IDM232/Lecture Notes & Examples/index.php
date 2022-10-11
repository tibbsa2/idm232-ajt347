hello

<?php echo 'what\'s good!'; ?> 
<!- becomes plain text --> 
<?php //This is a PHP comment ?>
<!-- you can not see PHP comments within the browser--> 

<!-- always need the <php tags prior to writing php  -->

<?php 
//VARS 

$varName = 'some string';

$or_snake_case = 'use dat snake case and be consistent';

$x = 'hello world';
$y = 'bet';
echo $x;
echo '<br>';
echo $x + $y;

echo '<br>';
var_dump ($x);

$z = var_dump ($x);
//echo $z;

//Arrays 
$myArray = [
  'value 1',
  'value 2',
  'value 3',
  ['more', 'arrayss', 'nested']
];
//echo $myArray[3];
 
//Concatenation, merging two vars together (add dat period in PHP)

// single '' quotes print just strings, double quotes, PHP assumes that you want to print the value of a variable as well
$greeting = 'Hello' ;
$target = 'World';
$phrases = $greeting . ' '. $target;
echo $phrases;
echo "$phrases AGAINN <br>";

//basic math, PEMDAS

// ++ means increment by 1 

//PHP built in functions 
//round anumber > echo round(float number) >rounds to the tenth 
//round up > echo ceil 
/* Multiline comment
round down to nearest whole number echo floor


LOGIC function 

is_int($varName) then returns TRUE or FALSE 1 = true, 0 - false in PHP 
also is_float()
and is_numeric()*/
?>
<h1>What's gooooddd</h1>