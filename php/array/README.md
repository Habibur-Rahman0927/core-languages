# PHP Array Functions Examples

Welcome to the repository showcasing examples of various PHP array functions along with detailed explanations and outputs.

## Functions Covered

1. **`array_change_key_case`**
   - Converts all keys in an array to uppercase.
   - **Example:**
     ```php
     $input_array = array("FirSt" => 1, "SecOnd" => 2);
     $result = array_change_key_case($input_array, CASE_UPPER);
     print_r($result); // Outputs: Array ([FIRST] => 1, [SECOND] => 2)
     ```

2. **`array_chunk`**
   - Splits an array into chunks. Useful for breaking down large datasets or iterating over parts of an array separately.
   - **Example:**
     ```php
     $input_array = array('a', 'b', 'c', 'd', 'e');
     $result = array_chunk($input_array, 2);
     print_r($result); // Outputs: Array ([0] => Array ([0] => a, [1] => b), [1] => Array ([0] => c, [1] => d), [2] => Array ([0] => e))
     ```

3. **`array_column`**
   - Returns the values from a single column in an array. It's handy for extracting specific data columns (values) from multidimensional arrays.
   - **Example:**
     ```php
     $records = [
         ['id' => 1, 'name' => 'John', 'age' => 25],
         ['id' => 2, 'name' => 'Jane', 'age' => 30],
         ['id' => 3, 'name' => 'Doe', 'age' => 35]
     ];
     $result = array_column($records, 'name');
     print_r($result); // Outputs: Array ([0] => John, [1] => Jane, [2] => Doe)
     ```

4. **`array_combine`**
   - Creates an array by using one array for keys and another for its values. Useful for combining two arrays where one serves as keys and the other as values.
   - **Example:**
     ```php
     $keys = array('a', 'b', 'c');
     $values = array(1, 2, 3);
     $result = array_combine($keys, $values);
     print_r($result); // Outputs: Array ([a] => 1, [b] => 2, [c] => 3)
     ```

5. **`array_count_values`**
   - Counts all the values of an array. This function counts the occurrences of each unique value in an array.
   - **Example:**
     ```php
     $array = array(1, "hello", 1, "world", "hello");
     $result = array_count_values($array);
     print_r($result); // Outputs: Array ([1] => 2, [hello] => 2, [world] => 1)
     ```

6. **`array_diff_assoc`**
   - Computes the difference of arrays with additional index check. It compares arrays with their keys and values to find differences.
   - **Example:**
     ```php
     $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
     $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
     $result = array_diff_assoc($array1, $array2);
     print_r($result); // Outputs: Array ([a] => apple)
     ```

7. **`array_diff_key`**
   - Computes the difference of arrays using keys for comparison. This function compares arrays based on their keys only, ignoring the values.
   - **Example:**
     ```php
     $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
     $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
     $result = array_diff_key($array1, $array2);
     print_r($result); // Outputs: Array ([a] => apple)
     ```

8. **`array_diff_uassoc`**
   - Computes the difference of arrays with additional index check using a user-defined callback function. Allows for custom comparison logic.
   - **Example:**
     ```php
     function custom_compare($a, $b) {
         if ($a === $b) {
             return 0;
         }
         return ($a > $b) ? 1 : -1;
     }
     $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
     $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
     $result = array_diff_uassoc($array1, $array2, 'custom_compare');
     print_r($result); // Outputs: Array ([a] => apple)
     ```

9. **`array_diff_ukey`**
   - Computes the difference of arrays using a callback function on the keys for comparison. Similar to `array_diff_uassoc`, but compares keys only.
   - **Example:**
     ```php
     function key_compare_func($key1, $key2) {
         if ($key1 === $key2) {
             return 0;
         }
         return ($key1 > $key2) ? 1 : -1;
     }
     $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
     $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
     $result = array_diff_ukey($array1, $array2, 'key_compare_func');
     print_r($result); // Outputs: Array ([a] => apple)
     ```

10. **`array_diff`**
    - Computes the difference of arrays. This function finds the values that are present in one array but not in another.
    - **Example:**
      ```php
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $result = array_diff($array1, $array2);
      print_r($result); // Outputs: Array ([a] => apple)
      ```

