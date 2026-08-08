<?php
// 1. strlen()
// Returns the length of a string
$text = "Hello World";
echo strlen($text);   // Output: 11


// 2. str_word_count()
// Counts the number of words in a string
$text = "Hello World";
echo str_word_count($text);   // Output: 2


// 3. str_contains()
// Checks whether a string contains a specific word/text
// Returns true or false
$text = "Hello World";

if (str_contains($text, "Hello")) {
    echo "Hello found";
}

// 4. strpos()
// Finds the position of a word/character in a string
// Position starts from 0
$text = "Hello World";
echo strpos($text, "World");   // Output: 6


// 5. strtoupper()
// Converts a string to uppercase
$text = "hello";
echo strtoupper($text);   // Output: HELLO


// 6. strtolower()
// Converts a string to lowercase
$text = "HELLO";
echo strtolower($text);   // Output: hello


// 7. str_replace()
// Replaces a word/text with another word/text
$text = "Hello World";
echo str_replace("World", "Earth", $text);
// Output: Hello Earth


// 8. strrev()
// Reverses a string
$text = "Hello";
echo strrev($text);   // Output: olleH


// 9. trim()
// Removes whitespace from the beginning and end
$text = "   Hello PHP   ";
echo trim($text);   // Output: Hello PHP


// 10. explode()
// Converts a string into an array
// Uses a separator
$text = "A,B,C";

$fruits = explode(",", $text);

print_r($fruits);
// Output:
// Array ( [0] => A [1] => B [2] => C)



// 11. implode()
// Converts an array into a string
$fruits = array("A", "B", "C");

$text = implode(", ", $fruits);

echo $text;
// Output: A, B, C


// 12. substr()
// Returns a part of a string
// substr(string, starting_position, length)
$text = "Hello World";

echo substr($text, 0, 5);
// Output: Hello


// 13. is_int()
// Checks whether a value is an integer
// Returns true or false
$num = 10;

var_dump(is_int($num));
// Output: bool(true)


// 14. is_float()
// Checks whether a value is a floating-point number
$num = 10.5;

var_dump(is_float($num));
// Output: bool(true)


// 15. is_nan()
// Checks whether a value is Not a Number (NaN)
$num = acos(2);

var_dump(is_nan($num));
// Output: bool(true)


// 16. is_numeric()
// Checks whether a value is a number or numeric string
$num = "123";

var_dump(is_numeric($num));
// Output: bool(true)


// 17. round()
// Rounds a number to the nearest integer
$num = 5.65;

echo round($num);
// Output: 6


// 18. define()
// Creates a constant
// A constant's value cannot normally be changed
define("PI", 3.14159);

echo PI;
// Output: 3.14159


// 19. date()
// Formats the current date/time
// "Y-m-d" means Year-Month-Day
echo date("Y-m-d");
// Output: 2026-08-08


// 20. strtotime()
// Converts a date/time string into a Unix timestamp
$date = strtotime("tomorrow");

echo date("Y-m-d", $date);
// Displays tomorrow's date


// 21. time()
// Returns the current Unix timestamp
echo time();


// 22. date_default_timezone_set()
// Sets the default timezone
date_default_timezone_set("Asia/Dhaka");

echo date("Y-m-d H:i:s");


// 23. date_default_timezone_get()
// Returns the current default timezone
echo date_default_timezone_get();
// Output: Asia/Dhaka


// 24. include
// Includes another PHP file
// If the file is missing, PHP gives a warning
// and continues executing
include "header.php";


// 25. require
// Includes another PHP file
// If the file is missing, PHP gives a fatal error
// and stops execution
require "config.php";


// 26. json_encode()
// Converts PHP data into JSON format
$data = array(
    "name" => "Ram",
    "age" => 20
);

$json = json_encode($data);

echo $json;
// Output: {"name":"Ram","age":20}


// 27. json_decode()
// Converts JSON data into PHP data
$json = '{"name":"Ram","age":20}';

$data = json_decode($json, true);

echo $data["name"];
// Output: Ram


// 28. array()
// Creates an array
$students = array("Rahim", "Karim", "Shofiq");

print_r($students);


// 29. array_keys()
// Returns all keys of an array
$student = array(
    "name" => "Shofiq",
    "age" => 20,
    "department" => "CSE"
);

print_r(array_keys($student));

// Output:
// Array ( [0] => name [1] => age [2] => department )


// 30. array_merge()
// Combines two or more arrays
$array1 = array("A", "B");
$array2 = array("C", "D");

$result = array_merge($array1, $array2);

print_r($result);

// Output:
// A, B, C, D


// 31. array_push()
// Adds one or more elements to the END of an array
$fruits = array("A", "B");

array_push($fruits, "C");

print_r($fruits);

// Output:
// A, B, C


// 32. array_reverse()
// Reverses the order of an array
$numbers = array(1, 2, 3, 4, 5);

$result = array_reverse($numbers);

print_r($result);

// Output:
// 5, 4, 3, 2, 1


// 33. sizeof()
// Returns the number of elements in an array
// sizeof() is an alias of count()
$students = array("Rahim", "Karim", "Shofiq");

echo sizeof($students);
// Output: 3


// 34. count()
// Returns the number of elements in an array
$students = array("Rahim", "Karim", "Shofiq");

echo count($students);
// Output: 3


// 35. sort()
// Sorts an array in ascending order
$numbers = array(5, 2, 4, 1, 3);

sort($numbers);

print_r($numbers);

// Output:
// 1, 2, 3, 4, 5

?>