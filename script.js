$(document).ready(function(){
    
  $('#contactform').on('submit',function(e) {

    $.ajax({
      url:'action.php',
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        console.log(data);
        $(".success").show().fadeOut(5000);
      },
      error:function(data){ $(".error").show().fadeOut(5000); }
      });
    e.preventDefault();
  });
  
});