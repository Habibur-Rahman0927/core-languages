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

// $str1 = "kitten";
// $str2 = "sitting";
// $distance = levenshtein($str1, $str2);
// echo $distance; // Output: 3

// setlocale(LC_ALL, 'en_US.UTF-8');
// $locale_info = localeconv();
// print_r($locale_info);
// Output: Array with details like decimal point, thousands separator, and currency symbols, e.g., 
// Array ( [decimal_point] => . [thousands_sep] => , [currency_symbol] => $ ... )

// $str = "##--Hello, world!";
// $trimmed = ltrim($str, "#-"); // Second parameter specifies characters to remove
// echo $trimmed; // Output: Hello, world!

// $str1 = "       Hello, world!";
// $trimmed1 = ltrim($str1); 
// echo $trimmed1; // Output: Hello, world!

// $filename = 'example.txt';
// $hash = md5_file($filename);
// echo $hash; // Output: A string representing the MD5 hash of the file content, e.g., d41d8cd98f00b204e9800998ecf8427e

// $data = "Some important data.";
// $original_hash = md5($data);
// $received_data = "Some important data.";
// $received_hash = md5($received_data);
// if ($original_hash === $received_hash) {
//     echo "Data integrity verified!";
// } else {
//     echo "Data has been altered!";
// }

// $names = ["Robert", "Roberta", "Rupert", "Rapport"];
// $search_name = "Rbert";
// $search_key = metaphone($search_name); // RBRT
// $matches = array_filter($names, function($name) use ($search_key) {
//     return metaphone($name) === $search_key;
// });
// print_r($matches); // Output: Array ( [0] => Robert [1] => Rupert )

// setlocale(LC_MONETARY, 'en_US.UTF-8');
// $formatted_no_decimal = money_format('%.0n', 1234.56); // Format without decimal places
// echo $formatted_no_decimal; // Output: $1,235
// $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
// echo $formatter->formatCurrency(1234.56, 'USD'); // Output: $1,234.56

// setlocale(LC_ALL, 'en_US.UTF-8'); // Set locale to US English
// $decimal_point = nl_langinfo(RADIXCHAR);
// $thousand_sep = nl_langinfo(THOUSEP);
// echo "Decimal Point: $decimal_point"; // Output: Decimal Point: .
// echo "Thousand Separator: $thousand_sep"; // Output: Thousand Separator: ,

// $str = "Hello\n\nworld!";
// echo nl2br($str); // Output: Hello<br /><br />world!
// echo nl2br($str, false); // Output: Hello<br><br>world!

// $num = 987654321.1234;
// $formatted = number_format($num, 2, '.', ',');
// echo $formatted; // Output: 987,654,321.12

// $str = "A";
// $ascii_value = ord($str);
// echo $ascii_value; // Output: 65

// $query = "name=John&age=25";
// parse_str($query, $result);
// print_r($result); // Output: Array ( [name] => John [age] => 25 )

// $num = 5;
// $location = "tree";
// $length = printf("There are %d monkeys in the %s", $num, $location);
// // Output: There are 5 monkeys in the tree
// echo $length; // Output: 27

// $input = "First line=0ASecond line=0D=0AThird line";
// $output = quoted_printable_decode($input);
// echo $output;
// Output: 
// First line
// Second line
// Third line

// $input = "Hello, world!";
// $output = quoted_printable_encode($input);
// echo $output; // Output: Hello=2C=20world=21

// $str = "Hello. (world) [PHP]?";
// $escaped_str = quotemeta($str);
// echo $escaped_str; // Output: Hello\. \(world\) \[PHP\]\?

// $str = "Hello, world!   \t";
// $trimmed = rtrim($str, " \t");
// echo $trimmed; // Output: Hello, world!

// setlocale(LC_TIME, 'en_US.UTF-8');
// echo strftime("%A %B %d, %Y"); // Output: (e.g.) Monday June 10, 2024

// $filename = 'example.txt';
// $hash = sha1_file($filename);
// echo $hash; // Output: (e.g.) 7c222fb2927d828af22f592134e8932480637c0d

// $str = "Hello, world!";
// $hash = sha1($str);
// echo $hash; // Output: (e.g.) 943a702d06f34599aee1f8da8ef9f7296031d699

// $str1 = "Hello, world!";
// $str2 = "Hello, world!";
// similar_text($str1, $str2, $percent);
// echo $percent; // Output: 100

// $str = "Robert";
// $soundex_key = soundex($str);
// echo $soundex_key; // Output: R163

// $num = 5;
// $location = "tree";
// $formatted_str = sprintf("There are %d monkeys in the %s", $num, $location);
// echo $formatted_str; // Output: There are 5 monkeys in the tree

// $str = "age: 21; height: 180";
// echo $str;
// sscanf($str, "age: %d; height: %d", $age, $height);
// echo "Age: $age, Height: $height"; // Output: Age: 21, Height: 180

// $str = "Hello, World!";
// $substring = "world";
// if (str_contains($str, $substring)) {
//     echo "Found!";
// } else {
//     echo "Not found!"; // Output: Not found!
// }

