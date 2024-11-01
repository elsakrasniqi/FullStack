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

var arrowfunction = name => alert(`Hello` ${name});
arrowfunction("Ariana Rexhepi");

function firstname(){
    var localVar = "Ariana";
    alert(localVar);
}
firstname();
//alert(localVar); jashte funksionit nuk e njeh se o variabel lokale jashte funksionit

function seconds(minutes){
    return minutes*60;
}
seconds();
document.write(seconds(60));