11. **`array_fill_keys`**
    - Fills an array with values, specifying keys. Useful for initializing an array where all specified keys have the same value.
    - **Example:**
      ```php
      $keys = array('a', 'b', 'c');
      $value = 'hello';
      $result = array_fill_keys($keys, $value);
      print_r($result); // Outputs: Array ([a] => hello, [b] => hello, [c] => hello)
      ```

12. **`array_fill`**
    - Fills an array with values. This function fills an array with a specified number of elements, each having the same value.
    - **Example:**
      ```php
      $result = array_fill(0, 3, 'apple');
      print_r($result); // Outputs: Array ([0] => apple, [1] => apple, [2] => apple)
      ```

13. **`array_filter`**
    - Filters elements of an array using a callback function. It iterates over each element and retains only those that pass a user-defined condition.
    - **Example:**
      ```php
      $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
      $result = array_filter($array, function($value) {
          return ($value % 2 == 0);
      });
      print_r($result); // Outputs: Array ([1] => 2, [3] => 4, [5] => 6, [7] => 8, [9] => 10)
      ```

14. **`array_flip`**
    - Flips keys and values of an array. Converts array keys into values and values into keys. Note that this operation assumes unique values as keys.
    - **Example:**
      ```php
      $array = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $flipped = array_flip($array);
      print_r($flipped); // Outputs: Array ([apple] => a, [banana] => b, [cherry] => c)
      ```

15. **`array_intersect_assoc`**
    - Computes the intersection of arrays with additional index check. Finds elements common to all arrays, comparing both keys and values.
    - **Example:**
      ```php
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $intersected = array_intersect_assoc($array1, $array2);
      print_r($intersected); // Outputs: Array ([b] => banana, [c] => cherry)
      ```

16. **`array_intersect_key`**
    - Computes the intersection of arrays using keys for comparison. Finds elements common to all arrays based on their keys.
    - **Example:**
      ```php
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $intersected = array_intersect_key($array1, $array2);
      print_r($intersected); // Outputs: Array ([b] => banana, [c] => cherry)
      ```

17. **`array_intersect_uassoc`**
    - Computes the intersection of arrays with additional index check, compares indexes by a callback function. Allows for custom comparison logic.
    - **Example:**
      ```php
      function custom_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $intersected = array_intersect_uassoc($array1, $array2, 'custom_compare');
      print_r($intersected); // Outputs: Array ([b] => banana, [c] => cherry)
      ```

18. **`array_intersect_ukey`**
    - Computes the intersection of arrays using a callback function on the keys for comparison. Similar to `array_intersect_uassoc`, but compares keys only.
    - **Example:**
      ```php
      function key_compare_func($key1, $key2) {
          if ($key1 === $key2) {
              return 0;
          }
          return ($key1 > $key2) ? 1 : -1;
      }
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $intersected = array_intersect_ukey($array1, $array2, 'key_compare_func');
      print_r($intersected); // Outputs: Array ([b] => banana, [c] => cherry)
      ```

19. **`array_intersect`**
    - Computes the intersection of arrays. Finds elements common to all arrays based on their values.
    - **Example:**
      ```php
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $intersected = array_intersect($array1, $array2);
      print_r($intersected); // Outputs: Array ([b] => banana, [c] => cherry)
      ```

20. **`array_is_list`**
    - Checks if the given variable is an array and contains only integer keys. Useful for determining if an array is a list-style array (sequential integer keys starting from 0).
    - **Example:**
      ```php
      $list_array = [0 => 'apple', 1 => 'banana', 2 => 'cherry'];
      $assoc_array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
      $is_list = array_is_list($list_array);
      $is_not_list = array_is_list($assoc_array);
      var_dump($is_list); // Outputs: bool(true)
      var_dump($is_not_list); // Outputs: bool(false)
      ```

21. **`array_key_exists`**
    - Checks if the given key or index exists in the array. Useful for checking the presence of a key before accessing its value.
    - **Example:**
      ```php
      $array = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $exists = array_key_exists('b', $array);
      $does_not_exist = array_key_exists('d', $array);
      var_dump($exists); // Outputs: bool(true)
      var_dump($does_not_exist); // Outputs: bool(false)
      ```

