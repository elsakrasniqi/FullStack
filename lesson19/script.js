function showMessage(){
    alert("This message is inside a function");
}
showMessage();

function sum(x,y){
    return x+y;
}
document.write(sum(20,5));

// var arrowfunction = () => alert("Hello World");
// arrowfunction();

var arrowfunction = name => alert(`Hello ${name}`);
arrowfunction("Elsa Krasniqi");

function firstname(){
    var localVar = "Elsa";
    alert(localVar);
}
firstname();
//alert(localVar); jashte funksionit nuk e njeh, se o variabel lokale jashte funksionit

function seconds(minutes){
    return minutes*60;
}
seconds();
document.write(seconds(60));

// objektet

var car = {
    name:"Mercedes", 
    color:"red", 
    year:2020, 
    kilometers:0,
    startEngine: function(){
        alert("Vroom!")
    },
    get getKilometers(){
        return this.kilometers;
    },
    set setKilometers(km){
        this.kilometers = km;
    }
};

console.log(car.getKilometers);
car.setKilometers = 100;
console.log(car.getKilometers);

document.write(car.name + "<br>" + car.color + "<br>" + car.year + "<br>" + car.kilometers)
alert(car[`color`]);
car.startEngine();

var computer= new Object();
computer.name = "Lenovo";
computer.CPU ="Intel core i7";
computer.RAM = "32GB";
computer.GPU = "GeForce GT730 2GB Dual DP HP";

computer.type=function(){
    return this.name + ", " + this.CPU + ", " + this.RAM  + ", " + this.GPU;
}
delete computer.GPU;
document.write("<br>" + computer.type());

function Computer(name, CPU, RAM, GPU){
    this.name = name;
    this.CPU = CPU;
    this.RAM = RAM;
    this.GPU = GPU;
}

var Computer1 = new Computer("Macbook Pro", "M1 Chip", "8GB", "5600M GPU");
var Computer2 = new Computer("HP", "Intel i3 Core", "4GB", "Integrated");
console.log("Computer 1: "+ Computer1);
console.log("Computer 2: "+ Computer2);
document.write(" <br> Computer 1:" + Computer1.name + ","+ Computer1.CPU + ","+ Computer1.RAM +","+ Computer1.GPU);
document.write(" <br> Computer 2:" + Computer2.name + ","+ Computer2.CPU + ","+ Computer2.RAM +","+ Computer2.GPU);