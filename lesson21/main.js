var programmingLanguages = ['javaScript', 'Python', 'PHP'];

programmingLanguages.push('Java');
programmingLanguages.pop(); //only works with last element, no idexes

//shift me hek, unshift me shtu
programmingLanguages.unshift('c#');
programmingLanguages.shift();
programmingLanguages.splice(1, 0, 'Ruby');
//1- me shtu
programmingLanguages.splice(0, 1, 'Java'); //npoziten 0, spo hekim o e shtojme java


console.log(programmingLanguages);
console.log(programmingLanguages[1]);
document.write(programmingLanguages);

console.log(Math.floor(Math.random()*5)); //dalin nr m e , dhjetore
//floor e hek

//array deconstucting
var students=["ariana", "elsa"];
var[s1, s2] = students;
console.log(students);
console.log(students[1]);
console.log(s1);
console.log(s2);

var places =["london", "paris", "riga","new york"];
var [firstPlace, , secondPlace]=places;
console.log(firstPlace);
console.log(secondPlace);

var numbers = [1,2,3,4,5,6];
var[firstNumber, secondnumber,...otherNumbers]=numbers
console.log(firstNumber);
console.log(secondNumber);
console.log(otherNumbers);