22. **`array_key_first`**
    - Gets the first key of an array. Returns the first key of an array without affecting the internal pointer.
    - **Example:**
      ```php
      $array = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $first_key = array_key_first($array);
      echo $first_key; // Outputs: a
      ```

23. **`array_key_last`**
    - Gets the last key of an array. Returns the last key of an array without affecting the internal pointer.
    - **Example:**
      ```php
      $array = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $last_key = array_key_last($array);
      echo $last_key; // Outputs: c
      ```

24. **`array_keys`**
    - Gets all the keys or a subset of keys from an array. Returns an array of all the keys in the input array.
    - **Example:**
      ```php
      $array = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $keys = array_keys($array);
      print_r($keys); // Outputs: Array ([0] => a, [1] => b, [2] => c)
      ```

25. **`array_map`**
    - Applies a callback function to each element of an array. Useful for applying a function to each element of one or more arrays.
    - **Example:**
      ```php
      $array = [1, 2, 3, 4, 5];
      $multiplier = 2;
      $result = array_map(function($value) use ($multiplier) {
          return $value * $multiplier;
      }, $array);
      print_r($result); // Outputs: Array ([0] => 2, [1] => 4, [2] => 6, [3] => 8, [4] => 10)
      ```

26. **`array_merge_recursive`**
    - Recursively merges one or more arrays. Combines arrays such that if two or more elements have the same key, they are merged into an array.
    - **Example:**
      ```php
      $array1 = array("color" => array("favorite" => "red"), 5);
      $array2 = array(10, "color" => array("favorite" => "green", "blue"));
      $result = array_merge_recursive($array1, $array2);
      print_r($result); // Outputs: Array ([color] => Array ([favorite] => Array ([0] => red, [1] => green), [0] => blue), [0] => 5, [1] => 10)
      ```

27. **`array_merge`**
    - Merges one or more arrays. Combines arrays into a single array, appending the values of one array to the end of another.
    - **Example:**
      ```php
      $array1 = array("a" => "apple", "b" => "banana");
      $array2 = array("c" => "cherry", "d" => "date");
      $result = array_merge($array1, $array2);
      print_r($result); // Outputs: Array ([a] => apple, [b] => banana, [c] => cherry, [d] => date)
      ```

28. **`array_multisort`**
    - Sorts multiple or multi-dimensional arrays. Sorts arrays by one or more columns, useful for sorting arrays by multiple criteria.
    - **Example:**
      ```php
      $array = array(
          array("name" => "John", "age" => 30),
          array("name" => "Jane", "age" => 25),
          array("name" => "Doe", "age" => 35)
      );
      array_multisort(array_column($array, 'age'), SORT_ASC, $array);
      print_r($array);
      // Outputs:
      // Array (
      //    [0] => Array ([name] => Jane, [age] => 25)
      //    [1] => Array ([name] => John, [age] => 30)
      //    [2] => Array ([name] => Doe, [age] => 35)
      // )
      ```

29. **`array_pad`**
    - Pad array to the specified length with a value. Extends an array to a specified length by appending elements with a specified value.
    - **Example:**
      ```php
      $input = [1, 2, 3];
      $result = array_pad($input, 5, 0);
      print_r($result); // Outputs: Array ([0] => 1, [1] => 2, [2] => 3, [3] => 0, [4] => 0)
      ```

30. **`array_pop`**
    - Pop the element off the end of array. Removes and returns the last element of an array.
    - **Example:**
      ```php
      $stack = array("orange", "banana", "apple");
      $fruit = array_pop($stack);
      print_r($stack); // Outputs: Array ([0] => orange, [1] => banana)
      echo $fruit; // Outputs: apple
      ```

31. **`array_product`**
    - Calculate the product of values in an array. Returns the product of all values in an array.
    - **Example:**
      ```php
      $array = [1, 2, 3, 4, 5];
      $product = array_product($array);
      echo $product; // Outputs: 120 (1 * 2 * 3 * 4 * 5)
      ```

