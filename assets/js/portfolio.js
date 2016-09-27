$(document).ready(function() {

    // responsive menu and arrow animation
    $(".responsive-menu").hide();
    $("#toparrow").hide();
    $("#middlearrow").hide();
    $("#bottomarrow").hide();
    $("#toparrow2").hide();
    $("#middlearrow2").hide();
    $("#bottomarrow2").hide();

    //toggles the responsive menu
    $("#menu-btn").click(function() {
        $(".responsive-menu").toggle();
    });

    //shows the breadcrumb trail of user nav
    $('#ul-header > div > li > a').click(function() {
        $('#ul-header > div > li > a').removeClass('active');
        $(this).addClass('active');
    });

    //reset all form fields to empty
    $("#reset").click(function(){
        var myNode = document.getElementsByClassName("form-control");
        for(var i = 0;i < myNode.length; i++){
            myNode[i].value = '';
        }
    });

});

//scrolling navbar
$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 1.5) {
        $("#toparrow").fadeIn(2000);
        $("#middlearrow").fadeIn(4000);
        $("#bottomarrow").fadeIn(7000);
    }
    if ($(window).scrollTop() > 900) {
        $("#toparrow2").fadeIn(2000);
        $("#middlearrow2").fadeIn(4000);
        $("#bottomarrow2").fadeIn(7000);
    }
});

//scrolling content
$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 2) {
        $('.content ul').hide();
    } else {
        $('.content ul').show();
    }
});

//Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-82133906-1', 'auto');
ga('send', 'pageview');
