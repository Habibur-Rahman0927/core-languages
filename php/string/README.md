# PHP String Functions Examples

Welcome to the repository showcasing examples of various PHP string functions along with detailed explanations and outputs.

## Functions Covered

1. **addcslashes**
   - `addcslashes(string $str, string $charlist): string`
   - Quote string with slashes in a C style. Returns a string with backslashes added before specified characters.
   - **Example:**
     ```php
     $str = "Hello, world!";
     echo addcslashes($str, 'A..z'); // Outputs: \H\e\l\l\o, \w\o\r\l\d!
     ```
     **Output:** \H\e\l\l\o, \w\o\r\l\d!

2. **addslashes**
   - `addslashes(string $str): string`
   - Quote string with slashes. Returns a string with backslashes added before characters that need to be quoted.
   - **Example:**
     ```php
     $str = "It's a beautiful day!";
     echo addslashes($str); // Outputs: It\'s a beautiful day!
     ```
     **Output:** It\'s a beautiful day!

3. **bin2hex**
   - `bin2hex(string $str): string`
   - Convert binary data into hexadecimal representation. Returns a hexadecimal string.
   - **Example:**
     ```php
     $binaryData = "Hello, world!";
     echo bin2hex($binaryData); // Outputs: 48656c6c6f2c20776f726c6421
     ```
     **Output:** 48656c6c6f2c20776f726c6421

4. **chop**
   - Alias of rtrim(). Removes whitespace or other specified characters from the end of a string.
   - **Example:**
     ```php
     $str = "Hello, world!   ";
     echo chop($str); // Outputs: Hello, world!
     ```
     **Output:** Hello, world!

5. **chr**
   - `chr(int $ascii): string`
   - Return a specific character based on its ASCII value. Returns a one-character string.
   - **Example:**
     ```php
     $asciiValue = 65;
     echo chr($asciiValue); // Outputs: A
     ```
     **Output:** A

6. **chunk_split**
   - `chunk_split(string $str, int $length = 76, string $end = "\r\n"): string`
   - Split a string into smaller chunks. Returns a string with chunks separated by specified delimiter and length.
   - **Example:**
     ```php
     $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
     echo chunk_split($str, 20, "<br>"); // Outputs: Lorem ipsum dolor <br>sit amet, consectetu<br>r adipiscing elit.<br>
     ```
     **Output:** Lorem ipsum dolor <br>sit amet, consectetu<br>r adipiscing elit.<br>

7. **convert_cyr_string**
   - `convert_cyr_string(string $str, string $from, string $to): string|false`
   - Convert a string from one Cyrillic character set to another. Returns the converted string or false on failure.
   - **Example:**
     ```php
     $str = "Привет, мир!";
     echo convert_cyr_string($str, "k", "i"); // Outputs: Приwет, миp!
     ```
     **Output:** Приwет, миp!

8. **convert_uudecode**
   - `convert_uudecode(string $data): string|false`
   - Decode a uuencoded string. Returns the decoded string or false on failure.
   - **Example:**
     ```php
     $uuencodedData = "+22!L;W9E(%!(4\"$`\n`\n";
     echo convert_uudecode($uuencodedData); // Outputs: Hello, world!
     ```
     **Output:** Hello, world!

