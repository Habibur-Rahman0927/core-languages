# PHP String Functions Examples

Welcome to the repository showcasing examples of various PHP string functions along with explanations and outputs.

## Functions Covered

1. **addcslashes**
   - Quote string with slashes in a C style. Useful for preparing a string for use in a query.

2. **addslashes**
   - Quote string with slashes. Useful for preparing a string for use in a query.

3. **bin2hex**
   - Convert binary data into hexadecimal representation. Useful for displaying binary data or generating unique identifiers.

4. **chop**
   - Alias of rtrim(). Removes whitespace or other specified characters from the end of a string.

5. **chr**
   - Return a specific character based on its ASCII value. Useful for generating characters from ASCII codes.

6. **chunk_split**
   - Split a string into smaller chunks. Useful for formatting data into a more readable or manageable form.

7. **convert_cyr_string**
   - Convert a string from one Cyrillic character set to another. Useful for handling Cyrillic text in different encodings.

8. **convert_uudecode**
   - Decode a uuencoded string. Useful for decoding uuencoded data.

9. **convert_uuencode**
   - Uuencode a string. Useful for encoding data for transmission in emails or other text-based protocols.

10. **count_chars**
    - Return information about characters used in a string. Useful for analyzing the character composition of a string.

11. **crc32**
    - Calculate the CRC32 polynomial of a string. Useful for generating checksums or verifying data integrity.

12. **crypt**
    - One-way string hashing. Useful for securely storing passwords or generating hash values.

13. **echo**
    - Output one or more strings. Useful for displaying content directly to the browser or command line.

14. **explode**
    - Split a string by a specified delimiter and return an array of substrings. Useful for breaking down structured data.

15. **fprintf**
    - Write a formatted string to a specified output stream. Useful for formatted output to files or other streams.

16. **get_html_translation_table**
    - Return the translation table used by htmlspecialchars() and htmlentities(). Useful for customizing HTML entity translation.

17. **hebrev**
    - Convert logical Hebrew text to visual text. Useful for displaying Hebrew text in web pages.

18. **hebrevc**
    - Convert logical Hebrew text to visual text with newline conversion. Useful for displaying Hebrew text in web pages with newline handling.

19. **hex2bin**
    - Decodes a hexadecimally encoded binary string. Useful for converting hexadecimal representations back into binary data.

20. **html_entity_decode**
    - Convert HTML entities to their corresponding characters. Useful for decoding HTML-encoded text.

21. **htmlentities**
    - Convert characters to HTML entities. Useful for encoding text for safe display in web pages.

22. **htmlspecialchars_decode**
    - Convert special HTML entities back to characters. Useful for decoding HTML special characters.

23. **htmlspecialchars**
    - Convert special characters to HTML entities. Useful for encoding text to prevent XSS attacks or display special characters.

24. **implode**
    - Join array elements with a string. Useful for creating a string from an array.

25. **join**
    - Alias of implode(). Join array elements with a string. Useful for creating a string from an array.

26. **lcfirst**
    - Make a string's first character lowercase. Useful for standardizing the case of the first letter in a string.

27. **levenshtein**
    - Calculate the Levenshtein distance between two strings. Useful for measuring the difference between strings.

28. **localeconv**
    - Get numeric formatting information. Useful for retrieving locale-specific numeric formatting.

29. **ltrim**
    - Strip whitespace or other characters from the beginning of a string. Useful for sanitizing input or trimming excess whitespace.

30. **md5_file**
    - Calculate the MD5 hash of a file. Useful for verifying file integrity or generating checksums.

31. **md5**
    - Calculate the MD5 hash of a string. Useful for hashing passwords or generating checksums.

32. **metaphone**
    - Calculate the metaphone key of a string. Useful for phonetic string comparison.

33. **money_format**
    - Format a number as a currency string. Useful for formatting monetary values according to locale-specific rules.

34. **nl_langinfo**
    - Query language and locale information. Useful for retrieving locale-specific information.

35. **nl2br**
    - Insert HTML line breaks before all newlines in a string. Useful for displaying formatted text in HTML.

36. **number_format**
    - Format a number with grouped thousands and decimal points. Useful for displaying numbers in a readable format.

37. **ord**
    - Return the ASCII value of the first character of a string. Useful for retrieving ASCII values.

38. **parse_str**
    - Parse a query string into variables. Useful for handling query strings from URLs.

39. **print**
    - Output a string. Useful for displaying content directly to the browser or command line.

40. **printf**
    - Output a formatted string. Useful for displaying formatted text to the browser or command line.

41. **quoted_printable_decode**
    - Convert a quoted-printable string to an 8-bit string. Useful for decoding quoted-printable data.

42. **quoted_printable_encode**
    - Convert a 8-bit string to a quoted-printable string. Useful for encoding data for transmission in emails.

43. **quotemeta**
    - Quote meta characters. Useful for escaping meta characters in regular expressions.

44. **rtrim**
    - Strip whitespace or other characters from the end of a string. Useful for sanitizing input or trimming excess whitespace.

45. **setlocale**
    - Set locale information. Useful for setting locale-specific information.

46. **sha1_file**
    - Calculate the SHA-1 hash of a file. Useful for verifying file integrity or generating checksums.

47. **sha1**
    - Calculate the SHA-1 hash of a string. Useful for hashing passwords or generating checksums.

