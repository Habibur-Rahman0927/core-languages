# PHP Array Functions Examples

This repository contains examples of various PHP array functions with explanations and outputs.

## Functions Covered

1. **`array_change_key_case`**
   - Converts all keys in an array to uppercase.
   
2. **`array_chunk`**
   - Splits an array into chunks. Useful for breaking down large datasets or iterating over parts of an array separately.
   
3. **`array_column`**
   - Returns the values from a single column in an array. It's handy for extracting specific data columns (values) from multidimensional arrays.
   
4. **`array_combine`**
   - Creates an array by using one array for keys and another for its values. Useful for combining two arrays where one serves as keys and the other as values.
   
5. **`array_count_values`**
   - Counts all the values of an array. This function counts the occurrences of each unique value in an array.
   
6. **`array_diff_assoc`**
   - Computes the difference of arrays with additional index check. It compares arrays with their keys and values to find differences.
   
7. **`array_diff_key`**
   - Computes the difference of arrays using keys for comparison. This function compares arrays based on their keys only, ignoring the values.
   
8. **`array_diff_uassoc`**
   - Computes the difference of arrays with additional index check using a user-defined callback function. Allows for custom comparison logic.
   
9. **`array_diff_ukey`**
   - Computes the difference of arrays using a callback function on the keys for comparison. Similar to `array_diff_uassoc`, but compares keys only.
   
10. **`array_diff`**
    - Computes the difference of arrays. This function finds the values that are present in one array but not in another.
    
11. **`array_fill_keys`**
    - Fills an array with values, specifying keys. Useful for initializing an array where all specified keys have the same value.
    
12. **`array_fill`**
    - Fills an array with values. This function fills an array with a specified number of elements, each having the same value.
    
13. **`array_filter`**
    - Filters elements of an array using a callback function. It iterates over each element and retains only those that pass a user-defined condition.
    
14. **`array_flip`**
    - Flips keys and values of an array. Converts array keys into values and values into keys. Note that this operation assumes unique values as keys.
    
15. **`array_intersect_assoc`**
    - Computes the intersection of arrays with additional index check. Finds elements common to all arrays, comparing both keys and values.
    
16. **`array_intersect_key`**
    - Computes the intersection of arrays using keys for comparison. Finds elements common to all arrays based on their keys.
    
17. **`array_intersect_uassoc`**
    - Computes the intersection of arrays with additional index check, compares indexes by a callback function. Allows for custom comparison logic.
    
18. **`array_intersect_ukey`**
    - Computes the intersection of arrays using a callback function on the keys for comparison. Similar to `array_intersect_uassoc`, but compares keys only.
    
19. **`array_intersect`**
    - Computes the intersection of arrays. Finds elements common to all arrays based on their values.
    
20. **`array_is_list`**
    - Checks if the given variable is an array and contains only integer keys. Useful for determining if an array is a list-style array (sequential integer keys starting from 0).
    
21. **`array_key_exists`**
    - Checks if the given key or index exists in the array. Useful for checking the presence of a key before accessing its value.
    
22. **`array_key_first`**
    - Gets the first key of an array. Returns the first key of an array without affecting the internal pointer.
    
23. **`array_key_last`**
    - Gets the last key of an array. Returns the last key of an array without affecting the internal pointer.
    
24. **`array_keys`**
    - Gets all the keys or a subset of keys from an array. Returns an array of all the keys in the input array.
    
25. **`array_map`**
    - Applies a callback function to each element of an array. Useful for applying a function to each element of one or more arrays.
    
26. **`array_merge_recursive`**
    - Recursively merges one or more arrays. Combines arrays such that if two or more elements have the same key, they are merged into an array.
    
27. **`array_merge`**
    - Merges one or more arrays. Combines arrays into a single array, appending the values of one array to the end of another.
    
28. **`array_multisort`**
    - Sorts multiple or multi-dimensional arrays. Sorts arrays by one or more columns, useful for sorting arrays by multiple criteria.
    
29. **`array_pad`**
    - Pad array to the specified length with a value. Extends an array to a specified length by appending elements with a specified value.
    
30. **`array_pop`**
    - Removes the last element from an array. Returns and removes the last element of an array, reducing the array length by one.
    
31. **`array_product`**
    - Calculates the product of array values. Returns the product of all values in an array.
    
32. **`array_push`**
    - Pushes one or more elements onto the end of an array. Adds one or more elements to the end of an array.
    
33. **`array_rand`**
    - Picks one or more random keys from an array. Returns one or more random keys from an array.
    
34. **`array_reduce`**
    - Reduces an array to a single value using a callback function. Applies a function against an accumulator and each element in the array to reduce it to a single value.
    
35. **`array_replace_recursive`**
    - Replaces elements from passed arrays recursively. Replaces elements from the first array with elements from subsequent arrays, recursively.
    
36. **`array_replace`**
    - Replaces elements from passed arrays into the first array. Replaces elements from the first array with elements from subsequent arrays.
    
37. **`array_reverse`**
    - Reverses the order of elements in an array. Returns an array with elements in reverse order.
    
38. **`array_search`**
    - Searches an array for a given value and returns the first corresponding key if successful. Searches for a value in an array and returns the corresponding key if found.
    
