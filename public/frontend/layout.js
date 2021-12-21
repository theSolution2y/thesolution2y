$(document).ready(function(){
    $('.right_slide').hide();
    $('.up_slide').hide();
    $('#ham_close').hide();
        
    $("#hamburger").click(function(){
      $('#hamburger').hide();
      $('.right_slide').show();
      $('.up_slide').show();    
      $('#ham_close').show();
    });
    $('#ham_close').click(function(){
      $('#hamburger').show();
      $('.right_slide').hide();
      $('.up_slide').hide();    
      $('#ham_close').hide();
    });
  });