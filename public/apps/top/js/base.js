function Check(){
    $(":checkbox").each(function(){
        if(this.checked) {
            $(this).parent().addClass("w3-opacity").css("text-decoration","line-through");        
        }
        else {
            $(this).parent().removeClass("w3-opacity").css("text-decoration","none");
        }
    });
}

$(document).ready(function(){
    Check();
    $(":checkbox").click(function(){
        Check();
        if($(":checked").length === $(":checkbox").length){
            $(".w3-btn").addClass("w3-show");
        }
        else {
            if ($(".w3-btn").hasClass("w3-show")) $(".w3-btn").removeClass("w3-show") ;
        }
    });
});