32. **`array_push`**
    - Push one or more elements onto the end of array. Adds one or more elements to the end of an array.
    - **Example:**
      ```php
      $stack = array("orange", "banana");
      array_push($stack, "apple", "raspberry");
      print_r($stack); // Outputs: Array ([0] => orange, [1] => banana, [2] => apple, [3] => raspberry)
      ```

33. **`array_rand`**
    - Pick one or more random keys from an array. Returns one or more random keys from an array.
    - **Example:**
      ```php
      $input = array("apple", "banana", "cherry", "date");
      $rand_keys = array_rand($input, 2);
      echo $input[$rand_keys[0]] . "\n";
      echo $input[$rand_keys[1]] . "\n";
      ```

34. **`array_reduce`**
    - Reduce array to a single value via callback function. Applies a callback function against an accumulator and each element in an array to reduce it to a single value.
    - **Example:**
      ```php
      $array = [1, 2, 3, 4, 5];
      $sum = array_reduce($array, function($carry, $item) {
          $carry += $item;
          return $carry;
      }, 0);
      echo $sum; // Outputs: 15 (1 + 2 + 3 + 4 + 5)
      ```

35. **`array_replace_recursive`**
    - Replace elements in array recursively. Replaces elements from passed arrays into the first array recursively.
    - **Example:**
      ```php
      $base = ['fruit' => ['apple' => 1, 'banana' => 2]];
      $replacements = ['fruit' => ['banana' => 5]];
      $replaced = array_replace_recursive($base, $replacements);
      print_r($replaced); // Outputs: Array ([fruit] => Array ([apple] => 1, [banana] => 5))
      ```

36. **`array_replace`**
    - Replaces elements in an array. Replaces elements from passed arrays into the first array.
    - **Example:**
      ```php
      $base = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
      $replacements = ['b' => 'blackberry', 'd' => 'date'];
      $replaced = array_replace($base, $replacements);
      print_r($replaced); // Outputs: Array ([a] => apple, [b] => blackberry, [c] => cherry, [d] => date)
      ```

37. **`array_reverse`**
    - Reverse the order of elements in array. Returns an array with elements in reverse order.
    - **Example:**
      ```php
      $input = array("a", "b", "c", "d");
      $reversed = array_reverse($input);
      print_r($reversed); // Outputs: Array ([0] => d, [1] => c, [2] => b, [3] => a)
      ```

38. **`array_search`**
    - Searches the array for a given value and returns the corresponding key if successful.
    - **Example:**
      ```php
      $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
      $key = array_search('green', $array);
      echo $key; // Outputs: 2
      ```

39. **`array_shift`**
    - Shift an element off the beginning of array. Removes and returns the first element of an array.
    - **Example:**
      ```php
      $stack = array("orange", "banana", "apple");
      $fruit = array_shift($stack);
      print_r($stack); // Outputs: Array ([0] => banana, [1] => apple)
      echo $fruit; // Outputs: orange
      ```

40. **`array_slice`**
    - Extract a slice of the array. Returns a slice of the array based on the start and length provided.
    - **Example:**
      ```php
      $array = array("a", "b", "c", "d", "e");
      $slice = array_slice($array, 2);
      print_r($slice); // Outputs: Array ([0] => c, [1] => d, [2] => e)
      ```

41. **`array_splice`**
    - Remove a portion of the array and replace it with something else. Removes elements from an array and replaces them with new elements.
    - **Example:**
      ```php
      $input = array("red", "green", "blue", "yellow");
      array_splice($input, 2);
      print_r($input); // Outputs: Array ([0] => red, [1] => green)
      ```

42. **`array_sum`**
    - Calculate the sum of values in an array. Returns the sum of all the values in an array.
    - **Example:**
      ```php
      $array = [1, 2, 3, 4, 5];
      $sum = array_sum($array);
      echo $sum; // Outputs: 15 (1 + 2 + 3 + 4 + 5)
      ```

43. **`array_udiff_assoc`**
    - Computes the difference of arrays with additional index check, compares data by a callback function. Allows for custom comparison logic.
    - **Example:**
      ```php
      function custom_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $result = array_udiff_assoc($array1, $array2, 'custom_compare');
      print_r($result); // Outputs: Array ([a] => apple)
      ```

