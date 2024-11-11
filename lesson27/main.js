// for(i=0; i<10; i++){
//     document.write(i + "<br>");
// }

// var car = {brand:"BMW", year:2020, color:"red"}; //objekti:ni koleksion i tdhanave, variabel me atribute
// var x;
// for(x in car){
//     document.write(car[x] + " " + "<br>" + "<br>");
// }
// var names = ['Ariana', 'Elsa', 'Leon'];
// var x;
// for(x of names){
//     document.write(x+"<br>");
// }

// var text = 'Ariana';
// var x;

// for (x of text){   //me e bo in text dalin indexat
//     document.write(x + "<br>");
// }

// let i=0;
// do{
//     i+=1;
//     document.write(i);
// }while(i<5);

// let x=0; //x=0 , x=1 , x=2
// let y=0; //y=0 , y=1 , y=3;
// while(x<3){
//     x++; //x=1 , x=2 , x=3
//     document.write(x+=y); // y=1+0=1;//y=2+1=3 // y=3+3=6
// }

// let names =['Elsa', 'Ariana', 'Donika'];
// //console.log("Length:" + names.length);
// names.push('Art');
// names.unshift('Elisa')
// for(i=0; i<names.length;i++){
//     document.write(names[i] + "<br>");
// }

var names = document.getElementbyId("name");
var save = document.getElementById("btn_id");
var show = document.getElementById("btn_id1");

  var Lista = [];
  save.addEventListener("click", function addElements(){
    Lista.push(names.value);
    console.log(Lista); 
  })
  
