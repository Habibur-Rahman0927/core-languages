# Python Set Methods

Welcome to the repository showcasing examples of various  Python sets, complete with examples and explanations.

## Methods Covered

1. **`add`**
    - Adds an element to the set.
    - **Example:**
      ```python
      my_set = {1, 2, 3}
      my_set.add(4)
      print(my_set)  # Output: {1, 2, 3, 4}
      ```

2. **`clear`**
    - Removes all elements from the set.
    - **Example:**
      ```python
      my_set = {1, 2, 3}
      my_set.clear()
      print(my_set)  # Output: set()
      ```

3. **`copy`**
    - Returns a shallow copy of the set.
    - **Example:**
      ```python
      my_set = {1, 2, 3}
      copied_set = my_set.copy()
      print(copied_set)  # Output: {1, 2, 3}
      ```

4. **`difference`**
    - Returns the difference between two sets as a new set.
    - **Example:**
      ```python
      set1 = {1, 2, 3, 4}
      set2 = {3, 4, 5, 6}
      diff = set1.difference(set2)
      print(diff)  # Output: {1, 2}
      ```

5. **`difference_update`**
    - Removes all elements of another set from this set.
    - **Example:**
      ```python
      set1 = {1, 2, 3, 4}
      set2 = {3, 4, 5, 6}
      set1.difference_update(set2)
      print(set1)  # Output: {1, 2}
      ```

6. **`discard`**
    - Removes an element from the set if it is present.
    - **Example:**
      ```python
      my_set = {1, 2, 3}
      my_set.discard(2)
      print(my_set)  # Output: {1, 3}
      ```

7. **`intersection`**
    - Returns the intersection of two sets as a new set.
    - **Example:**
      ```python
      set1 = {1, 2, 3}
      set2 = {2, 3, 4}
      intersection = set1.intersection(set2)
      print(intersection)  # Output: {2, 3}
      ```

8. **`intersection_update`**
    - Updates the set with the intersection of itself and another.
    - **Example:**
      ```python
      set1 = {1, 2, 3}
      set2 = {2, 3, 4}
      set1.intersection_update(set2)
      print(set1)  # Output: {2, 3}
      ```

9. **`isdisjoint`**
    - Returns True if two sets have no elements in common.
    - **Example:**
      ```python
      set1 = {1, 2}
      set2 = {3, 4}
      disjoint = set1.isdisjoint(set2)
      print(disjoint)  # Output: True
      ```

10. **`issubset`**
    - Returns True if another set contains this set.
    - **Example:**
      ```python
      set1 = {1, 2}
      set2 = {1, 2, 3, 4}
      subset = set1.issubset(set2)
      print(subset)  # Output: True
      ```

11. **`issuperset`**
    - Returns True if this set contains another set.
    - **Example:**
      ```python
      set1 = {1, 2, 3, 4}
      set2 = {1, 2}
      superset = set1.issuperset(set2)
      print(superset)  # Output: True
      ```

12. **`pop`**
    - Removes and returns an arbitrary element from the set.
    - **Example:**
      ```python
      my_set = {1, 2, 3}
      elem = my_set.pop()
      print(elem, my_set)  # Output: (e.g., 1, {2, 3})
      ```

13. **`remove`**
    - Removes the specified element from the set.
    - **Example:**
      ```python
      my_set = {1, 2, 3}
      my_set.remove(2)
      print(my_set)  # Output: {1, 3}
      ```

14. **`symmetric_difference`**
    - Returns the symmetric difference of two sets as a new set.
    - **Example:**
      ```python
      set1 = {1, 2, 3, 4}
      set2 = {3, 4, 5, 6}
      sym_diff = set1.symmetric_difference(set2)
      print(sym_diff)  # Output: {1, 2, 5, 6}
      ```

15. **`symmetric_difference_update`**
    - Updates the set with the symmetric difference of itself and another.
    - **Example:**
      ```python
      set1 = {1, 2, 3, 4}
      set2 = {3, 4, 5, 6}
      set1.symmetric_difference_update(set2)
      print(set1)  # Output: {1, 2, 5, 6}
      ```

16. **`union`**
    - Returns the union of sets as a new set.
    - **Example:**
      ```python
      set1 = {1, 2}
      set2 = {2, 3}
      union = set1.union(set2)
      print(union)  # Output: {1, 2, 3}
      ```

17. **`update`**
    - Updates the set with the union of itself and others.
    - **Example:**
      ```python
      set1 = {1, 2}
      set2 = {2, 3}
      set1.update(set2)
      print(set1)  # Output: {1, 2, 3}
      ```

## Usage Notes
- These methods provide essential functionalities for performing set operations in Python, such as adding elements, removing elements, and performing set operations like intersection and union.
- Sets in Python are mutable and unordered collections of unique elements, which makes these methods highly useful for data manipulation tasks.

## Additional Resources
- **Here Is the explanation of string methods check the like below:**
https://docs.google.com/document/d/1wGfHLVg2e6TvZXSIs-7OVUOfNv0Dbtigtg25qpUALNo/edit?usp=sharing
- For more detailed information, refer to the [official Python documentation on sets](https://docs.python.org/3/library/stdtypes.html#set-types-set-frozenset).