44. **`array_udiff_uassoc`**
    - Computes the difference of arrays with additional index check and index by a callback function. Allows for custom comparison logic on both values and keys.
    - **Example:**
      ```php
      function custom_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      function custom_key_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $result = array_udiff_uassoc($array1, $array2, 'custom_compare', 'custom_key_compare');
      print_r($result); // Outputs: Array ([a] => apple)
      ```

45. **`array_udiff`**
    - Computes the difference of arrays by using a callback function for data comparison. Allows for custom comparison logic on array values.
    - **Example:**
      ```php
      function custom_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $result = array_udiff($array1, $array2, 'custom_compare');
      print_r($result); // Outputs: Array ([a] => apple)
      ```

46. **`array_uintersect_assoc`**
    - Computes the intersection of arrays with additional index check, compares data by a callback function. Allows for custom comparison logic.
    - **Example:**
      ```php
      function custom_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $intersected = array_uintersect_assoc($array1, $array2, 'custom_compare');
      print_r($intersected); // Outputs: Array ([b] => banana, [c] => cherry)
      ```

47. **`array_uintersect_uassoc`**
    - Computes the intersection of arrays with additional index check and index by a callback function. Allows for custom comparison logic on both values and keys.
    - **Example:**
      ```php
      function custom_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      function custom_key_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $intersected = array_uintersect_uassoc($array1, $array2, 'custom_compare', 'custom_key_compare');
      print_r($intersected); // Outputs: Array ([b] => banana, [c] => cherry)
      ```

48. **`array_uintersect`**
    - Computes the intersection of arrays by using a callback function for data comparison. Allows for custom comparison logic on array values.
    - **Example:**
      ```php
      function custom_compare($a, $b) {
          if ($a === $b) {
              return 0;
          }
          return ($a > $b) ? 1 : -1;
      }
      $array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
      $array2 = array("b" => "banana", "c" => "cherry", "d" => "date");
      $intersected = array_uintersect($array1, $array2, 'custom_compare');
      print_r($intersected); // Outputs: Array ([b] => banana, [c] => cherry)
      ```

49. **`array_unique`**
    - Removes duplicate values from an array. Returns an array without duplicate values.
    - **Example:**
      ```php
      $array = [1, 2, 2, 3, 4, 4, 5];
      $unique = array_unique($array);
      print_r($unique); // Outputs: Array ([0] => 1, [1] => 2, [3] => 3, [4] => 4, [6] => 5)
      ```

50. **`array_unshift`**
    - Prepend one or more elements to the beginning of an array. Adds one or more elements to the beginning of an array.
    - **Example:**
      ```php
      $queue = array("orange", "banana");
      array_unshift($queue, "apple", "raspberry");
      print_r($queue); // Outputs: Array ([0] => apple, [1] => raspberry, [2] => orange, [3] => banana)
      ```

51. **`array_values`**
    - Returns all the values of an array. Returns an indexed array containing all the values of the input array.
    - **Example:**
      ```php
      $array = array("size" => "XL", "color" => "gold");
      $values = array_values($array);
      print_r($values); // Outputs: Array ([0] => XL, [1] => gold)
      ```

52. **`array_walk_recursive`**
    - Applies a user-defined function recursively to every member of an array or arrays. Useful for applying a function to every element in a multidimensional array.
    - **Example:**
      ```php
      $array = array('fruit' => array('apple' => 'red', 'banana' => 'yellow'), 'animals' => 'dog');
      array_walk_recursive($array, function(&$value, $key) {
          $value = strtoupper($value);
      });
      print_r($array); // Outputs: Array ([fruit] => Array ([apple] => RED, [banana] => YELLOW), [animals] => DOG)
      ```

53. **`arsort`**
    - Sorts an array in reverse order and maintains index association. Sorts an array in descending order, preserving key associations.
    - **Example:**
      ```php
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      arsort($fruits);
      print_r($fruits); // Outputs: Array ([d] => lemon, [c] => apple, [b] => banana, [a] => orange)
      ```

