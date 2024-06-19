# text = "hello World"
# print(text.capitalize())  # Output: "Hello world"

# text = "Groß"
# print(text.casefold())  # Output: "gross"

# text = "hello"
# print(text.center(10, '*'))  # Output: "**hello***"

# text = "banana"
# print(text.count("a"))  # Output: 3

# text = "hello"
# print(text.encode())  # Output: b'hello'

# text = "hello world"
# print(text.endswith("world"))  # Output: True

# text = "01\t012\t0123\t01234"
# print(text.expandtabs(4))  # Output: "01  012 0123    01234"

# text = "hello world"
# print(text.find("world"))  # Output: 6

# text = "The sum of 1 + 2 is {0}"
# print(text.format(1 + 2))  # Output: "The sum of 1 + 2 is 3"

# class Default(dict):
#     def __missing__(self, key):
#         return key

# text = "{name} was born in {country}"
# print(text.format_map(Default(name='Guido')))  # Output: "Guido was born in country"

# text = "hello world"
# print(text.index("world"))  # Output: 6

# text = "hello123"
# print(text.isalnum())  # Output: True

# text = "hello"
# print(text.isalpha())  # Output: True

# text = "hello"
# print(text.isascii())  # Output: True

# text = "123"
# print(text.isdecimal())  # Output: True

# text = "123"
# print(text.isdigit())  # Output: True

# text = "variable_name"
# print(text.isidentifier())  # Output: True

# text = "hello123"
# print(text.islower())  # Output: True

# text = "123"
# print(text.isnumeric())  # Output: True

# text = "hello"
# print(text.isprintable())  # Output: True

# text = "   "
# print(text.isspace())  # Output: True

# text = "HELLO"
# print(text.isupper())  # Output: True

# text = "-"
# sequence = ["a", "b", "c"]
# print(text.join(sequence))  # Output: "a-b-c"

# text = "hello"
# print(text.ljust(10, '-'))  # Output: "hello-----"

# text = "Hello World232"
# print(text.lower())  # Output: "hello world"

# text = "--Hello World--"
# print(text.lstrip('-'))  # Output: "Hello World--"
# text = "   hello   "
# print(text.lstrip())  # Output: "hello   "

# intab = "aeiou"
# outtab = "12345"
# trantab = str.maketrans(intab, outtab)
# print("this is string example....wow!!!".translate(trantab))  # Output: "th3s 3s str3ng 2x1mpl2....w4w!!!"

# text = "hello world"
# print(text.partition(" "))  # Output: ('hello', ' ', 'world')

# text = "TestHook"
# print(text.removeprefix("Test"))  # Output: "Hook"

