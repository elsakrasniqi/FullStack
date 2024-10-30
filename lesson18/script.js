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

function SyprinaTrekendeshit(baza, lartesia){
    return 0.5 * baza * lartesia
}
console.log(SyprinaTrekendeshit(2,5));

var makina={
    emri:"BMW",
    color:"Red",
    year:2020,
    startEngine: function(){
        alert("Vroom!")
    },
    get getColor(){
        return this.color;
    },
    set setColor(newColor){
        this.color=newColor
    }
}

console.log(makina['emri'])
console.log(makina.emri)
makina.startEngine()

var computer = new Object();
computer.name="Lenovo"
computer.CPU="Intel Core i7"
computer.RAM="16GB"

computer.type=()=>{
    console.log("Start PC")
}


computer.type()
makina.setColor="Blue"
console.log (makina.getColor)