54. **`asort`**
    - Sorts an array and maintains index association. Sorts an array in ascending order, preserving key associations.
    - **Example:**
      ```php
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      asort($fruits);
      print_r($fruits); // Outputs: Array ([c] => apple, [b] => banana, [a] => orange, [d] => lemon)
      ```

55. **`compact`**
    - Create an array containing variables and their values. Creates an array containing variables and their corresponding values.
    - **Example:**
      ```php
      $name = "Peter";
      $age = 28;
      $city = "New York";
      $result = compact("name", "age", "city");
      print_r($result); // Outputs: Array ([name] => Peter, [age] => 28, [city] => New York)
      ```

56. **`count`**
    - Counts all elements in an array, or something in an object. Counts all elements in an array or properties in an object.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo count($fruits); // Outputs: 3
      ```

57. **`current`**
    - Returns the current element in an array. Returns the element that the internal array pointer is currently pointing to.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo current($fruits); // Outputs: apple
      ```

58. **`each`**
    - Return the current key and value pair from an array and advance the array cursor. Returns the current key and value pair from an array and advances the array cursor.
    - **Example:**
      ```php
      $fruits = array("a" => "apple", "b" => "banana", "c" => "orange");
      $fruit = each($fruits);
      print_r($fruit); // Outputs: Array ([1] => apple, [value] => apple, [0] => a, [key] => a)
      ```

59. **`end`**
    - Set the internal pointer of an array to its last element. Moves the internal array pointer to the last element of the array.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo end($fruits); // Outputs: orange
      ```

60. **`extract`**
    - Imports variables into the current symbol table from an array. Imports variables from an associative array into the current symbol table.
    - **Example:**
      ```php
      $info = array("name" => "Peter", "age" => 28);
      extract($info);
      echo $name; // Outputs: Peter
      echo $age;  // Outputs: 28
      ```
      
61. **`in_array`**
    - Checks if a value exists in an array. Checks if a specified value exists in an array.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      if (in_array("apple", $fruits)) {
          echo "Found apple in the array";
      }
      ```

62. **`key_exists`**
    - Alias of `array_key_exists`. Checks if a specified key or index exists in an array.
    - **Example:**
      ```php
      $array = array("a" => "apple", "b" => "banana", "c" => "orange");
      if (key_exists("b", $array)) {
          echo "Key 'b' exists in the array";
      }
      ```

63. **`key`**
    - Fetches the current key from an array element. Returns the current key of the internal array pointer.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo key($fruits); // Outputs: 0
      ```

64. **`krsort`**
    - Sorts an array by key in reverse order. Sorts an array by key in descending order.
    - **Example:**
      ```php
      $fruits = array("b" => "banana", "a" => "apple", "c" => "orange");
      krsort($fruits);
      print_r($fruits); // Outputs: Array ([c] => orange, [b] => banana, [a] => apple)
      ```

65. **`ksort`**
    - Sorts an array by key. Sorts an array by key in ascending order.
    - **Example:**
      ```php
      $fruits = array("b" => "banana", "a" => "apple", "c" => "orange");
      ksort($fruits);
      print_r($fruits); // Outputs: Array ([a] => apple, [b] => banana, [c] => orange)
      ```

66. **`list`**
    - Assigns variables as if they were an array. Assigns values from an array to variables.
    - **Example:**
      ```php
      $info = array("Peter", 28, "New York");
      list($name, $age, $city) = $info;
      echo "Name: $name, Age: $age, City: $city"; // Outputs: Name: Peter, Age: 28, City: New York
      ```

67. **`natcasesort`**
    - Sorts an array using a case-insensitive "natural order" algorithm. Sorts an array in a case-insensitive, natural order.
    - **Example:**
      ```php
      $fruits = array("Orange1", "orange20", "Orange5", "orange4");
      natcasesort($fruits);
      print_r($fruits); // Outputs: Array ([0] => Orange1, [3] => orange4, [2] => Orange5, [1] => orange20)
      ```

68. **`natsort`**
    - Sorts an array using a "natural order" algorithm. Sorts an array in a natural order.
    - **Example:**
      ```php
      $fruits = array("Orange1", "orange20", "Orange5", "orange4");
      natsort($fruits);
      print_r($fruits); // Outputs: Array ([0] => Orange1, [3] => orange4, [2] => Orange5, [1] => orange20)
      ```

69. **`next`**
    - Advances the internal pointer of an array. Moves the internal array pointer to the next element.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo next($fruits); // Outputs: banana
      ```

