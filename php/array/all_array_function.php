<?php

// $array = ['First' => 1, 'Second' => 2];
// $result = array_change_key_case($array, CASE_UPPER);
// print_r($result);

// $array = [1, 2, 3, 4, 5, 6];
// $result = array_chunk($array, 2);
// print_r($result);
// $array = [1 => 'a', 2 => 'b', 3 => 'c', 4 => 'd', 5 => 'e'];
// $result = array_chunk($array, 2, true);
// print_r($result);

// $array = [
//     ['id' => 1, 'name' => 'Alice'],
//     ['id' => 2, 'name' => 'Bob']
// ];
// $result = array_column($array, 'name');
// print_r($result); 
// Output: Array ( [0] => Alice [1] => Bob )

// $keys = ['name', 'age'];
// $values = ['Alice', 25];
// $result = array_combine($keys, $values);
// print_r($result); 
// Output: Array ( [name] => Alice [age] => 25 )
// $keys = ['first' => 'name', 'second' => 'age'];
// $values = [1 => 'Alice', 2 => 25];
// $result = array_combine($keys, $values);
// print_r($result);
// Output: Array ( [name] => Alice [age] => 25 )

// $responses = ['Yes', 'No', 'Yes', 'Maybe', 'Yes', 'No'];
// $counts = array_count_values($responses);
// print_r($counts);
// // Output: Array ( [Yes] => 3 [No] => 2 [Maybe] => 1 )

// $array1 = ['a' => 'apple', 'b' => 'banana', 'y' => 'no'];
// $array2 = ['a' => 'apple', 'b' => 'blueberry'];
// $array3 = ['a' => 'apple', 'b' => 'banana'];
// $result = array_diff_assoc($array1, $array2, $array3);
// print_r($result);

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['a' => 'apple', 'c' => 'carrot'];
// $array3 = ['d' => 'date'];
// $diff = array_diff_key($array1, $array2, $array3);
// print_r($diff); 
// // Output: Array ( [b] => banana )

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['a' => 'APPLE', 'b' => 'BANANA'];
// $result = array_diff_uassoc($array1, $array2, 'strcasecmp');
// print_r($result); 
// // Output: Array ( )

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['A' => 'apple', 'b' => 'banana'];
// $result = array_diff_ukey($array1, $array2, 'strcasecmp');
// print_r($result); 
// // Output: Array (  )

// $array1 = ['apple', 'banana', 'cherry'];
// $array2 = ['banana', 'cherry'];
// $result = array_diff($array1, $array2);
// print_r($result); 
// // Output: Array ( [0] => apple )

// $keys = ['a', 'b', 'c'];
// $result = array_fill_keys($keys, 'value');
// print_r($result); 
// // Output: Array ( [a] => value [b] => value [c] => value )

// $result = array_fill(0, 5, 'value');
// print_r($result); 
// // Output: Array ( [0] => value [1] => value [2] => value [3] => value [4] => value )

// $array = [1, 2, 3, 4, 5];
// $result = array_filter($array, function($val) { return $val % 2 == 0; });
// print_r($result); 
// // Output: Array ( [1] => 2 [3] => 4 )

// $array = ['a' => 'apple', 'b' => 'banana'];
// $result = array_flip($array);
// print_r($result); 
// // Output: Array ( [apple] => a [banana] => b )

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['a' => 'apple', 'c' => 'carrot'];
// $result = array_intersect_assoc($array1, $array2);
// print_r($result); 
// // Output: Array ( [a] => apple )

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['a' => 'apple', 'c' => 'carrot'];
// $result = array_intersect_key($array1, $array2);
// print_r($result); 
// // Output: Array ( [a] => apple )

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['A' => 'apple', 'b' => 'banana'];
// $result = array_intersect_uassoc($array1, $array2, 'strcasecmp');
// print_r($result);

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['A' => 'apple', 'b' => 'banana'];
// $result = array_intersect_ukey($array1, $array2, 'strcasecmp');
// print_r($result); 
// // Output: Array ( [a] => apple [b] => banana )

// $array1 = ['apple', 'banana', 'cherry'];
// $array2 = ['banana', 'cherry'];
// $result = array_intersect($array1, $array2);
// print_r($result); 
// // Output: Array ( [1] => banana [2] => cherry )

