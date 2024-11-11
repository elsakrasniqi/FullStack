// function printNames(){
//     document.write("Elsa" + "<br>");
//     setTimeout(function(){
//         document.write("Donika");
//     }, 3000);
//     document.write("Elton");
// }
// printNames();

// var colors = ['red', 'green', 'blue', 'purple'];
// function changeColor(){
//     document.querySelector('body').style.background = 
//     colors[Math.floor(Math.random()*colors.length)];
// }
// changeColor();

// var names = ['Antigona', 'Grenti', 'Donika'];
// function changeName(){
//     document.querySelector('p').innerHTML = 
//     names[Math.floor(Math.random()*names.length)];

// }
// setInterval(changeColor, 1000);
// setInterval(changeName, 2000);

var circle = document.getElementById("circle");
var showtime = document.getElementById("time");
var timeStart = new Date().getTime();

function showCircle(){
    circle.style.display = "block";
    circle.style.top = Math.random() * 500 + "px";
    circle.style.left = Math.random() * 900 + "px";
    circle.style.backgroundColor = randomColor();
    timeStart = new Date().getTime();
}
showCircle(); 
circle.onclick = function(){
    circle.style.display = "none";
    setTimeout(showCircle, 1000);
    var timeEnd = new Date().getTime();
    var time=(timeEnd - timeStart)/1000;
    showtime.innerHTML = time + 's';
}

function randomColor(){
    var s = '0123456789ABCDEF';
    var color = "#";

    for(i=0; i<6; i++){
        color = color + s[Math.floor(Math.random()*16)];
    }
    return color;
}