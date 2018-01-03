$('#disp-all').click(function(){
    $('#zaif').show();
    $('#coincheck').show();
});

$('#disp-zaif').click(function(){
    $('#zaif').show();
    $('#coincheck').hide();
});

$('#disp-cc').click(function(){
    $('#zaif').hide();
    $('#coincheck').show();
});
