$('#btn3').click(function(){
    $('.hidden').show('slow');
});

$('#btn4').click(function(){
    $('.hidden').hide();
});

$('#square').click(function(){
    $('#square').animate({
        'width':'200px',
        'height':'200px',
    })
    
})