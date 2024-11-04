var button1 = document.getElementById("btn1");
var button2 = document.getElementById("btn2");
var button3 = document.getElementById("btn3");

button1.onclick = function(){
    alert("Hello World");
}

//var button1 = document.querySelector("button"); //pjesen e pare tbutonit so vec btn1
//button1.onclick = function(){
//    alert("Hello World");
//}
// button1.addEventListener('click', function(){  //2 parametra, eventi kur we want it to happen, edhe cka me ndodh when it does
//    alert("Hello Again");
//})
button2.onmouseleave = function(){
    alert("Mouse Leave");
}
button3.onmouseover = function(){
    alert("Mouse Over");
}

var v_button = document.getElementById("btn1");

var v_text = document.getElementById("mytxt1"); //ose me queryselector

v_button.onclick = function(){
    v_text.style.color = "red";
    v_text.style.backgroundColor = "lightgrey";
    v_text.style.alignItems = "center";
    v_text.style.fontSize = "100px";
    v_text.style.padding = "20px";
}

//mouse over css
v_text.onmouseover = function(){
    v_text.style.cssText = "color:red; background-color:lightgrey; align-items:center; font-size:100px; padding:20px";
}

v_button.onclick = function(){
    v_text.setAttribute("id", "txt1");
}