9. **convert_uuencode**
   - `convert_uuencode(string $data): string|false`
   - Uuencode a string. Returns the uuencoded data or false on failure.
   - **Example:**
     ```php
     $data = "Hello, world!";
     echo convert_uuencode($data); // Outputs: +22!L;W9E(%!(4\"$`\n`\n
     ```
     **Output:** +22!L;W9E(%!(4\"$`\n`\n

10. **count_chars**
    - `count_chars(string $str, int $mode = 0): array|string`
    - Return information about characters used in a string. Depending on mode, returns an array or a string representation.
    - **Example:**
      ```php
      $str = "Hello, world!";
      print_r(count_chars($str, 1)); // Outputs: Array ( [44] => 1 [32] => 1 [33] => 1 [72] => 1 [101] => 1 [100] => 1 [108] => 3 [111] => 2 [114] => 1 [119] => 1 )
      ```
      **Output:** Array ( [44] => 1 [32] => 1 [33] => 1 [72] => 1 [101] => 1 [100] => 1 [108] => 3 [111] => 2 [114] => 1 [119] => 1 )

11. **crc32**
    - `crc32(string $str): int`
    - Calculate the CRC32 polynomial of a string. Returns the CRC32 checksum as an integer.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo crc32($str); // Outputs: 222957957
      ```
      **Output:** 222957957

12. **crypt**
    - `crypt(string $str, string|null $salt = null): string|false`
    - One-way string hashing. Returns the hashed string or false on failure.
    - **Example:**
      ```php
      $str = "password";
      $hashedPassword = crypt($str);
      echo $hashedPassword;
      ```
      **Output:** $1$rasmusle$3/.K5Cgp12b4vzhhCpr1//

13. **echo**
    - `echo string [, ... ]`
    - Output one or more strings directly to the browser or command line.
    - **Example:**
      ```php
      echo "Hello, world!"; // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

14. **explode**
    - `explode(string $delimiter, string $str, int $limit = PHP_INT_MAX): array`
    - Split a string by a specified delimiter and return an array of substrings.
    - **Example:**
      ```php
      $str = "apple,banana,cherry,date";
      print_r(explode(",", $str)); // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )
      ```
      **Output:** Array ( [0] => apple [1] => banana [2] => cherry [3] => date )

15. **fprintf**
    - `fprintf(resource $handle, string $format [, mixed $args, ... ]): int`
    - Write a formatted string to a specified output stream (file pointer).
    - **Example:**
      ```php
      $file = fopen("output.txt", "w");
      fprintf($file, "Hello, %s!", "world");
      fclose($file);
      // content of output.txt: Hello, world!
      ```
      **Output:** Hello, world!

16. **get_html_translation_table**
    - `get_html_translation_table(int $table = HTML_SPECIALCHARS [, int $flags = ENT_COMPAT | ENT_HTML401 [, string|null $encoding = ini_get("default_charset") ]]): array`
    - Return the translation table used by htmlspecialchars() and htmlentities().
    - **Example:**
      ```php
      print_r(get_html_translation_table(HTML_ENTITIES)); // Outputs: Array ( [&] => &amp; ["] => &quot; [''] => &#039; [<] => &lt; [>] => &gt; )
      ```
      **Output:** Array ( [&] => &amp; ["] => &quot; [''] => &#039; [<] => &lt; [>] => &gt; )

17. **hebrev**
    - `hebrev(string $str, int $max_line_length = 0): string`
    - Convert logical Hebrew text to visual text. Returns the converted string.
    - **Example:**
      ```php
      $str = "שלום, עולם!";
      echo hebrev($str); // Outputs: םולע ,םולש!
      ```
      **Output:** םולע ,םולש!

18. **hebrevc**
    - `hebrevc(string $str, int $max_line_length = 0): string`
    - Convert logical Hebrew text to visual text with newline conversion. Returns the converted string.
    - **Example:**
      ```php
      $str = "שלום,\nעולם!";
      echo hebrevc($str); // Outputs: םולע,\nםולש!
      ```
      **Output:** םולע,\nםולש!

19. **hex2bin**
    - `hex2bin(string $data): string|false`
    - Decode a hexadecimally encoded binary string. Returns the binary data or false on failure.
    - **Example:**
      ```php
      $hexData = "48656c6c6f2c20776f726c6421";
      echo hex2bin($hexData); // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

20. **html_entity_decode**
    - `html_entity_decode(string $str, int $flags = ENT_COMPAT | ENT_HTML401 [, string|null $encoding = ini_get("default_charset") ]): string`
    - Convert HTML entities to their corresponding characters. Returns the decoded string.
    - **Example:**
      ```php
      $str = "This &quot;word&quot; is in quotes";
      echo html_entity_decode($str); // Outputs: This "word" is in quotes
      ```
      **Output:** This "word" is in quotes

21. **htmlentities**
    - `htmlentities(string $str, int $flags = ENT_COMPAT | ENT_HTML401 [, string|null $encoding = ini_get("default_charset") [, bool $double_encode = true ]]): string`
    - Convert all applicable characters to HTML entities. Returns the encoded string.
    - **Example:**
      ```php
      $str = "This \"word\" is in quotes";
      echo htmlentities($str); // Outputs: This &quot;word&quot; is in quotes
      ```
      **Output:** This &quot;word&quot; is in quotes

22. **htmlspecialchars**
    - `htmlspecialchars(string $str, int $flags = ENT_COMPAT | ENT_HTML401 [, string|null $encoding = ini_get("default_charset") [, bool $double_encode = true ]]): string`
    - Convert special characters to HTML entities. Returns the encoded string.
    - **Example:**
      ```php
      $str = "This \"word\" is in quotes";
      echo htmlspecialchars($str); // Outputs: This &quot;word&quot; is in quotes
      ```
      **Output:** This &quot;word&quot; is in quotes

23. **htmlspecialchars_decode**
    - `htmlspecialchars_decode(string $str, int $flags = ENT_COMPAT | ENT_HTML401 ): string`
    - Convert HTML entities to their corresponding characters. Returns the decoded string.
    - **Example:**
      ```php
      $str = "This &quot;word&quot; is in quotes";
      echo htmlspecialchars_decode($str); // Outputs: This "word" is in quotes
      ```
      **Output:** This "word" is in quotes

24. **implode**
    - `implode(string $glue, array $pieces): string`
    - Join array elements with a string delimiter. Returns a single string.
    - **Example:**
      ```php
      $arr = array("Hello", "world", "!");
      echo implode(" ", $arr); // Outputs: Hello world !
      ```
      **Output:** Hello world !

25. **join**
    - Alias of implode(). Join array elements with a string delimiter. Returns a single string.
    - **Example:**
      ```php
      $arr = array("Hello", "world", "!");
      echo join(" ", $arr); // Outputs: Hello world !
      ```
      **Output:** Hello world !

26. **lcfirst**
    - `lcfirst(string $str): string`
    - Make a string's first character lowercase. Returns the modified string.
    - **Example:**
      ```php
      $str = "Hello, World!";
      echo lcfirst($str); // Outputs: hello, World!
      ```
      **Output:** hello, World!

27. **levenshtein**
    - `levenshtein(string $str1, string $str2, int $cost_ins = 1, int $cost_rep = 1, int $cost_del = 1): int`
    - Calculate Levenshtein distance between two strings. Returns the distance as an integer.
    - **Example:**
      ```php
      $str1 = "kitten";
      $str2 = "sitting";
      echo levenshtein($str1, $str2); // Outputs: 3
      ```
      **Output:** 3

28. **localeconv**
    - `localeconv(): array`
    - Get numeric formatting information based on current locale. Returns an associative array.
    - **Example:**
      ```php
      print_r(localeconv());
      // Outputs (example):
      // Array (
      //   [decimal_point] => .
      //   [thousands_sep] => ,
      //   [int_curr_symbol] => USD
      //   [currency_symbol] => $
      //   [mon_decimal_point] => .
      //   ...
      // )
      ```
      **Output:** Array ( ... )

29. **ltrim**
    - `ltrim(string $str, string $charlist = " \t\n\r\0\x0B"): string`
    - Remove whitespace or other specified characters from the left side of a string. Returns the modified string.
    - **Example:**
      ```php
      $str = "   Hello, world!   ";
      echo ltrim($str); // Outputs: Hello, world!   
      ```
      **Output:** Hello, world!

30. **md5**
    - `md5(string $str, bool $raw_output = false): string`
    - Calculate the MD5 hash of a string. Returns the hash as a 32-character hexadecimal number.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo md5($str); // Outputs: b10a8db164e0754105b7a99be72e3fe5
      ```
      **Output:** b10a8db164e0754105b7a99be72e3fe5

31. **md5_file**
    - `md5_file(string $filename, bool $raw_output = false): string|false`
    - Calculate the MD5 hash of a file. Returns the hash as a 32-character hexadecimal number or false on failure.
    - **Example:**
      ```php
      $filename = "example.txt";
      echo md5_file($filename); // Outputs: 8d777f385d3dfec8815d20f7496026dc
      ```
      **Output:** 8d777f385d3dfec8815d20f7496026dc

32. **metaphone**
    - `metaphone(string $str, int $phonemes = 0): string`
    - Calculate the metaphone key of a string. Returns the metaphone key as a string.
    - **Example:**
      ```php
      $str = "programming";
      echo metaphone($str); // Outputs: PRKRMNK
      ```
      **Output:** PRKRMNK

33. **money_format**
    - `money_format(string $format, float $number): string`
    - Format a number as a currency string. Returns the formatted string.
    - **Example:**
      ```php
      setlocale(LC_MONETARY, 'en_US');
      $number = 12345.67;
      echo money_format('%i', $number); // Outputs: USD 12,345.67
      ```
      **Output:** USD 12,345.67

34. **nl_langinfo**
    - `nl_langinfo(int $item): string`
    - Query language and locale information. Returns the information as a string.
    - **Example:**
      ```php
      echo nl_langinfo(ABDAY_1); // Outputs: Sunday
      ```
      **Output:** Sunday

35. **nl2br**
    - `nl2br(string $str, bool $is_xhtml = true): string`
    - Insert HTML line breaks before all newlines in a string. Returns the modified string.
    - **Example:**
      ```php
      $str = "Hello,\nworld!";
      echo nl2br($str); // Outputs: Hello,<br />world!
      ```
      **Output:** Hello,<br />world!

36. **number_format**
    - `number_format(float $number, int $decimals = 0, string $decimal_point = ".", string $thousands_sep = ","): string`
    - Format a number with grouped thousands. Returns the formatted number as a string.
    - **Example:**
      ```php
      $number = 1234567.89;
      echo number_format($number); // Outputs: 1,234,567.89
      ```
      **Output:** 1,234,567.89

37. **ord**
    - `ord(string $character): int`
    - Return the ASCII value of the first character of a string. Returns an integer.
    - **Example:**
      ```php
      $char = "A";
      echo ord($char); // Outputs: 65
      ```
      **Output:** 65

38. **parse_str**
    - `parse_str(string $str [, array &$arr ]): void`
    - Parse a query string into variables. Optionally store parsed variables in an array.
    - **Example:**
      ```php
      $str = "first=Hello&second=World";
      parse_str($str, $output);
      print_r($output); // Outputs: Array ( [first] => Hello [second] => World )
      ```
      **Output:** Array ( [first] => Hello [second] => World )

39. **print**
    - `print string`
    - Output a string. Returns 1.
    - **Example:**
      ```php
      print "Hello, world!"; // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

40. **printf**
    - `printf(string $format [, mixed $args, ... ]): int`
    - Output a formatted string. Returns the length of the output string.
    - **Example:**
      ```php
      $num = 10;
      printf("The number is %d", $num); // Outputs: The number is 10
      ```
      **Output:** The number is 10

41. **quoted_printable_decode**
    - `quoted_printable_decode(string $str): string`
    - Convert a quoted-printable string to an 8-bit string. Returns the decoded string.
    - **Example:**
      ```php
      $str = "Hello=0Aworld!";
      echo quoted_printable_decode($str); // Outputs: Hello\nworld!
      ```
      **Output:** Hello\nworld!

42. **quoted_printable_encode**
    - `quoted_printable_encode(string $str): string`
    - Convert a 8-bit string to a quoted-printable string. Returns the encoded string.
    - **Example:**
      ```php
      $str = "Hello\nworld!";
      echo quoted_printable_encode($str); // Outputs: Hello=0Aworld!
      ```
      **Output:** Hello=0Aworld!

43. **quotemeta**
    - `quotemeta(string $str): string`
    - Quote meta characters in a string. Returns the quoted string.
    - **Example:**
      ```php
      $str = "Hello . * (world)";
      echo quotemeta($str); // Outputs: Hello \. \* \(world\)
      ```
      **Output:** Hello \. \* \(world\)

44. **rtrim**
    - `rtrim(string $str, string $charlist = " \t\n\r\0\x0B"): string`
    - Remove whitespace or other specified characters from the right side of a string. Returns the modified string.
    - **Example:**
      ```php
      $str = "   Hello, world!   ";
      echo rtrim($str); // Outputs:    Hello, world!
      ```
      **Output:** Hello, world!

45. **setlocale**
    - `setlocale(int $category, string $locale [, string $... ]): string|false`
    - Set locale information. Returns the new current locale or false on failure.
    - **Example:**
      ```php
      echo setlocale(LC_ALL, 'en_US.utf8'); // Outputs: en_US.utf8
      ```
      **Output:** en_US.utf8

46. **sha1**
    - `sha1(string $str, bool $raw_output = false): string`
    - Calculate the SHA-1 hash of a string. Returns the hash as a 40-character hexadecimal number.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo sha1($str); // Outputs: 943a702d06f34599aee1f8da8ef9f7296031d699
      ```
      **Output:** 943a702d06f34599aee1f8da8ef9f7296031d699

47. **sha1_file**
    - `sha1_file(string $filename, bool $raw_output = false): string|false`
    - Calculate the SHA-1 hash of a file. Returns the hash as a 40-character hexadecimal number or false on failure.
    - **Example:**
      ```php
      $filename = "example.txt";
      echo sha1_file($filename); // Outputs: 2f05477fc24bb4faefd86517156dafdecec45b8
      ```
      **Output:** 2f05477fc24bb4faefd86517156dafdecec45b8

48. **similar_text**
    - `similar_text(string $str1, string $str2 [, float &$percent ]): int`
    - Calculate the similarity between two strings. Returns the number of matching characters in both strings.
    - **Example:**
      ```php
      $str1 = "Hello, world!";
      $str2 = "Hello, World!";
      echo similar_text($str1, $str2); // Outputs: 12
      ```
      **Output:** 12

49. **soundex**
    - `soundex(string $str): string`
    - Calculate the soundex key of a string. Returns the soundex key as a string.
    - **Example:**
      ```php
      $str = "programming";
      echo soundex($str); // Outputs: P625
      ```
      **Output:** P625

50. **sprintf**
    - `sprintf(string $format [, mixed $args, ... ]): string`
    - Return a formatted string. Returns the formatted string.
    - **Example:**
      ```php
      $num = 10;
      echo sprintf("The number is %d", $num); // Outputs: The number is 10
      ```
      **Output:** The number is 10

51. **sscanf**
    - `sscanf(string $str, string $format [, mixed &$... ]): array|int`
    - Parse input from a string according to a specified format. Returns an array of parsed values or the number of input parameters matched.
    - **Example:**
      ```php
      $str = "User: John, Age: 30";
      $format = "User: %s, Age: %d";
      sscanf($str, $format, $name, $age);
      echo $name; // Outputs: John
      echo $age; // Outputs: 30
      ```
      **Output:** John30

52. **str_getcsv**
    - `str_getcsv(string $input [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\\" ]]]): array|false`
    - Parse a CSV string into an array. Returns an indexed array containing the CSV fields or false on failure.
    - **Example:**
      ```php
      $csv = "John,Doe,40";
      print_r(str_getcsv($csv)); // Outputs: Array ( [0] => John [1] => Doe [2] => 40 )
      ```
      **Output:** Array ( [0] => John [1] => Doe [2] => 40 )

53. **str_ireplace**
    - `str_ireplace(mixed $search, mixed $replace, mixed $subject [, int &$count ]): mixed`
    - Replace occurrences of a string (case-insensitive) inside another string. Returns the modified string or an array if multiple replacements are performed.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo str_ireplace("WORLD", "PHP", $str); // Outputs: Hello, PHP!
      ```
      **Output:** Hello, PHP!

54. **str_pad**
    - `str_pad(string $input, int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]]): string`
    - Pad a string to a certain length with another string. Returns the padded string.
    - **Example:**
      ```php
      $str = "Hello";
      echo str_pad($str, 10, "."); // Outputs: Hello.....
      ```
      **Output:** Hello.....

55. **str_repeat**
    - `str_repeat(string $input, int $multiplier): string`
    - Repeat a string a specified number of times. Returns the repeated string.
    - **Example:**
      ```php
      $str = "Hello";
      echo str_repeat($str, 3); // Outputs: HelloHelloHello
      ```
      **Output:** HelloHelloHello

56. **str_replace**
    - `str_replace(mixed $search, mixed $replace, mixed $subject [, int &$count ]): mixed`
    - Replace occurrences of a string inside another string. Returns the modified string or an array if multiple replacements are performed.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo str_replace("world", "PHP", $str); // Outputs: Hello, PHP!
      ```
      **Output:** Hello, PHP!

57. **str_rot13**
    - `str_rot13(string $str): string`
    - Perform the ROT13 transformation on a string. Returns the transformed string.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo str_rot13($str); // Outputs: Uryyb, jbeyq!
      ```
      **Output:** Uryyb, jbeyq!

58. **str_shuffle**
    - `str_shuffle(string $str): string`
    - Randomly shuffle all characters of a string. Returns the shuffled string.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo str_shuffle($str); // Outputs (example): oHlr lwe,odH!
      ```
      **Output:** oHlr lwe,odH!

59. **str_split**
    - `str_split(string $str [, int $split_length = 1 ]): array`
    - Split a string into an array. Returns an array of strings.
    - **Example:**
      ```php
      $str = "Hello, world!";
      print_r(str_split($str)); // Outputs: Array ( [0] => H [1] => e [2] => l [3] => l [4] => o [5] => , [6] =>   [7] => w [8] => o [9] => r [10] => l [11] => d [12] => ! )
      ```
      **Output:** Array ( [0] => H [1] => e [2] => l [3] => l [4] => o [5] => , [6] =>   [7] => w [8] => o [9] => r [10] => l [11] => d [12] => ! )

60. **str_word_count**
    - `str_word_count(string $str [, int $format = 0 [, string|null $charlist = null ]]): mixed`
    - Count the number of words in a string. Returns the count as an integer or an array of words depending on the format.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo str_word_count($str); // Outputs: 2
      ```
      **Output:** 2

61. **strcasecmp**
    - `strcasecmp(string $str1, string $str2): int`
    - Perform a case-insensitive string comparison. Returns 0 if strings are equal, a negative number if str1 is less than str2, or a positive number if str1 is greater than str2.
    - **Example:**
      ```php
      $str1 = "hello";
      $str2 = "Hello";
      echo strcasecmp($str1, $str2); // Outputs: 0
      ```
      **Output:** 0

62. **strchr**
    - `strchr(string $haystack, string $needle [, bool $before_needle = false ]): string|false`
    - Find the first occurrence of a string and return the rest of it (or a part before it). Returns the portion of string or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strchr($str, "world"); // Outputs: world!
      ```
      **Output:** world!

63. **strcmp**
    - `strcmp(string $str1, string $str2): int`
    - Perform a binary safe string comparison. Returns 0 if strings are equal, a negative number if str1 is less than str2, or a positive number if str1 is greater than str2.
    - **Example:**
      ```php
      $str1 = "hello";
      $str2 = "Hello";
      echo strcmp($str1, $str2); // Outputs: 1
      ```
      **Output:** 1

64. **strcoll**
    - `strcoll(string $str1, string $str2): int`
    - Locale based string comparison using a comparison standard called collation. Returns 0 if strings are equal, a negative number if str1 is less than str2, or a positive number if str1 is greater than str2.
    - **Example:**
      ```php
      $str1 = "hello";
      $str2 = "Hello";
      echo strcoll($str1, $str2); // Outputs: 1
      ```
      **Output:** 1

65. **strcspn**
    - `strcspn(string $str, string $charlist [, int $start = 0 [, int|null $length ]]): int`
    - Find the length of the initial segment of a string consisting entirely of characters not in a given mask. Returns the number of characters in the segment.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strcspn($str, ","); // Outputs: 5
      ```
      **Output:** 5

66. **strip_tags**
    - `strip_tags(string $str [, string|null $allowable_tags ]): string`
    - Strip HTML and PHP tags from a string. Returns the stripped string.
    - **Example:**
      ```php
      $str = "<p>Hello, world!</p>";
      echo strip_tags($str); // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

67. **stripcslashes**
    - `stripcslashes(string $str): string`
    - Unquote string quoted with addcslashes(). Returns the unquoted string.
    - **Example:**
      ```php
      $str = 'Hello, world!\n';
      echo stripcslashes($str); // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

68. **stripos**
    - `stripos(string $haystack, string $needle [, int $offset = 0 ]): int|false`
    - Find the position of the first occurrence of a case-insensitive substring in a string. Returns the position as an integer or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo stripos($str, "world"); // Outputs: 7
      ```
      **Output:** 7

69. **stripslashes**
    - `stripslashes(string $str): string`
    - Unquote a string quoted with addslashes(). Returns the unquoted string.
    - **Example:**
      ```php
      $str = 'Hello, world!\'';
      echo stripslashes($str); // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

70. **stristr**
    - `stristr(string $haystack, string $needle [, bool $before_needle = false ]): string|false`
    - Case-insensitive strstr(). Returns the portion of string or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo stristr($str, "world"); // Outputs: world!
      ```
      **Output:** world!

71. **strlen**
    - `strlen(string $str): int`
    - Return the length of a string. Returns the string length as an integer.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strlen($str); // Outputs: 13
      ```
      **Output:** 13

72. **strnatcasecmp**
    - `strnatcasecmp(string $str1, string $str2): int`
    - Perform a case-insensitive "natural order" string comparison. Returns 0 if strings are equal, a negative number if str1 is less than str2, or a positive number if str1 is greater than str2.
    - **Example:**
      ```php
      $str1 = "hello2";
      $str2 = "Hello10";
      echo strnatcasecmp($str1, $str2); // Outputs: 0
      ```
      **Output:** 0

73. **strnatcmp**
    - `strnatcmp(string $str1, string $str2): int`
    - Perform a "natural order" string comparison. Returns 0 if strings are equal, a negative number if str1 is less than str2, or a positive number if str1 is greater than str2.
    - **Example:**
      ```php
      $str1 = "hello2";
      $str2 = "Hello10";
      echo strnatcmp($str1, $str2); // Outputs: -1
      ```
      **Output:** -1

74. **strncasecmp**
    - `strncasecmp(string $str1, string $str2, int $len): int`
    - Perform a case-insensitive string comparison for the first $len characters. Returns 0 if strings are equal, a negative number if str1 is less than str2, or a positive number if str1 is greater than str2.
    - **Example:**
      ```php
      $str1 = "hello, world!";
      $str2 = "Hello, PHP!";
      echo strncasecmp($str1, $str2, 6); // Outputs: 0
      ```
      **Output:** 0

75. **strncmp**
    - `strncmp(string $str1, string $str2, int $len): int`
    - Perform a binary safe string comparison for the first $len characters. Returns 0 if strings are equal, a negative number if str1 is less than str2, or a positive number if str1 is greater than str2.
    - **Example:**
      ```php
      $str1 = "hello, world!";
      $str2 = "Hello, PHP!";
      echo strncmp($str1, $str2, 6); // Outputs: 1
      ```
      **Output:** 1

76. **strpbrk**
    - `strpbrk(string $haystack, string $char_list): string|false`
    - Find the first occurrence of any character in the char_list in a string. Returns the portion of string or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strpbrk($str, "aeiou"); // Outputs: ello, world!
      ```
      **Output:** ello, world!

77. **strpos**
    - `strpos(string $haystack, string $needle [, int $offset = 0 ]): int|false`
    - Find the position of the first occurrence of a substring in a string. Returns the position as an integer or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strpos($str, "world"); // Outputs: 7
      ```
      **Output:** 7

78. **strrchr**
    - `strrchr(string $haystack, string $needle): string|false`
    - Find the last occurrence of a character in a string and return the rest of it (or a part before it). Returns the portion of string or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strrchr($str, "world"); // Outputs: world!
      ```
      **Output:** world!

79. **strrev**
    - `strrev(string $str): string`
    - Reverse a string. Returns the reversed string.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strrev($str); // Outputs: !dlrow ,olleH
      ```
      **Output:** !dlrow ,olleH

80. **strripos**
    - `strripos(string $haystack, string $needle [, int $offset = 0 ]): int|false`
    - Find the position of the last occurrence of a case-insensitive substring in a string. Returns the position as an integer or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strripos($str, "world"); // Outputs: 7
      ```
      **Output:** 7

81. **strrpos**
    - `strrpos(string $haystack, string $needle [, int $offset = 0 ]): int|false`
    - Find the position of the last occurrence of a substring in a string. Returns the position as an integer or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strrpos($str, "world"); // Outputs: 7
      ```
      **Output:** 7

82. **strspn**
    - `strspn(string $str, string $charlist [, int $start = 0 [, int|null $length ]]): int`
    - Find the length of the initial segment of a string consisting entirely of characters in a given mask. Returns the number of characters in the segment.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strspn($str, "l"); // Outputs: 2
      ```
      **Output:** 2

83. **strstr**
    - `strstr(string $haystack, string $needle [, bool $before_needle = false ]): string|false`
    - Find the first occurrence of a substring and return the rest of it (or a part before it). Returns the portion of string or false if not found.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strstr($str, "world"); // Outputs: world!
      ```
      **Output:** world!

84. **strtok**
    - `strtok(string $str, string $token): string|false`
    - Tokenize string. Returns the token or false if no more tokens are available.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strtok($str, " "); // Outputs: Hello,
      ```
      **Output:** Hello,

85. **strtolower**
    - `strtolower(string $str): string`
    - Make a string lowercase. Returns the lowercased string.
    - **Example:**
      ```php
      $str = "Hello, WORLD!";
      echo strtolower($str); // Outputs: hello, world!
      ```
      **Output:** hello, world!

86. **strtoupper**
    - `strtoupper(string $str): string`
    - Make a string uppercase. Returns the uppercased string.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strtoupper($str); // Outputs: HELLO, WORLD!
      ```
      **Output:** HELLO, WORLD!

87. **strtr**
    - `strtr(string $str, string $from, string $to): string`
    - Translate characters or replace substrings in a string. Returns the modified string.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo strtr($str, "el", "xx"); // Outputs: Hxxlo, world!
      ```
      **Output:** Hxxlo, world!

88. **substr_compare**
    - `substr_compare(string $str1, string $str2, int $start [, int|null $length [, bool $case_insensitive = false ]]): int`
    - Binary safe comparison of two strings from an offset, optionally up to the given length. Returns 0 if they are equal, a negative number if str1 is less than str2, or a positive number if str1 is greater than str2.
    - **Example:**
      ```php
      $str1 = "Hello, world!";
      $str2 = "world!";
      echo substr_compare($str1, $str2, 7); // Outputs: 0
      ```
      **Output:** 0

89. **substr_count**
    - `substr_count(string $haystack, string $needle [, int $offset = 0 [, int|null $length ]]): int`
    - Count the number of substring occurrences in a string. Returns the count as an integer.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo substr_count($str, "l"); // Outputs: 3
      ```
      **Output:** 3

90. **substr_replace**
    - `substr_replace(string $str, string $replace, int $start [, int|null $length ]): string`
    - Replace a substring inside a string. Returns the modified string.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo substr_replace($str, "PHP", 7); // Outputs: Hello, PHP!
      ```
      **Output:** Hello, PHP!

91. **substr**
    - `substr(string $str, int $start [, int|null $length ]): string`
    - Return part of a string. Returns the extracted part as a string.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo substr($str, 7); // Outputs: world!
      ```
      **Output:** world!

92. **trim**
    - `trim(string $str, string $charlist = " \t\n\r\0\x0B"): string`
    - Remove whitespace or other specified characters from both sides of a string. Returns the modified string.
    - **Example:**
      ```php
      $str = "   Hello, world!   ";
      echo trim($str); // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

93. **ucfirst**
    - `ucfirst(string $str): string`
    - Make the first character of a string uppercase. Returns the modified string.
    - **Example:**
      ```php
      $str = "hello, world!";
      echo ucfirst($str); // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

94. **ucwords**
    - `ucwords(string $str [, string $delimiters = " \t\r\n\f\v" ]): string`
    - Uppercase the first character of each word in a string. Returns the modified string.
    - **Example:**
      ```php
      $str = "hello, world!";
      echo ucwords($str); // Outputs: Hello, World!
      ```
      **Output:** Hello, World!

95. **vfprintf**
    - `vfprintf(resource $stream, string $format, array $args): int`
    - Write a formatted string to a stream. Returns the length of the output string.
    - **Example:**
      ```php
      $fp = fopen('example.txt', 'w');
      $num = 10;
      vfprintf($fp, "The number is %d", [$num]);
      fclose($fp);
      ```
      **Output:** The number is 10

96. **vprintf**
    - `vprintf(string $format, array $args): int`
    - Output a formatted string. Uses the arguments in an array. Returns the length of the output string.
    - **Example:**
      ```php
      $num = 10;
      vprintf("The number is %d", [$num]); // Outputs: The number is 10
      ```
      **Output:** The number is 10

97. **vsprintf**
    - `vsprintf(string $format, array $args): string`
    - Return a formatted string. Uses the arguments in an array. Returns the formatted string.
    - **Example:**
      ```php
      $num = 10;
      echo vsprintf("The number is %d", [$num]); // Outputs: The number is 10
      ```
      **Output:** The number is 10

98. **wordwrap**
    - `wordwrap(string $str [, int $width = 75 [, string $break = "\n" [, bool $cut = false ]]]): string`
    - Wrap a string to a specified number of characters. Returns the wrapped string.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo wordwrap($str, 6); // Outputs: Hello,
                              // world!
      ```
      **Output:** Hello,
                  world!

99. **convert_uudecode**
    - `convert_uudecode(string $str): string|false`
    - Decode a uuencoded string. Returns the decoded string or false on failure.
    - **Example:**
      ```php
      $str = "0=&5S=`IT8VAT('1E<W1A=&EO;B]P96XN#0H`\n";
      echo convert_uudecode($str); // Outputs: Hello, world!
      ```
      **Output:** Hello, world!

100. **convert_uuencode**
    - `convert_uuencode(string $str): string|false`
    - Uuencode a string. Returns the uuencoded string or false on failure.
    - **Example:**
      ```php
      $str = "Hello, world!";
      echo convert_uuencode($str); // Outputs: 0=&5S=`IT8VAT('1E<W1A=&EO;B]P96XN#0H`
      ```
      **Output:** 0=&5S=`IT8VAT('1E<W1A=&EO;B]P96XN#0H`

## Resources
- **Here Is the explanation of string function check the like below:**
[string function](https://docs.google.com/document/d/1vz1bmvAQD8ixrIwnBUb5Zw8N65mefKy771vJYxSol4k/edit?usp=sharing)