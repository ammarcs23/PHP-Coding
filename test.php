<?php
// 1. Hello World print
echo "Hello Ammar! Welcome to PHP.<br>";
echo
// 2. Variables aur addition
$num1 = 30;
$num2 = 20;
$sum = $num1 + $num2;
echo "Sum of {$num1} and {$num2} is: {$sum}<br>";

// 3. Array aur loop
$fruits = ["Apple", "Banana", "Mango","Mubashar"];
echo "Fruits list:<br>";
foreach ($fruits as $fruit) {
    echo "* {$fruit}<br>";
}

// 4. Conditional Statement
$age = 18;
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are not an adult.<br>";
}

// 5. Function Example
function greet($name) {
    return "Hello, {$name}! How are you?<br>";
}

echo greet("Ammar");

// 6. Current Date and Time
echo "Current Date and Time: " . date("Y-m-d H:i:s") . "<br>";

// 7. Simple HTML inside PHP
echo "<h3>This is an HTML heading inside PHP!</h3>";

//cd /d D:\Web-Technologies\PHP-Coding
//php -S localhost:8000
?>

