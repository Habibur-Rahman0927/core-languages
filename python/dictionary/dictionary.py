# my_dict = {'a': 1, 'b': 2, 'c': 3}
# my_dict.clear()
# print(my_dict)  # Output: {}

# my_dict = {'a': 1, 'b': 2, 'c': 3}
# copied_dict = my_dict.copy()
# print(copied_dict)  # Output: {'a': 1, 'b': 2, 'c': 3}

# keys = [1, 2, 3]
# new_dict = dict.fromkeys(keys, 100)
# print(new_dict)  # Output: {1: 100, 2: 100, 3: 100}

# my_dict = {'a': 1, 'b': 2, 'c': 3}
# value = my_dict.get('b', 0)
# print(value)  # Output: 2

# my_dict = {'a': 1, 'b': 2, 'c': 3}
# items = my_dict.items()
# print(items)  # Output: dict_items([('a', 1), ('b', 2), ('c', 3)])

# my_dict = {'a': 1, 'b': 2, 'c': 3}
# keys = my_dict.keys()
# print(keys)  # Output: dict_keys(['a', 'b', 'c'])

# my_dict = {'a': 1, 'b': 2, 'c': 3}
# value = my_dict.pop('b', 0)
# print(value)  # Output: 2
# print(my_dict)  # Output: {'a': 1, 'c': 3}

# my_dict = {'a': 1, 'b': 2, 'c': 3}
# item = my_dict.popitem()
# print(item)  # Output: ('c', 3)
# print(my_dict)  # Output: {'a': 1, 'b': 2}

# my_dict = {'a': 1, 'b': 2}
# value = my_dict.setdefault('c', 3)
# print(value)  # Output: 3
# print(my_dict)  # Output: {'a': 1, 'b': 2, 'c': 3}
# value = my_dict.setdefault('b', 0)
# print(value)  # Output: 2 (already existed, so returns existing value)

# my_dict = {'a': 1, 'b': 2}
# my_dict.update({'c': 3, 'd': 4})
# print(my_dict)  # Output: {'a': 1, 'b': 2, 'c': 3, 'd': 4}

# my_dict = {'a': 1, 'b': 2, 'c': 3}
# vals = my_dict.values()
# print(vals)  # Output: dict_values([1, 2, 3])
