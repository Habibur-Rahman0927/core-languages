# Python String Methods Examples

Welcome to the repository showcasing examples of various Python string Methods with explanations and outputs.

## Methods Covered

1. **`capitalize()`**
   - Converts the first character of the string to uppercase and the rest to lowercase.
   - **Example:**
     ```python
     text = "hello World"
     print(text.capitalize())  # Output: "Hello world"
     ```

2. **`casefold()`**
   - Returns a casefolded copy of the string, suitable for case-insensitive comparisons.
   - **Example:**
     ```python
     text = "Groß"
     print(text.casefold())  # Output: "gross"
     ```

3. **`center(width, fillchar=' ')`**
   - Returns a centered string of specified width padded with fillchar (default is space).
   - **Example:**
     ```python
     text = "hello"
     print(text.center(10, '*'))  # Output: "**hello***"
     ```

4. **`count(substring, start=..., end=...)`**
   - Returns the number of occurrences of substring in the string.
   - **Example:**
     ```python
     text = "banana"
     print(text.count("a"))  # Output: 3
     ```

5. **`encode(encoding='utf-8', errors='strict')`**
   - Returns an encoded version of the string as a bytes object.
   - **Example:**
     ```python
     text = "hello"
     print(text.encode())  # Output: b'hello'
     ```

6. **`endswith(suffix, start=..., end=...)`**
   - Checks if the string ends with the specified suffix and returns True or False.
   - **Example:**
     ```python
     text = "hello world"
     print(text.endswith("world"))  # Output: True
     ```

7. **`expandtabs(tabsize=8)`**
   - Expands tabs in the string to multiple spaces, default tabsize is 8.
   - **Example:**
     ```python
     text = "01\t012\t0123\t01234"
     print(text.expandtabs(4))  # Output: "01  012 0123    01234"
     ```

8. **`find(substring, start=..., end=...)`**
   - Returns the lowest index of substring in the string or -1 if not found.
   - **Example:**
     ```python
     text = "hello world"
     print(text.find("world"))  # Output: 6
     ```

9. **`format(*args, **kwargs)`**
   - Formats the string using format() method with positional and keyword arguments.
   - **Example:**
     ```python
     text = "The sum of 1 + 2 is {0}"
     print(text.format(1 + 2))  # Output: "The sum of 1 + 2 is 3"
     ```

10. **`format_map(mapping)`**
    - Formats the string using format() method with a mapping object.
    - **Example:**
      ```python
      class Default(dict):
          def __missing__(self, key):
              return key
      
      text = "{name} was born in {country}"
      print(text.format_map(Default(name='Guido')))  # Output: "Guido was born in country"
      ```

11. **`index(substring, start=..., end=...)`**
    - Returns the lowest index of substring in the string or raises ValueError if not found.
    - **Example:**
      ```python
      text = "hello world"
      print(text.index("world"))  # Output: 6
      ```

12. **`isalnum()`**
    - Returns True if all characters in the string are alphanumeric (letters or numbers).
    - **Example:**
      ```python
      text = "hello123"
      print(text.isalnum())  # Output: True
      ```

13. **`isalpha()`**
    - Returns True if all characters in the string are alphabetic (letters only).
    - **Example:**
      ```python
      text = "hello"
      print(text.isalpha())  # Output: True
      ```

14. **`isascii()`**
    - Returns True if all characters in the string are ASCII characters.
    - **Example:**
      ```python
      text = "hello"
      print(text.isascii())  # Output: True
      ```

15. **`isdecimal()`**
    - Returns True if all characters in the string are decimal (numbers only).
    - **Example:**
      ```python
      text = "123"
      print(text.isdecimal())  # Output: True
      ```

16. **`isdigit()`**
    - Returns True if all characters in the string are digits (numbers only).
    - **Example:**
      ```python
      text = "123"
      print(text.isdigit())  # Output: True
      ```

17. **`isidentifier()`**
    - Returns True if the string is a valid identifier (e.g., variable name).
    - **Example:**
      ```python
      text = "variable_name"
      print(text.isidentifier())  # Output: True
      ```

18. **`islower()`**
    - Returns True if all characters in the string are lowercase.
    - **Example:**
      ```python
      text = "hello123"
      print(text.islower())  # Output: True
      ```

19. **`isnumeric()`**
    - Returns True if all characters in the string are numeric (numbers only).
    - **Example:**
      ```python
      text = "123"
      print(text.isnumeric())  # Output: True
      ```

20. **`isprintable()`**
    - Returns True if all characters in the string are printable or the string is empty.
    - **Example:**
      ```python
      text = "hello"
      print(text.isprintable())  # Output: True
      ```

21. **`isspace()`**
    - Returns True if all characters in the string are whitespace.
    - **Example:**
      ```python
      text = "   "
      print(text.isspace())  # Output: True
      ```

22. **`isupper()`**
    - Returns True if all characters in the string are uppercase.
    - **Example:**
      ```python
      text = "HELLO"
      print(text.isupper())  # Output: True
      ```

23. **`join(iterable)`**
    - Concatenates elements of the iterable with the string as separator.
    - **Example:**
      ```python
      text = "-"
      sequence = ["a", "b", "c"]
      print(text.join(sequence))  # Output: "a-b-c"
      ```

24. **`ljust(width, fillchar=' ')`**
    - Returns a left-justified string of specified width padded with fillchar (default is space).
    - **Example:**
      ```python
      text = "hello"
      print(text.ljust(10, '-'))  # Output: "hello-----"
      ```

