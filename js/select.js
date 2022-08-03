$(function(){
    $("#location").change(function(){
        var displaycourse=$("#location option:selected").text();
        $("#loco").val(displaycourse);
    })
})