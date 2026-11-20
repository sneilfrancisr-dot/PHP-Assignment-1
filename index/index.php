<?php

echo "<h1>PHP Conditional Statements</h1>";

echo "<h2>1. IF Statement</h2>";

$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
}

echo "<h2>2. IF ELSE Statement</h2>";

$number = 10;

if ($number % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo "<h2>3. IF ELSEIF ELSE Statement</h2>";

$grade = 85;

if ($grade >= 90) {
    echo "Excellent";
} elseif ($grade >= 80) {
    echo "Very Good";
} elseif ($grade >= 75) {
    echo "Passed";
} else {
    echo "Failed";
}

echo "<h2>4. SWITCH Statement</h2>";

$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Invalid Day";
}

?>
