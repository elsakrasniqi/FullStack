//js
//document.getElementById("myElement").style.display = "none";

//jQuery
$('myElement').hide();
// same as jQuery('myElement').hide();
// $('#myElement').text("New Text"); //manipulate with html
$('.btn').click(function(){
    //alert("clicked");
    console.log($('#myElement').text());

    $('#myElement').text('Testing text');
    $('#myElement').append('<br> Extra text');
});