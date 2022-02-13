$(document).ready(function(){
    $("body").mouseleave(function(){
        $("#myPopup").show();
    });
    $(".close").click(function(){
         $("#myPopup").hide();

    });
})