// $str = "B1";
// $str_decrement = str_decrement($str);
// echo $str_decrement; // Output: B0 (assuming the function decrements strings)
// get implementation from chatgpt
// function str_decrement_test($str) {
//     $length = strlen($str);
//     $result = $str;
//     $carry = true;

//     for ($i = $length - 1; $i >= 0 && $carry; $i--) {
//         $char = $result[$i];

//         if (ctype_alpha($char)) {
//             if ($char == 'A') {
//                 $result[$i] = 'Z';
//             } elseif ($char == 'a') {
//                 $result[$i] = 'z';
//             } else {
//                 $result[$i] = chr(ord($char) - 1);
//                 $carry = false;
//             }
//         } elseif (ctype_digit($char)) {
//             if ($char == '0') {
//                 $result[$i] = '9';
//             } else {
//                 $result[$i] = chr(ord($char) - 1);
//                 $carry = false;
//             }
//         }
//     }

//     return $result;
// }

// // Example usage
// $str = "B1";
// $str_decrement = str_decrement_test($str);
// echo $str_decrement; // Output: B0

// $str = "Hello, world!";
// $substring = "world!";
// if (str_ends_with($str, $substring)) {
//     echo "Ends with 'world!'";
// } else {
//     echo "Does not end with 'world!'"; // Output: Does not end with 'world!'
// }

// $csv = "Hello,world,PHP";
// $array = str_getcsv($csv);
// print_r($array); // Output: Array ( [0] => Hello [1] => world [2] => PHP )

// $str = "A9";
// $str_increment = str_increment($str);
// echo $str_increment; // Output: B0 (assuming the function increments strings)
// // i get it form chat gpt
// function str_increment_test($str) {
//     $length = strlen($str);
//     for ($i = $length - 1; $i >= 0; $i--) {
//         $char = $str[$i];
        
//         // Check if character is a digit
//         if (ctype_digit($char)) {
//             if ($char == '9') {
//                 $str[$i] = '0';
//             } else {
//                 $str[$i] = chr(ord($char) + 1);
//                 return $str;
//             }
//         } 
//         // Check if character is an uppercase letter
//         elseif (ctype_alpha($char) && $char >= 'A' && $char <= 'Z') {
//             if ($char == 'Z') {
//                 $str[$i] = 'A';
//             } else {
//                 $str[$i] = chr(ord($char) + 1);
//                 return $str;
//             }
//         } 
//         // Check if character is a lowercase letter
//         elseif (ctype_alpha($char) && $char >= 'a' && $char <= 'z') {
//             if ($char == 'z') {
//                 $str[$i] = 'a';
//             } else {
//                 $str[$i] = chr(ord($char) + 1);
//                 return $str;
//             }
//         } 
//         // Handle other characters if necessary
//         else {
//             // Extend to other character sets if needed
//         }
//     }

//     // If all characters were carried over, prepend '1'
//     return '1' . $str;
// }

// // Example usage
// $str = "A9";
// $str_increment = str_increment_test($str);
// echo $str_increment; // Output: B0

// $str = "Hello, WORLD! Welcome to the world of PHP.";
// $search = "world";
// $replace = "PHP";
// $replaced = str_ireplace($search, $replace, $str);
// echo $replaced; 
// Output: Hello, PHP! Welcome to the PHP of PHP.

// $str = "Hello";
// $padded = str_pad($str, 10, "-", STR_PAD_RIGHT); // STR_PAD_LEFT, STR_PAD_BOTH
// echo $padded; // Output: Hello-----

// $stars = str_repeat("*", 10); // Output: **********
// echo $stars;

// $str = "Hello, world!";
// $count = 0;
// $replaced = str_replace("world", "PHP", $str, $count);
// echo $replaced; // Output: Hello, PHP!
// echo "Replacements made: " . $count; // Output: Replacements made: 1

// $str = "Hello, world!";
// $shuffled = str_shuffle($str);
// echo $shuffled; // Output: (e.g.) w,o rdl!eHlol

// $str = "Hello, world!";
// $array = str_split($str, 3);
// print_r($array); // Output: Array ( [0] => Hel [1] => lo, [2] =>  wo [3] => rld [4] => ! )

// $str = "Hello, world!";
// $substring = "hello";
// if (str_starts_with($str, $substring)) {
//     echo "Starts with 'Hello'"; // Output: Starts with 'Hello'
// } else {
//     echo "Not Found";
// }

// $str = "Hello, world!";
// $word_count = str_word_count($str);
// echo $word_count; // Output: 2

// $str1 = "Hello";
// $str2 = "hello";
// $result = strcasecmp($str1, $str2);
// echo $result; // Output: 0 (indicating strings are equal)

// $str = "Hello, world! php";
// $substring = "world";
// $result = strchr($str, $substring);
// echo $result; // Output: world! php

// $str1 = "Hello";
// $str2 = "hello";
// $result = strcmp($str1, $str2);
// echo $result; // Output: -32 (indicating str1 is greater than str2)

