$(document).ready(function(){

    $("#open_msgbox").click(function(){
        $("#msgbox1").fadeIn(3000);
        return false;
    });

    $("#close_msgbox").click(function(){
        $("#msgbox1").fadeOut("slow");
        return false;
    });

});

