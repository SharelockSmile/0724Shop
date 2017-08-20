$(function () {

    $(".firstli>span").click(function () {
        alert("111");
        var ul = $(this).next("ul");
        if(ul.css("display")=="none"){
            ul.css("display","block");
        }else{
            ul.css("display","none");
        }
    });
})