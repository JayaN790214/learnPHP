<?php
$name = "Jaya is a teacher";
echo $name;
echo "<br>";
//try to practice different string functions from php.net/strings

//to find the length of the string
echo strlen($name);
echo "<br>";

//to count total number of words
echo str_word_count($name);
echo "<br>";

//to repeat a string n times
echo str_repeat($name , 12);
echo "<br>";

//to reverse a string
echo strrev($name);
echo "<br>";

//to replace a part of string
echo str_replace($name,"jaya","priya");
echo "<br>";

//to find the position of a word in string
echo strpos($name,"is");
echo "<br>";
"<pre>";

//remove spaces from left
echo ltrim("    jaya is awesome!     ");
"</pre>";

//remove spaces from left
"<pre>";
echo rtrim("    jaya is awesome!     ");
"</pre>";

//note: practice is the key to success. try iy yourself!
?>