48. **similar_text**
    - Calculate the similarity between two strings. Useful for comparing string similarity.

49. **soundex**
    - Calculate the soundex key of a string. Useful for phonetic string comparison.

50. **sprintf**
    - Return a formatted string. Useful for creating formatted strings dynamically.

51. **sscanf**
    - Parse input from a string according to a format. Useful for parsing structured data from strings.

52. **str_getcsv**
    - Parse a CSV string into an array. Useful for handling CSV data.

53. **str_ireplace**
    - Case-insensitive search and replace in a string. Useful for replacing text while ignoring case.

54. **str_pad**
    - Pad a string to a certain length with another string. Useful for formatting strings to a fixed length.

55. **str_repeat**
    - Repeat a string a specified number of times. Useful for generating repeated content dynamically.

56. **str_replace**
    - Replace all occurrences of a search string with a replacement string. Useful for text manipulation.

57. **str_rot13**
    - Perform the ROT13 transformation on a string. Useful for encoding text using the ROT13 cipher.

58. **str_shuffle**
    - Randomly shuffle the characters of a string. Useful for generating randomized data.

59. **str_split**
    - Split a string into an array. Useful for breaking down a string into smaller parts.

60. **str_word_count**
    - Count the number of words in a string. Useful for analyzing text content.

61. **strcasecmp**
    - Binary safe case-insensitive string comparison. Useful for comparing strings without regard to case.

62. **strchr**
    - Alias of strstr(). Find the first occurrence of a string. Useful for searching within strings.

63. **strcmp**
    - Binary safe string comparison. Useful for comparing strings.

64. **strcoll**
    - Locale based string comparison. Useful for comparing strings according to locale-specific rules.

65. **strcspn**
    - Find the length of the initial segment not matching a mask. Useful for text validation.

66. **strip_tags**
    - Strip HTML and PHP tags from a string. Useful for sanitizing user input or extracting text content from HTML.

67. **stripcslashes**
    - Un-quote string quoted with addcslashes(). Useful for reversing the effects of addcslashes.

68. **stripos**
    - Find the position of the first occurrence of a case-insensitive substring in a string. Useful for searching within strings.

69. **stripslashes**
    - Un-quote string quoted with addslashes(). Useful for reversing the effects of addslashes.

70. **stristr**
    - Case-insensitive search for a substring. Useful for searching within strings.

71. **strlen**
    - Get the length of a string. Useful for determining the number of characters in a string.

72. **strnatcasecmp**
    - Case insensitive string comparison using a "natural order" algorithm. Useful for natural sorting of strings.

73. **strnatcmp**
    - String comparison using a "natural order" algorithm. Useful for natural sorting of strings.

74. **strncasecmp**
    - Binary safe case-insensitive string comparison of the first n characters. Useful for comparing portions of strings.

75. **strncmp**
    - Binary safe string comparison of the first n characters. Useful for comparing portions of strings.

76. **strpbrk**
    - Search a string for any of a set of characters. Useful for text validation.

77. **strpos**
    - Find the position of the first occurrence of a substring in a string. Useful for searching within strings.

78. **strrchr**
    - Find the last occurrence of a character in a string. Useful for searching within strings.

79. **strrev**
    - Reverse a string. Useful for manipulating string order.

80. **strripos**
    - Find the position of the last occurrence of a case-insensitive substring in a string. Useful for searching within strings.

81. **strrpos**
    - Find the position of the last occurrence of a substring in a string. Useful for searching within strings.

82. **strspn**
    - Find the length of the initial segment matching a mask. Useful for text validation.

83. **strstr**
    - Find the first occurrence of a substring. Useful for searching within strings.

84. **strtok**
    - Tokenize string. Useful for breaking strings into tokens based on delimiters.

85. **strtolower**
    - Make a string lowercase. Useful for standardizing string case.

86. **strtoupper**
    - Make a string uppercase. Useful for standardizing string case.

87. **strtr**
    - Translate characters or replace substrings in a string. Useful for string manipulation.

88. **substr_compare**
    - Binary safe comparison of two strings from an offset up to a given length. Useful for comparing portions of strings.

89. **substr_count**
    - Count the number of substring occurrences. Useful for counting specific parts of strings.

90. **substr_replace**
    - Replace a substring within a string. Useful for modifying specific parts of strings.

91. **substr**
    - Return part of a string. Useful for extracting portions of strings.

92. **trim**
    - Strip whitespace (or other characters) from the beginning and end of a string. Useful for sanitizing input or trimming excess whitespace.

93. **ucfirst**
    - Make a string's first character uppercase. Useful for standardizing the case of the first letter in a string.

94. **ucwords**
    - Uppercase the first character of each word in a string. Useful for capitalizing words in a string.

95. **vfprintf**
    - Write a formatted string to a specified output stream. Useful for formatted output to files or other streams.

96. **vprintf**
    - Output a formatted string. Useful for displaying formatted text to the browser or command line.

97. **vsprintf**
    - Return a formatted string. Useful for creating formatted strings dynamically.

98. **wordwrap**
    - Wraps a string to a specified number of characters. Useful for formatting text to fit within a certain width.

## Resources
- **Here Is the description of string function check the like below:**
https://docs.google.com/document/d/1vz1bmvAQD8ixrIwnBUb5Zw8N65mefKy771vJYxSol4k/edit?usp=sharing