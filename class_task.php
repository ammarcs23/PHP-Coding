7<?php
// 1. String (text values)
$str = "Hello World";
echo "String: $str";
echo "<br>";

// 2. Integer (whole numbers)
$int = 25;
echo "Integer: $int";
echo "<br>";

// 3. Float (decimal numbers)
$float = 10.75;
echo "Float: $float";
echo "<br>";

// 4. Boolean (true or false)
$bool = true;
var_dump($bool);   // true ya false show karne ke liye var_dump use hota hai
echo "<br>";

// 5. Array (multiple values)
$arr = array("Apple", "Banana", "Mango");
print_r($arr);     // array ko print karne ke liye
echo "<br>";
echo $arr[0];
echo "<br>";

// 6. Object
class Student {
    public $name;
}

$obj = new Student();
$obj->name = "Ammar";

echo "Object Name: " . $obj->name;
echo "<br>";

// 7. NULL (empty variable)
$emptyVar = NULL;
var_dump($emptyVar);
echo "<br>";



// 9. Mixed (any type value)
$mixed = "Text";
$mixed = 100;
$mixed = 3.14;
var_dump($mixed);
?>

//cd /d D:\Web-Technologies\PHP-Coding
//php -S localhost:8000
