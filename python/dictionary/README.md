# Python Dictionary Methods

Welcome to the repository showcasing examples of various Python dictionaries, including their descriptions and examples.

## Methods Covered

1. **`clear`**
    - Removes all items from the dictionary.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2, 'c': 3}
      my_dict.clear()
      print(my_dict)  # Output: {}
      ```

2. **`copy`**
    - Returns a shallow copy of the dictionary.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2, 'c': 3}
      copied_dict = my_dict.copy()
      print(copied_dict)  # Output: {'a': 1, 'b': 2, 'c': 3}
      ```

3. **`fromkeys`**
    - Creates a new dictionary from the given keys with a specified value.
    - **Example:**
      ```python
      keys = [1, 2, 3]
      new_dict = dict.fromkeys(keys, 100)
      print(new_dict)  # Output: {1: 100, 2: 100, 3: 100}
      ```

4. **`get`**
    - Returns the value for a specified key if the key is in the dictionary, otherwise returns the default value.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2, 'c': 3}
      value = my_dict.get('b', 0)
      print(value)  # Output: 2
      ```

5. **`items`**
    - Returns a view object that displays a list of dictionary's key-value tuple pairs.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2, 'c': 3}
      items = my_dict.items()
      print(items)  # Output: dict_items([('a', 1), ('b', 2), ('c', 3)])
      ```

6. **`keys`**
    - Returns a view object that displays a list of all the keys in the dictionary.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2, 'c': 3}
      keys = my_dict.keys()
      print(keys)  # Output: dict_keys(['a', 'b', 'c'])
      ```

7. **`pop`**
    - Removes the specified key and returns the corresponding value. If the key is not found, the default value is returned if provided.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2, 'c': 3}
      value = my_dict.pop('b', 0)
      print(value)  # Output: 2
      print(my_dict)  # Output: {'a': 1, 'c': 3}
      ```

8. **`popitem`**
    - Removes and returns the last key-value pair as a tuple.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2, 'c': 3}
      item = my_dict.popitem()
      print(item)  # Output: ('c', 3)
      print(my_dict)  # Output: {'a': 1, 'b': 2}
      ```

9. **`setdefault`**
    - Returns the value of a specified key. If the key is not found, inserts the key with the specified value and returns the value.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2}
      value = my_dict.setdefault('c', 3)
      print(value)  # Output: 3
      print(my_dict)  # Output: {'a': 1, 'b': 2, 'c': 3}

      value = my_dict.setdefault('b', 0)
      print(value)  # Output: 2 (already existed, so returns existing value)
      ```

10. **`update`**
    - Updates the dictionary with elements from another dictionary or an iterable of key-value pairs.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2}
      my_dict.update({'c': 3, 'd': 4})
      print(my_dict)  # Output: {'a': 1, 'b': 2, 'c': 3, 'd': 4}
      ```

11. **`values`**
    - Returns a view object that displays a list of all the values in the dictionary.
    - **Example:**
      ```python
      my_dict = {'a': 1, 'b': 2, 'c': 3}
      vals = my_dict.values()
      print(vals)  # Output: dict_values([1, 2, 3])
      ```

## Usage Notes
- These methods provide essential functionalities for creating, updating, and manipulating dictionaries in Python.
- The `update` method is particularly useful for merging dictionaries or adding multiple key-value pairs at once.

## Additional Resources
- **Here Is the explanation of dictionary methods check the like below:**
https://docs.google.com/document/d/1wGfHLVg2e6TvZXSIs-7OVUOfNv0Dbtigtg25qpUALNo/edit?usp=sharing
- For more detailed information, refer to the [official Python documentation on dictionaries](https://docs.python.org/3/library/stdtypes.html#mapping-types-dict).
