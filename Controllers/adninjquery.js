$(document).ready(function(){
    $("#load").on("click",function(e){
       $("#main").show();
   $.ajax({  
       url:"userdata.php",
       type:"POST",
       success:function(data){
       $("#main").html(data);
}
});
});
});

$(document).ready(function(){
    $("#dashboard").on("click",function(e){
       $("#main").hide();

});
});

$(document).ready(function(){
    $("#packege").on("click",function(e){
       $("#main").show();
   $.ajax({  
       url:"Packegedata.php",
       type:"POST",
       success:function(data){
       $("#main").html(data);
}
});
});
});