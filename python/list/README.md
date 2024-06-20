# Python List Methods

Welcome to the repository showcasing examples of various Python List functions with explanations and outputs.

## Functions Covered

1. **`append`**
    - Appends an element to the end of the list.
    - **Example:**
      ```python
      my_list = [1, 2, 3]
      my_list.append(4)
      print(my_list)  # Output: [1, 2, 3, 4]
      ```

2. **`clear`**
    - Removes all elements from the list.
    - **Example:**
      ```python
      my_list = [1, 2, 3]
      my_list.clear()
      print(my_list)  # Output: []
      ```

3. **`copy`**
    - Returns a shallow copy of the list.
    - **Example:**
      ```python
      my_list = [1, 2, 3]
      new_list = my_list.copy()
      print(new_list)  # Output: [1, 2, 3]
      ```

4. **`count`**
    - Returns the number of occurrences of a specified element in the list.
    - **Example:**
      ```python
      my_list = [1, 2, 2, 3, 3, 3]
      count = my_list.count(3)
      print(count)  # Output: 3
      ```

5. **`extend`**
    - Extends the list by appending elements from an iterable.
    - **Example:**
      ```python
      my_list = [1, 2, 3]
      my_list.extend([4, 5])
      print(my_list)  # Output: [1, 2, 3, 4, 5]
      ```

6. **`index`**
    - Returns the lowest index of a specified value in the list.
    - **Example:**
      ```python
      my_list = [1, 2, 3, 4, 3]
      index = my_list.index(3)
      print(index)  # Output: 2
      ```

7. **`insert`**
    - Inserts an element at a specified position in the list.
    - **Example:**
      ```python
      my_list = [1, 2, 3]
      my_list.insert(1, 4)
      print(my_list)  # Output: [1, 4, 2, 3]
      ```

8. **`pop`**
    - Removes and returns the last element from the list.
    - **Example:**
      ```python
      my_list = [1, 2, 3, 4, 3]
      popped_element = my_list.pop()
      print(popped_element)  # Output: 3
      print(my_list)  # Output: [1, 2, 3, 4]
      ```

9. **`remove`**
    - Removes the first occurrence of a specified value from the list.
    - **Example:**
      ```python
      my_list = [1, 2, 3, 4, 3]
      my_list.remove(3)
      print(my_list)  # Output: [1, 2, 4, 3]
      ```

10. **`reverse`**
    - Reverses the elements of the list in place.
    - **Example:**
      ```python
      my_list = [1, 2, 3]
      my_list.reverse()
      print(my_list)  # Output: [3, 2, 1]
      ```

11. **`sort`**
    - Sorts the elements of the list in place.
    - **Example:**
      ```python
      my_list = [3, 1, 2]
      my_list.sort()
      print(my_list)  # Output: [1, 2, 3]
      ```

## Usage Notes
- These methods provide essential functionalities for adding, removing, modifying, and manipulating lists in Python.

## Additional Resources
- **Here Is the explanation of string function check the like below:**
https://docs.google.com/document/d/1wGfHLVg2e6TvZXSIs-7OVUOfNv0Dbtigtg25qpUALNo/edit?usp=sharing
- For more detailed information, refer to the [official Python documentation on lists](https://docs.python.org/3/tutorial/datastructures.html#more-on-lists).
