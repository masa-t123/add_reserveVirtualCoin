$('#disp-all').click(function(){
    $('#zaif').show(200);
    $('#coincheck').show(200);
    $('#bitflyer').show(200);
});

$('#disp-zaif').click(function(){
    $('#zaif').show(200);
    $('#coincheck').hide(200);
    $('#bitflyer').hide(200);
});

$('#disp-cc').click(function(){
    $('#zaif').hide(200);
    $('#coincheck').show(200);
    $('#bitflyer').hide(200);
});

$('#disp-bf').click(function(){
    $('#zaif').hide(200);
    $('#coincheck').hide(200);
    $('#bitflyer').show(200);
});