70. **`pos`**
    - Alias of `current`. Returns the current element in an array.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo pos($fruits); // Outputs: apple
      ```

71. **`prev`**
    - Rewinds the internal pointer of an array. Moves the internal array pointer to the previous element.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo prev($fruits); // Outputs: orange
      ```

72. **`range`**
    - Creates an array containing a range of elements. Creates an array containing a range of elements specified by start, end, and optional step.
    - **Example:**
      ```php
      $numbers = range(1, 5);
      print_r($numbers); // Outputs: Array ([0] => 1, [1] => 2, [2] => 3, [3] => 4, [4] => 5)
      ```

73. **`reset`**
    - Sets the internal pointer of an array to its first element. Moves the internal array pointer to the first element of the array.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo reset($fruits); // Outputs: apple
      ```

74. **`rsort`**
    - Sorts an array in reverse order. Sorts an array in descending order.
    - **Example:**
      ```php
      $fruits = array("banana", "apple", "orange");
      rsort($fruits);
      print_r($fruits); // Outputs: Array ([0] => orange, [1] => banana, [2] => apple)
      ```

75. **`shuffle`**
    - Shuffles an array. Randomly shuffles the elements of an array.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      shuffle($fruits);
      print_r($fruits); // Outputs: Array (random order of elements)
      ```

76. **`sizeof`**
    - Alias of `count`. Counts all elements in an array, or something in an object.
    - **Example:**
      ```php
      $fruits = array("apple", "banana", "orange");
      echo sizeof($fruits); // Outputs: 3
      ```

77. **`sort`**
    - Sorts an array. Sorts an array in ascending order.
    - **Example:**
      ```php
      $fruits = array("banana", "apple", "orange");
      sort($fruits);
      print_r($fruits); // Outputs: Array ([0] => apple, [1] => banana, [2] => orange)
      ```

78. **`uasort`**
    - Sorts an array with a user-defined comparison function and maintains index association. Sorts an array using a user-defined function, preserving key associations.
    - **Example:**
      ```php
      function compare_length($a, $b) {
          $a_length = strlen($a);
          $b_length = strlen($b);
          if ($a_length == $b_length) {
              return 0;
          }
          return ($a_length < $b_length) ? -1 : 1;
      }

      $fruits = array("apple", "banana", "orange");
      uasort($fruits, 'compare_length');
      print_r($fruits); // Outputs: Array ([0] => apple, [2] => orange, [1] => banana)
      ```

79. **`uksort`**
    - Sorts an array by keys using a user-defined comparison function. Sorts an array by keys using a user-defined function.
    - **Example:**
      ```php
      function key_compare_func($key1, $key2) {
          if ($key1 == $key2) return 0;
          return ($key1 < $key2) ? -1 : 1;
      }

      $fruits = array("b" => "banana", "a" => "apple", "d" => "orange", "c" => "cherry");
      uksort($fruits, 'key_compare_func');
      print_r($fruits); // Outputs: Array ([a] => apple, [b] => banana, [c] => cherry, [d] => orange)
      ```

80. **`usort`**
    - Sorts an array using a user-defined comparison function. Sorts an array using a user-defined function.
    - **Example:**
      ```php
      function compare_length($a, $b) {
          $a_length = strlen($a);
          $b_length = strlen($b);
          if ($a_length == $b_length) {
              return 0;
          }
          return ($a_length < $b_length) ? -1 : 1;
      }

      $fruits = array("apple", "banana", "orange");
      usort($fruits, 'compare_length');
      print_r($fruits); // Outputs: Array ([0] => apple, [2] => orange, [1] => banana)
      ```
---


## Resources
- **Here Is the explanation of array function check the like below:**
[array function](https://docs.google.com/document/d/1vz1bmvAQD8ixrIwnBUb5Zw8N65mefKy771vJYxSol4k/edit?usp=sharing)
