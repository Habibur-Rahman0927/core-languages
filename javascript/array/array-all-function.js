// 1. new Array : Creare a new array
// const newArray = new Array(3); // Creates an array with 3 empty slots
// console.log(newArray)

// ======================================

// 2. at(): Returns an indexed element of an array.

// const fruits = ["apple", "banana", "orange", "grape"];

// // Accessing elements using array indexing
// const firstFruit = fruits.at(0); // "apple"
// const thirdFruit = fruits[2]; // "orange"

// console.log(firstFruit); // Output: "apple"
// console.log(thirdFruit); // Output: "orange"

// ======================================

// 3. concat(): Joins arrays and returns a new array with the joined arrays.

// const arr1 = [1, 2];
// const arr2 = [3, 4];
// const arr3 = [5, 6];

// // Concatenating multiple arrays
// const newArr = arr1.concat(arr2, arr3); // Returns [1, 2, 3, 4, 5, 6]

// console.log(newArr); // Output: [1, 2, 3, 4, 5, 6]

// ======================================

// 4. copyWithin(): Copies array elements within the array, to and from specified positions.

const arr = [1, 2, 3, 4, 5];

// Copy elements from index 3 to the beginning of the array
arr.copyWithin(0, 3, 5);
console.log(arr); // Output: [4, 5, 3, 4, 5]

// Copy elements from index 1 to index 3
arr.copyWithin(3, 1, 3);
console.log(arr); // Output: [4, 5, 3, 2, 3]

// Copy elements from the end of the array to the beginning
arr.copyWithin(0, -2);
console.log(arr); // Output: [4, 5, 3, 4, 5]

// Copy elements in reverse order
arr.copyWithin(0, -5, -3);
console.log(arr); // Output: [3, 4, 3, 4, 5]

// Copy elements with overlapping ranges
arr.copyWithin(1, 0, 3);
console.log(arr); // Output: [3, 1, 2, 3, 5]
