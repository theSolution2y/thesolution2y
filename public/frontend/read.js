$(document).ready(function () {
    // fullscreen and exit fullscreen mode 
    $('#compress').hide();
    $("#expand").click(function () {
        $('#expand').hide();
        $('#compress').show();
        $('.leftSide').hide();
        $('.Cont').css({ margin: "0" });
        $('.pdfCont').css({ width: "100vw" });
        $('header').css({ position: "absolute", top: "0", left: "0", width: "100vw" });
        req = $('.pdfCont').requestFullScreen || $('.pdfCont').webkitRequestFullScreen || $('.pdfCont').mozRequestFullScreen;
        req.call($('.pdfCont'));
    });
    $('#compress').click(function () {
        $('#compress').hide();
        $('#expand').show();
        $('.leftSide').show();
        $('.Cont').css({ marginTop: "5rem" });
        $('.pdfCont').css({ position: "relative", zIndex: "1000" });
        $('header').css({ position: "relative", width: "100%" });
        req = $('.pdfCont').exitFullScreen || $('.pdfCont').webkitExitFullScreen || $('.pdfCont').mozExitFullScreen;
        req.call($('.pdfCont'));
    });
    // dark and light mode 
    $('.fa-moon').click(function(){
        $('.fa-sun').css({color: "white"});
        $('.fa-moon').css({color:"rgb(24, 148, 197)"})
        $('.pdfCont').css({backgroundColor: "rgba(17, 25, 40, 0.75)"});
    })
    $('.fa-sun').click(function(){
        $('.fa-moon').css({color:"white"})
        $('.fa-sun').css({color:"rgba(255, 255, 255, 0.75)"})
        $('.pdfCont').css({backgroundColor:"white"});
    })
});