// $str1 = "apple";
// $str2 = "banana";
// $result = strcoll($str1, $str2);
// echo $result; // Output depends on locale-specific collation rules

// $str = "Hello, world!";
// $mask = "aeiou";
// $length = strcspn($str, $mask);
// echo $length; // Output: 2 (length until the first vowel is encountered)

// $html = "<p>Hello, <b>world!</b></p>";
// $stripped = strip_tags($html, '<b>');
// echo $stripped; // Output: Hello, <b>world!</b>

// $str = "Hello\'s world!";
// $unquoted = stripcslashes($str);
// echo $unquoted; // Output: Hello's world!

// $str = "Hello, world!";
// $substring = "WORLD";
// $pos = stripos($str, $substring);
// echo $pos; // Output: 7

// $str = "Path\\to\\file\\is\\C:\\\\temp\\\\file.txt";
// $unquoted = stripslashes($str);
// echo $unquoted; // Output: Path\to\file\is\C:\temp\file.txt

// $str = "Hello, world!";
// $substring = "WORLD";
// $result = stristr($str, $substring);
// echo $result; // Output: world!

// $str = "Hello, world!";
// $length = strlen($str);
// echo $length; // Output: 13

// $str1 = "file2.txt";
// $str2 = "File10.txt";
// $result = strnatcasecmp($str1, $str2);
// echo $result; // Output: 0 (indicating strings are equal in natural order comparison)

// $str1 = "file2.txt";
// $str2 = "File10.txt";
// $result = strnatcmp($str1, $str2);
// echo $result; // Output: 1 (indicating str1 is less than str2 in natural order comparison)

// $str1 = "Hello";
// $str2 = "HELLO, world!";
// $result = strncasecmp($str1, $str2, 5);
// echo $result; // Output: 0 (indicating the first 5 characters are equal)

// $str1 = "Hello";
// $str2 = "Hello, world!";
// $result = strncmp($str1, $str2, 5);
// echo $result; // Output: 0 (indicating the first 5 characters are equal)

// $str = "Hello, world!";
// $char_list = "aeiou";
// $result = strpbrk($str, $char_list);
// echo $result; // Output: ello, world! (returns the first occurrence of any vowel)

// $str = "Hello, world!";
// $substring = "world";
// $pos = strpos($str, $substring);
// echo $pos; // Output: 7

// $str = "Hello, world!";
// $char = "o";
// $result = strrchr($str, $char);
// echo $result; // Output: orld!

// $str = "Hello, world!";
// $reversed = strrev($str);
// echo $reversed; // Output: !dlrow ,olleH

// $str = "Hello, world! Hello!";
// $substring = "hello";
// $pos = strripos($str, $substring);
// echo $pos; // Output: 14

// $str = "Hello, world! Hello!";
// $substring = "Hello";
// $pos = strrpos($str, $substring);
// echo $pos; // Output: 14

// $str = "Hello, world!";
// $mask = "Helo";
// $length = strspn($str, $mask);
// echo $length; // Output: 5 (length until the first character not in the mask is encountered)

// $str = "Hello, world! php";
// $substring = "world";
// $result = strstr($str, $substring);
// echo $result; // Output: world!

// $str = "Hello, world!";
// $token = strtok($str, ",");
// echo $token;
// while ($token !== false) {
//     echo "$token\n"; // Output: Hello (newline) world! (newline)
//     $token = strtok(",");
//     echo $token;
// }

// $str = "Hello, WORLD!";
// $lowercase = strtolower($str);
// echo $lowercase; // Output: hello, world!

// $str = "Hello, world!";
// $uppercase = strtoupper($str);
// echo $uppercase; // Output: HELLO, WORLD!

// $str = "Hello, world!";
// $trans = strtr($str, "l", "L");
// echo $trans; // Output: HeLLo, worLd!

// $str = "Hello, world!";
// $compare = substr_compare($str, "world", 7, 5);
// echo $compare; // Output: 0 (indicating the substrings are equal)

// $str = "Hello, world! Hello!";
// $count = substr_count($str, "Hello");
// echo $count; // Output: 2

// $str = "Hello, world!";
// $replaced = substr_replace($str, "PHP", 7, 5);
// echo $replaced; // Output: Hello, PHP!

// $str = "Hello, world!";
// $substring = substr($str, 7, 12);
// echo $substring; // Output: world!

// $str = "   Hello    , world!   ";
// $trimmed = trim($str);
// echo $trimmed; // Output: Hello, world!

// $str = "hello, world!";
// $ucfirst = ucfirst($str);
// echo $ucfirst; // Output: Hello, world!

// $str = "hello, world!";
// $ucwords = ucwords($str);
// echo $ucwords; // Output: Hello, World!

// $handle = fopen("output.txt", "w");
// $vfprintf_result = vfprintf($handle, "%s %s", array("Hello,", "world!"));
// fclose($handle);

// $str = "Hello, world! How are you?";
// $wrapped = wordwrap($str, 10, "\n");
// echo $wrapped;

// done all string function in php