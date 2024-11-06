var input = document.getElementById("input_id");
var button = document.getElementById("btn_id");
var text = document.getElementById("text_id");

button.onclick=function(){
    text.innerHTML = input.value
}

button.onclick = function(){
    if(input.value >10){
        text.innerHTML = "Input is greater than 10";
    } else if(input.value <10){
        text.innerHTML = "Input value is less than 10";
    }else{
        text.innerHTML = "Input value is equal to 10";
    }
}

var btn2 = document.getElementById("answer")
var input1 = document.getElementById("input1_id");
var input2 = document.getElementById("input2_id");
var answer = document.getElementById("text1");

btn2.addEventListener("click", function(){
    answer.innerHTML = parseInt(input1.value)+parseInt(input2.value);
})
