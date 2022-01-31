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
    
    window.addEventListener('mouseup',function(event){
      if(event.target != ( $('.right_slide') || $('.up_slide'))  ){
        $('#hamburger').show();
        $('.right_slide').hide();
        $('.up_slide').hide();    
        $('#ham_close').hide();
      }
    });

    $('.backgroundcolors').hide();

    $("#choose_color").click(function(){
      $('.backgroundcolors').toggle( () => {
        $('#blue').click(function(){
          $("#bgColor").css("background-image", "url('https://cdn.wallpapersafari.com/31/15/OabKeU.png')");
        });
        $('#red').click(function(){
          $("#bgColor").css("background-image", "url('https://tse3.mm.bing.net/th?id=OIP.cuylJXu5BDBt8X4i27dcuAHaNK&pid=Api&P=0&w=99&h=177')");
        });
        $('#purple').click(function(){
          $("#bgColor").css("background-image", "url('https://tse1.mm.bing.net/th?id=OIP.fOsqn35KyDISCZWHy3DrxwHaHa&pid=Api&P=0&w=178&h=178')");
        });
        $('#yellow').click(function(){
          $("#bgColor").css("background-image", "url('https://tse2.mm.bing.net/th?id=OIP.ywRjH1Xtf6cvL-eqnEEsXAHaEJ&pid=Api&P=0&w=293&h=164')");
        });
        $('#orange').click(function(){
          $("#bgColor").css("background-image", "url('https://tse4.mm.bing.net/th?id=OIP.hiET06a_-LseOp989PrbwQHaEo&pid=Api&P=0&w=266&h=166')");
        });
        $('#green').click(function(){
          $("#bgColor").css("background-image", "url('http://getwallpapers.com/wallpaper/full/4/b/9/248705.jpg')");
        });
        $('#black').click(function(){
          $("#bgColor").css("background-image", "url('https://tse1.mm.bing.net/th?id=OIP.IMyviEUXOYeAjGE0qiHOGgHaEc&pid=Api&P=0&w=285&h=171')");
        });
        $('#default').click(function(){
          $("#bgColor").css("background-image", "url('https://res.cloudinary.com/practicaldev/image/fetch/s--_MCEk7P6--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/i/vm957e5dm3hxnwc94dd7.jpg')");
        });
      });
    });
  });