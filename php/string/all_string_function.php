<?php 

// $str = "Hello, world!";
// echo addcslashes($str, 'A..z'); // Output: \H\e\l\l\o,\ \w\o\r\l\d!

// $str = "Hello, 'world'!";
// echo addslashes($str); // Output: Hello, \'world\'!

// $str = "Hello, world!";
// echo bin2hex($str); // Output: 48656c6c6f2c20776f726c6421

// $str = "   Hello, world!   ";
// echo chop($str); // Output: Hello, world!

// echo chr(65); // Output: A

// $str = "Hello, world!";
// echo chunk_split($str, 2, "-"); // Output: He-ll-o, -wo-rl-d!

// $str = "+22!L;W9E(&UU8V]R;&]O(%!E('1O('1E<W1R:6YG";
// echo convert_uudecode($str); // Output: I love PHP!

// $str = "I love PHP!";
// echo convert_uuencode($str); // Output: "+22!L;W9E(&UU8V]R;&]O(%!E('1O('1E<W1R:6YG\n`

// $str = "Hello, world!";
// print_r(count_chars($str, 1)); // Output: Array ( [44] => 1 [32] => 1 [33] => 1 [72] => 1 [101] => 1 [108] => 3 [111] => 2 [114] => 1 [119] => 1 [100] => 1 )

// $str = "Hello, world!";
// echo crc32($str); // Output: 222957957

// $password = "securepassword";
// $salt = "abc123"; // Normally, a salt is more complex and secure.
// $hashedPassword = crypt($password, $salt);
// echo $hashedPassword; // Output: abcEPMsZJqK/c

// echo "Hello", " ", "world!"; // Output: Hello world!

// $languages = "Python,JavaScript,PHP,Ruby";
// $languageArray = explode(",", $languages);
// print_r($languageArray);

// $filename = 'example.txt'; // The name of the file to be written to
// $numberOfApples = 10;      // The number of apples
// // Open the file for writing
// $filePointer = fopen($filename, 'w');
// // Check if the file was successfully opened
// if ($filePointer) {
//     // Write formatted data to the file
//     fprintf($filePointer, "There are %d apples", $numberOfApples);
//     // Close the file
//     fclose($filePointer);
//     // Output success message
//     echo "Data written to file successfully.";
// } else {
//     // Output error message if the file could not be opened
//     echo "Failed to open file.";
// }

// Get the HTML entities translation table
// $table = get_html_translation_table(HTML_ENTITIES);

// Print a subset of the translation table for better understanding
// print_r(array_slice($table, 0, 10)); // Display the first 10 entries for brevity
// it's return associative array like that
// Array
// (
//     ["] => &quot;
//     [&] => &amp;
//     ['] => &#039;
//     [<] => &lt;
//     [>] => &gt;
//     [ ] => &nbsp;
//     [¡] => &iexcl;
//     [¢] => &cent;
//     [£] => &pound;
//     [¤] => &curren;
// )

// $logicalHebrew = "שלום עולם";
// $logicalHebrew = "Shalom, olam!";
// $visualHebrew = hebrev($logicalHebrew);
// echo $visualHebrew;

// $hex = "48656c6c6f";
// $bin = hex2bin($hex);
// echo $bin; // Output: Hello

// $userInput = "<script>alert('XSS');</script>";
// $safeOutput = htmlentities($userInput);
// echo $safeOutput; // Output: &lt;script&gt;alert(&#039;XSS&#039;);&lt;/script&gt;

// $encodedHtml = "&lt;p&gt;This is &quot;encoded&quot; content.&lt;/p&gt;";
// $decodedHtml = htmlspecialchars_decode($encodedHtml);
// echo $decodedHtml; // Output: <p>This is "encoded" content.</p>


// $userInput = "<script>alert('XSS');</script>";
// $safeOutput = htmlspecialchars($userInput);
// echo $safeOutput; // Output: &lt;script&gt;alert(&#039;XSS&#039;);&lt;/script&gt;

// $array = ["Hello", "world", "PHP"];
// $str = implode(" ", $array);
// echo $str; // Output: Hello world PHP

// $array = ["Hello", "world", "PHP"];
// $str = join(", ", $array);
// echo $str; // Output: Hello, world, PHP

// $str = "Hello";
// $newStr = lcfirst($str);
// echo $newStr; // Output: hello
