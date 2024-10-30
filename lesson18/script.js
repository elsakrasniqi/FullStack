function showMessage(){
    alert("This is inside a function")
}

function shuma(nr1, nr2){
    return nr1+nr2;
}
console.log(shuma(4,5))

// function FtoCelsius(celsius){
//     return 5/9*(f-32)
// }
// let f=100;
// let celsius=FtoCelsius(celsius);
// console.log()

function toCelsius(f){
    return (5/9)*(f-32)
}
console.log(toCelsius(100));

var arrowFunction=()=>alert("Hello World");
// arrowFunction();

var pershendetje = emri => alert(`Miredita ${emri}`);
pershendetje("Elsa")

function dsFunction(){
    var localVar="Dgital School"
    console.log(localVar)
} 
dsFunction();
alert(localVar);


