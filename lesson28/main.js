// function printNames(){
//     document.write("Elsa" + "<br>");
//     setTimeout(function(){
//         document.write("Donika");
//     }, 3000);
//     document.write("Elton");
// }
// printNames();

var colors = ['red', 'green', 'blue', 'purple'];
function changeColor(){
    document.querySelector('body').style.background = 
    colors[Math.floor(Math.random()*colors.length)];
}
changeColor();

var names = ['Antigona', 'Grenti', 'Donika'];
function changeName(){
    document.querySelector('p').innerHTML = 
    names[Math.floor(Math.random()*names.length)];

}
setInterval(changeColor, 1000);
setInterval(changeName, 2000);