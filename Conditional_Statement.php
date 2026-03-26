<?php

// Sample variables
$age = 20;
$marks = 75;
$day = "Monday";
$hasID = true;


// 1. Simple if
if ($age >= 18) {
    echo "You are adult<br>";
}


// 2. if...else
if ($age >= 18) {
    echo "Adult<br>";
} else {
    echo "Minor<br>";
}


// 3. if...elseif...else
if ($marks >= 90) {
    echo "Grade A+<br>";
} elseif ($marks >= 70) {
    echo "Grade A<br>";
} elseif ($marks >= 50) {
    echo "Grade B<br>";
} else {
    echo "Fail<br>";
}


// 4. Nested if
if ($age >= 18) {
    if ($hasID) {
        echo "Entry allowed<br>";
    } else {
        echo "ID required<br>";
    }
}


// 5. switch statement
switch ($day) {
    case "Monday":
        echo "Start of week<br>";
        break;
    case "Friday":
        echo "Weekend coming<br>";
        break;
    default:
        echo "Normal day<br>";
}


// 6. Ternary operator
echo ($age >= 18) ? "Adult (Ternary)<br>" : "Minor (Ternary)<br>";


// 7. Null coalescing operator
$name = $_GET['user'] ?? "Guest";
echo "Hello " . $name . "<br>";


// 8. match (PHP 8+)
$result = match($day) {
    "Monday" => "Start of week (match)",
    "Friday" => "Weekend coming (match)",
    default => "Normal day (match)"
};
echo $result . "<br>";


// 9. Alternative syntax (mostly for HTML)
?>
<?php if ($age >= 18): ?>
    <p>Adult (Alternative Syntax)</p>
<?php else: ?>
    <p>Minor (Alternative Syntax)</p>
<?php endif; ?>

//php -S localhost:8000