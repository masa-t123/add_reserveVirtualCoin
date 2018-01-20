$('#disp-all').click(function(){
    $('#zaif').show(200);
    $('#coincheck').show(200);
    $('#bitflyer').show(200);
    $('#binance').show(200);
});

$('#disp-zaif').click(function(){
    $('#zaif').show(200);
    $('#coincheck').hide(200);
    $('#bitflyer').hide(200);
    $('#binance').hide(200);
});

$('#disp-cc').click(function(){
    $('#zaif').hide(200);
    $('#coincheck').show(200);
    $('#bitflyer').hide(200);
    $('#binance').hide(200);
});

$('#disp-bf').click(function(){
    $('#zaif').hide(200);
    $('#coincheck').hide(200);
    $('#bitflyer').show(200);
    $('#binance').hide(200);
});

$('#disp-binance').click(function(){
    $('#zaif').hide(200);
    $('#coincheck').hide(200);
    $('#bitflyer').hide(200);
    $('#binance').show(200);
});

$("#zaif-table,#coincheck-table,#bitflyer-table,#binance-table").DataTable({
    // 件数切替機能：無効
    lengthChange: false,
    // 検索機能：無効
    searching: false,
    // ソート機能：有効
    ordering: true,
    // 情報表示：無効
    info: false,
    // ページング機能：無効
    paging: false
});

jQuery(function($){
    $("#zaif-table").DataTable();
    $("#coincheck-table").DataTable();
    $("#bitflyer-table").DataTable();
    $("#binance-table").DataTable();
});