39. **`array_shift`**
    - Shifts an element off the beginning of an array. Removes the first element from an array and returns it, shifting the array left.
    
40. **`array_slice`**
    - Extracts a slice of an array. Returns a slice of an array based on specified start and length parameters.
    
41. **`array_sum`**
    - Calculates the sum of values in an array. Returns the sum of all values in an array.
    
42. **`array_udiff_assoc`**
    - Computes the difference of arrays with additional index check, compares data by a callback function. Computes the difference between arrays by a user-defined comparison function, with index checks.
    
43. **`array_udiff_uassoc`**
    - Computes the difference of arrays with additional index check, compares data and indexes by separate callback functions. Computes the difference between arrays by separate user-defined comparison functions, with index checks.
    
44. **`array_udiff`**
    - Computes the difference of arrays by using a callback function for data comparison. Computes the difference between arrays by a user-defined comparison function.
    
45. **`array_uintersect_assoc`**
    - Computes the intersection of arrays with additional index check, compares data by a callback function. Computes the intersection of arrays by a user-defined comparison function, with index checks.
    
46. **`array_uintersect_uassoc`**
    - Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions. Computes the intersection of arrays by separate user-defined comparison functions, with index checks.
    
47. **`array_uintersect`**
    - Computes the intersection of arrays, compares data by a callback function. Computes the intersection of arrays by a user-defined comparison function.
    
48. **`array_unique`**
    - Removes duplicate values from an array. Returns an array with duplicate values removed.
    
49. **`array_unshift`**
    - Prepend one or more elements to the beginning of an array. Adds one or more elements to the beginning of an array.
    
50. **`array_values`**
    - Returns all the values of an array. Returns an indexed array of all the values in the input array.
    
51. **`array_walk_recursive`**
    - Applies a user function recursively to every member of an array. Applies a function recursively to every element in an array.
    
52. **`array_walk`**
    - Applies a user function to each element of an array. Applies a function to every element in an array.
    
53. **`arsort`**
    - Sorts an array in reverse order and maintains index association. Sorts an array in descending order, preserving key associations.
    
54. **`asort`**
    - Sorts an array and maintains index association. Sorts an array in ascending order, preserving key associations.
    
55. **`compact`**
    - Create an array containing variables and their values. Creates an array containing variables and their corresponding values.
    
56. **`count`**
    - Counts all elements in an array, or something in an object. Counts all elements in an array or properties in an object.
    
57. **`current`**
    - Returns the current element in an array. Returns the element that the internal array pointer is currently pointing to.
    
58. **`each`**
    - Return the current key and value pair from an array and advance the array cursor. Returns the current key and value pair from an array and advances the array cursor.
    
59. **`end`**
    - Set the internal pointer of an array to its last element. Moves the internal array pointer to the last element of the array.
    
60. **`extract`**
    - Imports variables into the current symbol table from an array. Imports variables from an associative array into the current symbol table.
    
61. **`in_array`**
    - Checks if a value exists in an array. Checks if a specified value exists in an array.
    
62. **`key_exists`**
    - Alias of `array_key_exists`. Checks if a specified key or index exists in an array.
    
63. **`key`**
    - Fetches the current key from an array. Returns the current key of an array element.
    
64. **`krsort`**
    - Sorts an array by key in reverse order. Sorts an array by key in descending order.
    
65. **`ksort`**
    - Sorts an array by key. Sorts an array by key in ascending order.
    
66. **`list`**
    - Assigns variables as if they were an array. Assigns values from an array to variables.
    
67. **`natcasesort`**
    - Sorts an array using a case-insensitive "natural order" algorithm. Sorts an array in a case-insensitive, natural order.
    
68. **`natsort`**
    - Sorts an array using a "natural order" algorithm. Sorts an array in a natural order.
    
69. **`next`**
    - Advances the internal pointer of an array. Moves the internal array pointer to the next element.
    
70. **`pos`**
    - Alias of `current`. Returns the current element in an array.
    
71. **`prev`**
    - Rewinds the internal pointer of an array. Moves the internal array pointer to the previous element.
    
72. **`range`**
    - Creates an array containing a range of elements. Creates an array containing a range of elements specified by start, end, and optional step.
    
73. **`reset`**
    - Sets the internal pointer of an array to its first element. Moves the internal array pointer to the first element.
    
74. **`rsort`**
    - Sorts an array in reverse order. Sorts an array in descending order.
    
75. **`shuffle`**
    - Shuffles an array. Randomly shuffles the elements of an array.
    
76. **`sizeof`**
    - Alias of `count`. Counts all elements in an array, or something in an object.
    
77. **`sort`**
    - Sorts an array. Sorts an array in ascending order.
    
78. **`uasort`**
    - Sorts an array with a user-defined comparison function and maintains index association. Sorts an array using a user-defined function, preserving key associations.
    
79. **`uksort`**
    - Sorts an array by keys using a user-defined comparison function. Sorts an array by keys using a user-defined function.
    
80. **`usort`**
    - Sorts an array using a user-defined comparison function. Sorts an array using a user-defined function.


## Resources
- **Here Is the explanation of array function check the like below:**
https://docs.google.com/document/d/1vz1bmvAQD8ixrIwnBUb5Zw8N65mefKy771vJYxSol4k/edit?usp=sharing
