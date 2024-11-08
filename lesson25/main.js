//detyra e pare
var sum=0;

for(x = 15; x<=47; x++){
    sum=sum+i;
}
console.log(sum);

//detyra e dyte
var array=[5,10,15,20,25];
var total = 0;
for (j=0; j<array.length;j++){
    total+=array[j];
}
console.log(total);

//menyre tjeter per detyren e dyte
// for(j of array){  ose (j in array) = shfaq indexat jo vlerat
//     total+=j; 
// }
// console.log(total);

var emri = document.getElementbyId("name");
var save = document.getElementById("btn_id");
  var Lista = [];
  save.addEventListener("click", function addElements(){
    Lista.push(emri.value);
    console.log(Lista); 
  })
  