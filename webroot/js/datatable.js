$(function(){
    $('.previous > a').text('text');
})

// 表示する文字数を制御
$(".abbr").each(function(){
    var txt = $(this).text();
    if(txt.length > 30){
        txt = txt.substr(0, 30);
        $(this).text(txt + "･･･");
    }
});
