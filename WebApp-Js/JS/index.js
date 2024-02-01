
let fName = 'Harun';
let age = 19;
let isMale = true;
let other = undefined;
let selectedColors = ['red', 'blue'];
let index = 1;
selectedColors[2] = 'green';
console.log(selectedColors, selectedColors[index]);

let person = {
    fName: 'Harun',
    age: 19,
    isMale: true
};
person.fName = 'John';
let selection = 'age';
person[selection] = 21;

console.log(person);