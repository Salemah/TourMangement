$(document).ready(function(){
    $("#adduser").on("click",function(e){
       $("#main").show();
   $.ajax({  
       url:"adminadduser.php",
       type:"POST",
       success:function(data){
       $("#main").html(data);
}
});
});
});