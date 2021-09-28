$(document).ready(function(){
    // $('.曰')();
})
$('.chooserImg .charac').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    let imgSrc = $(this).find('img').attr('src');
    $('#imgSrc').attr('src',imgSrc)
})
$('.menu .choose').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    if($(this).attr('id') == "kiri"){
        $('.menu').removeClass('right').addClass('left');
        $('.selectBox').load('view/evo.php');
    }else{
        $('.menu').removeClass('left').addClass('right');
        $('.selectBox').load('view/old.php');
    }
})