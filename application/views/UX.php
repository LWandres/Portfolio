<!-- in progress base page for UX/UI casestudy -->

<!DOCTYPE html>
<html>
<head>
    <title>UX/UI Case Studies</title>
    <link rel="icon" href="/assets/images/logo.png" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Web Developer Portfolio Website">
    <meta name="keywords" content="Laura Wandres,Laura Wandres Portfolio,Web Developer,HTML5,CSS3,JavaScript,Full Stack Developer,San Francisco">
    <meta name="author" content="Laura Wandres">
    <!-- stylesheets -->
    <link href="/assets/css/UXstyle.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="/assets/css/component.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />
    <link rel="shortcut icon" href="../favicon.ico">

    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <!-- js -->
    <script src="https://use.fontawesome.com/3f39a6e8d2.js"></script>
    <script src="/assets/js/jquery-3.1.0.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


    <script>
        $(document).ready(function() {
            // responsive menu jquery
            $(".responsive-menu").hide();
            $('ul.tabs').tabs();
            $('ul.tabs').tabs('select_tab', 'tab_id');
            $("#menu-btn").click(function() {
                $(".responsive-menu").toggle();
            });
        });

        //scrolling navbar
        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > 1.5) {
                $('.header').addClass('fixednav');
            }

        });

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

    </script>
</head>
<body>
    <!---Top navigation bar begins -->
    <header class="header nav">
            <ul id="ul-header">
                <li><a href="/main/home/#nav1">LAURA WANDRES</a></li>
                <div class="right-header">
                    <li><a href="/main/home/#nav2">ABOUT</a></li>
                    <li><a href="/main/home/#nav3">PORTFOLIO</a></li>
                    <li class="gmail tilt"><a href="//mail.google.com/mail/?view=cm&fs=1&tf=1&to=lew4f08@gmail.com&body=Thanks for reaching out! Looking forward to meeting you." title="Gmail Me" target="_top"></a></li>
                    <li class="linkedin tilt "><a href="//www.linkedin.com/in/laura-wandres-18914115" title="Connect on Linkedin" target="_top"><span> </span></a></li>
                    <li class="github tilt"><a href="//github.com/LWandres" title="GitHub" target="_top"><span></span></a></li>
                </div>
            </ul>
    </header>

    <!-- responsive menu button -->
    <div id="mobile-nav">
        <button id="menu-btn" height="200px">
            <div class="menu-btn fixed">
                <div></div>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <div id="resp-menu" class="responsive-menu">
            <ul>
                <li><a href="#nav1">LAURA WANDRES</a></li>
                <li><a href="#nav2">ABOUT</a></li>
                <li><a href="#nav3">PORTFOLIO</a></li>
                <li><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=lew4f08@gmail.com&body=Thanks for reaching out! Looking forward to meeting you." title="Gmail Me" target="_top">GMAIL</a></li>
                <li class="linkedin"><a href="https://www.linkedin.com/in/laura-wandres-18914115" title="Connect on Linkedin" target="_top">LINKEDIN</a></li>
                <li class="github"><a href="https://github.com/LWandres" title="GitHub" target="_top">GITHUB</a></li>
            </ul>
        </div>
    </div>
    <!-- end of responsive menu -->
    <!---Top navigation bar ends -->
    <div id="container">
    <section id="main">
        <div class="col-md-6" id="UX">
            <h2>This page is in progress.</h2>
            <h1>let's chat UX/UI. <h1>
            <h2>good <span class="seagreen">design</span> = happy people</h2>
            <a href="#nav1"><button id="casestudy" class="gold">see process</button></a>
            <a href="#nav2"><button id="casestudy">see case studies</button></a>
        </div>

        <img class="col-md-6" src="/assets/images/design.jpg"><br>
        <br class="clear">

        <div id="nav1">
            <img id="cogwheel" class="col-md-2" src="/assets/images/cogwheel.png"><br>
            <h4 class="col-md-12 block">THE PROCESS</h4>
            <ul>
                <li><img src="/assets/images/1.png" class="list"></li><br>
                <li><img src="/assets/images/1.png" class="list"></li><br>
                <li><img src="/assets/images/1.png" class="list"></li><br>
                <li><img src="/assets/images/1.png" class="list"></li><br>
                <li><img src="/assets/images/1.png" class="list"></li><br>
            </ul>

        </div>
        <!-- main container begins-->
        <!-- About me -->
        <article class="article" id="nav2"><br><br>
            <h4 class="col-md-12 block">CASE STUDIES</h4>
            <div class="row">
               <div class="col s12">
                 <ul class="tabs">
                   <li class="tab col s3"><a href="#test1">PROJECT MANAGED</a></li>
                   <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
                   <li class="tab col s3"><a href="#test3">Disabled Tab</a></li>
                   <li class="tab col s3"><a href="#test4">Test 4</a></li>
                 </ul>
               </div>
               <div id="test1" class="col s12">Test 1</div>
               <div id="test2" class="col s12">Test 2</div>
               <div id="test3" class="col s12">Test 3</div>
               <div id="test4" class="col s12">Test 4</div>
           </div>
        </article>


        <article class="article col-md-12" id="nav2"><br><br><br>
        </article>

        <article class="article col-md-12" id="nav3"><br><br>
        </article>
    </div>

</body>
</html>