// $array1 = [1, 2, 3];
// $array2 = ['a' => 1, 'b' => 2];
// var_dump(array_is_list($array1)); // Output: bool(true)
// var_dump(array_is_list($array2)); // Output: bool(false)

// $array = ['a' => 'apple', 'b' => 'banana'];
// if (array_key_exists('a', $array)) {
//     echo 'Key "a" exists'; // Output: Key "a" exists
// }

// $array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
// $first_key = array_key_first($array);
// echo $first_key; // Output: a

// $array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', '3' => 'test'];
// $last_key = array_key_last($array);
// echo $last_key; // Output: 3

// $array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
// Retrieve keys with specific value
// True, Using strict comparison to find key
// $keys = array_keys($array, 'banana', true);
// print_r($keys); 
// Output: Array ( [0] => a [1] => b [2] => c )

// $array = [1, 2, 3];
// $result = array_map(function($x) { return $x * $x; }, $array);
// print_r($result); 
// // Output: Array ( [0] => 1 [1] => 4 [2] => 9 )
// $array1 = [1, 2, 3];
// $array2 = [4, 5, 6];
// $array3 = [7, 8, 9];
// // Using array_map to add corresponding elements
// $sum_result = array_map(function($a, $b, $c) {
//     return $a + $b + $c;
// }, $array1, $array2, $array3);
// print_r($sum_result); 
// Output: Array ( [0] => 12 [1] => 15 [2] => 18 )

// $array1 = ['a' => ['apple'], 'b' => ['banana']];
// $array2 = ['a' => ['avocado', 'test'], 'b' => ['blueberry'], 'c' => ['test']];
// $result = array_merge_recursive($array1, $array2);
// print_r($result); 
// // Output: Array ( [a] => Array ( [0] => apple [1] => avocado ) [b] => Array ( [0] => banana [1] => blueberry ) )

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['c' => 'cherry', 'd' => 'date', 'test' => 'test'];
// $result = array_merge($array1, $array2);
// print_r($result); 
// // Output: Array ( [a] => apple [b] => banana [c] => cherry [d] => date )

// $names = ['John', 'Mary', 'Alice'];
// $ages = [25, 30, 20];
// array_multisort($ages, $names);
// print_r($names); 
// // Output: Array ( [0] => Alice [1] => John [2] => Mary )

// $array = [1, 2, 3];
// $result = array_pad($array, 5, 0);
// print_r($result); 
// Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 0 [4] => 0 )

// $array = [1, 2, 3];
// $last = array_pop($array);
// echo $last; // Output: 3

// $array = [2, 3, 4];
// $result = array_product($array);
// echo $result; // Output: 24 (2 * 3 * 4)

// $array = [1, 2, 3];
// array_push($array, 4, 5);
// print_r($array); 
// // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

// $array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
// $keys = array_rand($array); // it's pick a one random key
// $keys = array_rand($array, 2); // it's pick two random key give a indexing associative array
// print_r($keys); 
// Output: Array ( [0] => b [1] => a ) or ( [0] => a [1] => b ) or ( [0] => c [1] => b ), etc.

// $array = [1, 2, 3, 4, 5];
// $result = array_reduce($array, function($carry, $item) {
//     return $carry + $item;
// }, 0);
// echo $result; // Output: 15 (sum of elements)

// $array1 = ['a' => ['x', 'y'], 'b' => 'z'];
// $array2 = ['a' => ['p'], 'b' => ['q']];
// $result = array_replace_recursive($array1, $array2);
// print_r($result); 
// // Output: Array ( [a] => Array ( [0] => p [1] => y ) [b] => Array ( [0] => q ) )

// $array1 = ['a' => 'apple', 'b' => 'banana'];
// $array2 = ['b' => 'blueberry', 'c' => 'cherry'];
// $result = array_replace($array1, $array2);
// print_r($result); 
// // Output: Array ( [a] => apple [b] => blueberry [c] => cherry )

// $array = [1, 2, 3];
// $result = array_reverse($array, true);
// print_r($result); 
// // Output: Array ( [0] => 3 [1] => 2 [2] => 1 )

// $array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
// $key = array_search('banana', $array);
// echo $key; // Output: b
