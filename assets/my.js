$(document).ready(function(){
    $("#add_sister_concern").click(function(){
        $("#add_sister_form").show(500);
    });
    $("#close").click(function(){
        $("#add_sister_form").hide(500);
    });
});

$(document).ready(function(){
    $("#common").click(function(){
        $("#common_form").show(500);
    });
    $("#close").click(function(){
        $("#common_form").hide(500);
    });
});

//below code for tab open
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary"); 
    $(this).tab('show');  
});
});