25. **`lower()`**
    - Returns a copy of the string converted to lowercase.
    - **Example:**
      ```python
      text = "Hello World232"
      print(text.lower())  # Output: "hello world232"
      ```

26. **`lstrip(chars=None)`**
    - Returns a copy of the string with leading characters removed (default is whitespace).
    - **Example:**
      ```python
      text = "--Hello World--"
      print(text.lstrip('-'))  # Output: "Hello World--"
      
      text = "   hello   "
      print(text.lstrip())  # Output: "hello   "
      ```

27. **`maketrans(x[, y[, z]])`**
    - Returns a translation table for use in translate() method.
    - **Example:**
      ```python
      intab = "aeiou"
      outtab = "12345"
      trantab = str.maketrans(intab, outtab)
      print("this is string example....wow!!!".translate(trantab))
      # Output: "th3s 3s str3ng 2x1mpl2....w4w!!!"
      ```

28. **`partition(sep)`**
    - Splits the string at the first occurrence of sep and returns a tuple with part before sep, sep itself, and part after sep.
    - **Example:**
      ```python
      text = "hello world"
      print(text.partition(" "))  # Output: ('hello', ' ', 'world')
      ```

29. **`removeprefix(prefix)`**
    - Returns a copy of the string with the specified prefix removed.
    - **Example:**
      ```python
      text = "TestHook"
      print(text.removeprefix("Test"))  # Output: "Hook"
      ```

30. **`replace(old, new, count=-1)`**
    - Returns a copy of the string with occurrences of substring old replaced by new. If count is specified, only first count occurrences are replaced.
    - **Example:**
      ```python
      text = "hello world world"
      print(text.replace("world", "Python"))  # Output: "hello Python Python"
      ```

31. **`rfind(substring, start=..., end=...)`**
    - Returns the highest index of substring in the string or -1 if not found.
    - **Example:**
      ```python
      text = "hello world world"
      print(text.rfind("world"))  # Output: 12
      ```

32. **`rindex(substring, start=..., end=...)`**
    - Returns the highest index of substring in the string or raises ValueError if not found.
    - **Example:**
      ```python
      text = "hello world world"
      print(text.rindex("world"))  # Output: 12
      ```

33. **`rjust(width, fillchar=' ')`**
    - Returns a right-justified string of specified width padded with fillchar (default is space).
    - **Example:**
      ```python
      text = "hello"
      print(text.rjust(10, '-'))  # Output: "-----hello"
      ```

34. **`rpartition(sep)`**
    - Splits the string at the last occurrence of sep and returns a tuple with part before sep, sep itself, and part after sep.
    - **Example:**
      ```python
      text = "hello world"
      print(text.rpartition(" "))  # Output: ('hello', ' ', 'world')
      ```

35. **`rsplit(sep=None, maxsplit=-1)`**
    - Splits the string from the right at the specified separator and returns a list.
    - **Example:**
      ```python
      text = "hello world world"
      print(text.rsplit())  # Output: ['hello', 'world', 'world']
      ```

36. **`rstrip(chars=None)`**
    - Returns a copy of the string with trailing characters removed (default is whitespace).
    - **Example:**
      ```python
      text = "   hello   "
      print(text.rstrip())  # Output: "   hello"
      ```

37. **`split(sep=None, maxsplit=-1)`**
    - Splits the string at the specified separator and returns a list of substrings.
    - **Example:**
      ```python
      text = "hello world"
      print(text.split())  # Output: ['hello', 'world']
      ```

38. **`splitlines(keepends=False)`**
    - Splits the string at line breaks and returns a list of lines.
    - **Example:**
      ```python
      text = "hello\nworld"
      print(text.splitlines())  # Output: ['hello', 'world']
      ```

39. **`startswith(prefix, start=..., end=...)`**
    - Checks if the string starts with the specified prefix and returns True or False.
    - **Example:**
      ```python
      text = "hello world"
      print(text.startswith("hello"))  # Output: True
      ```

40. **`strip(chars=None)`**
    - Returns a copy of the string with leading and trailing characters removed (default is whitespace).
    - **Example:**
      ```python
      text = "   hello   "
      print(text.strip())  # Output: "hello"
      ```

41. **`swapcase()`**
    - Returns a copy of the string with uppercase characters converted to lowercase and vice versa.
    - **Example:**
      ```python
      text = "Hello World"
      print(text.swapcase())  # Output: "hELLO wORLD"
      ```

42. **`title()`**
    - Returns a copy of the string with the first character of each word capitalized and the rest lowercased.
    - **Example:**
      ```python
      text = "hello world"
      print(text.title())  # Output: "Hello World"
      ```

43. **`upper()`**
    - Returns a copy of the string converted to uppercase.
    - **Example:**
      ```python
      text = "hello world"
      print(text.upper())  # Output: "HELLO WORLD"
      ```

44. **`zfill(width)`**
    - Returns a copy of the string padded with zeros on the left to make a string of length width.
    - **Example:**
      ```python
      text = "42"
      print(text.zfill(5))  # Output: "00042"
      ```

## Usage

Each function example demonstrates its usage with Python code snippets and expected output. Feel free to explore and modify these examples to suit your needs.
## Resources
- **Here Is the explanation of string method check the like below:**
https://docs.google.com/document/d/1wGfHLVg2e6TvZXSIs-7OVUOfNv0Dbtigtg25qpUALNo/edit?usp=sharing
