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
       $("#main").show();
   $.ajax({  
       url:"dashboard.php",
       type:"POST",
       success:function(data){
       $("#main").html(data);
}
});
});
});
$(document).ready(function(){
    $("#addpackege").on("click",function(e){
       $("#main").show();
   $.ajax({  
       url:"addpackege.php",
       type:"POST",
       success:function(data){
       $("#main").html(data);
}
});
});
});


$(document).ready(function(){
    $("#packege").on("click",function(e){
       $("#main").show();
   $.ajax({  
       url:"packegecontainer.php",
       type:"POST",
       success:function(data){
       $("#main").html(data);
}
});
});
});
$(document).ready(function(){
    $("#profile").on("click",function(e){
       $("#main").show();
   $.ajax({  
       url:"userprofile.php",
       type:"POST",
       success:function(data){
       $("#main").html(data);
}
});
});
});





