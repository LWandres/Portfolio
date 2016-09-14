<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>
    <link rel="icon" href="/assets/images/logo.png" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- stylesheets -->
    <link href="/assets/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="/assets/css/component.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />
    <link rel="shortcut icon" href="../favicon.ico">

    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
    <!-- js -->
    <script src="https://use.fontawesome.com/3f39a6e8d2.js"></script>
    <script src="/assets/js/jquery-3.1.0.min.js"></script>
    <script src="/assets/js/modernizr.custom.js"></script>
    <script src="/assets/js/draggabilly.pkgd.min.js"></script>
    <script src="/assets/js/elastiStack.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // responsive menu jquery
            $(".responsive-menu").hide();
            $("#toparrow").hide();
            $("#middlearrow").hide();
            $("#bottomarrow").hide();
            $("#toparrow2").hide();
            $("#middlearrow2").hide();
            $("#bottomarrow2").hide();

            $("#menu-btn").click(function() {
                $(".responsive-menu").toggle();
            });
        });

        //scrolling navbar
        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > 1.5) {
                $('.header').addClass('fixednav');
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
        <nav>
            <ul id="ul-header">
                <li><a href="#nav1">LAURA WANDRES</a></li>
                <div class="right-header">
                    <li><a href="#nav2">ABOUT</a></li>
                    <li><a href="#nav3">PORTFOLIO</a></li>
                    <li class="gmail tilt"><a href="//mail.google.com/mail/?view=cm&fs=1&tf=1&to=lew4f08@gmail.com&body=Thanks for reaching out! Looking forward to meeting you." title="Gmail Me" target="_top"></a></li>
                    <li class="linkedin tilt "><a href="//www.linkedin.com/in/laura-wandres-18914115" title="Connect on Linkedin" target="_top"><span> </span></a></li>
                    <li class="github tilt"><a href="//github.com/LWandres" title="GitHub" target="_top"><span></span></a></li>
                </div>
            </ul>
        </nav>
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

    <section id="main">
        <!-- main container begins-->
        <!-- About me -->
        <article class="article" id="nav1"><br><br>
            <div id="content" class="col-md-12">
                <div id="right-top">
                    <p><span id="greeting">Hi there!</span>
                        <br> I'm a full stack web developer and project manager (PMP)
                        <br> in the Greater San Francisco Area.
                        <div class='visible content'>
                            <p>I specialize in:</p>
                            <ul>
                                <li>JavaScript</li>
                                <li>PHP </li>
                                <li>Swift/iOS</li>
                                <li>AngularJS</li>
                                <li>HTML5/CSS3</li>
                                <li>Project Management</li>
                                <li>Responsive Design</li>
                                <li>APIs</li>
                            </ul>
                        </div>
                </div>
                <img src="/assets/images/profileimage.png" class="profileimage" alt="profileimage.png">
            </div>

        </article>
        <div id="firstarrows" class="col-md-12">
            <div id="toparrow" class="arrow"><img src="/assets/images/toparrow.png" width="100px"></div>
            <div id="middlearrow" class="arrow"><img src="/assets/images/middlearrow.png" width="100px"></div>
            <div id="bottomarrow" class="arrow"><img src="/assets/images/bottomarrow.png" width="100px"></div>
        </div><br><br><br>

        <!-- About PhotoSlides -->
        <article class="article col-md-12" id="nav2"><br><br><br>

            <ul id="elasticstack" class="elasticstack">
                <li><img src="/assets/images/About.png" alt="02"/><h5>Nice to meet you!</h5></li>
                <li><img src="/assets/images/goldengate.jpg" alt="03"/><h5>This is home. The view doesn't get old :) </h5></li>
                <li><img src="/assets/images/mobile.png" alt="04" /><h5>I code web and mobile applications</h5></li>
                <li><img src="/assets/images/UX.png" alt="04"/><h5> & enjoy designing experiences users will <i class="fa fa-heart-o pink" aria-hidden="true">.</i></h5></li>
                <li><img src="/assets/images/realms.png" alt="06" /><h5>I've worked in non-profit & for-profit realms</h5></li>
                <li><img src="/assets/images/technical.png" alt="06" /><h5>in technical & non-tech roles...</h5></li>
                <li><img src="/assets/images/impact.png" alt="05" /><h5>and am looking to "do good" with my code.</h5></li>
                <li><img src="/assets/images/brain.png" alt="05" /><h5>I'm a creative problem solver</h5></li>
                <li><img src="/assets/images/trust.png" alt="05" /><h5>who builds strong relationships & trust</h5></li>
                <li><img src="/assets/images/dive.png" alt="05" /><h5>and learns quickly to jump right in.</h5></li>
                <li><img src="/assets/images/activities.png" alt="06" /><h5>In my spare time I enjoy...</h5></li>
                <li>
                    <div id="contactpic">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=lew4f08@gmail.com&body=Thanks for reaching out! Looking forward to meeting you." title="Gmail Me" target="_top">
                            <button id="gmail">GMAIL ME</button>
                        </a>
                        <a href="https://www.linkedin.com/in/laura-wandres-18914115" title="Connect on Linkedin" target="_top">
                            <button id="linkedin">CONNECT ON LINKEDIN</button>
                        </a>
                    </div>
                    <h5 class="contacth5">and meeting new people like you! :)</h5></li>
            </ul>
        </article>
        <!-- End About PhotoSlides-->
        <div id="secondarrows" class="col-md-12">
            <div id="toparrow2" class="arrow2"><img src="/assets/images/toparrow.png" width="100px"></div>
            <div id="middlearrow2" class="arrow2"><img src="/assets/images/middlearrow.png" width="100px"></div>
            <div id="bottomarrow2" class="arrow2"><img src="/assets/images/bottomarrow.png" width="100px"></div>
        </div>

        <article class="article col-md-12" id="nav3"><br><br>
            <h1>recent projects</h1>

            <div id="portfolio-container">
                <div id="grid1" class="grid"><!-- first row of boxes begins -->

                    <figure class="effect-milo PM">
                        <img src="/assets/images/pm.jpeg" alt="img11" />
                        <figcaption>
                            <h2>Project <span>Managed</span></h2>
                            <p>A PHP web-based agenda & meeting manager<br><br>
                            <span class="uses"> Uses: PHP, SQL,jQuery,APIs</p></span>
                            <a data-toggle="modal" data-target="#PMModal" href=""></a>
                        </figcaption>
                    </figure>

                    <figure class="effect-milo L4A">
                        <img src="/assets/images/letters4animals.jpeg" alt="img03" />
                        <figcaption>
                            <h2>Letters <span>4Animals</span></h2>
                            <p>Promotes civic engagement through automatic letter creation<br><br>
                             <span class="uses"> Uses:Angular,<br>Node,Postgres</p></span>
                            <a data-toggle="modal" data-target="#L4AModal" href=""></a>
                        </figcaption>
                    </figure>

                    <figure class="effect-milo FTMAC">
                        <img src="/assets/images/fire.jpeg" alt="img03" />
                        <figcaption>
                            <h2>Fort <span>McMurray</span></h2>
                            <p> Raised funds for Fort McMurray wildfire victims<br><br>
                            <span class="uses"> Front-end & responsive design</p></span>
                            <a data-toggle="modal" data-target="#FMModal" href=""></a>
                        </figcaption>
                    </figure>

                    <br class="clear">

                    <figure class="effect-milo CHAT">
                        <img src="/assets/images/chatroom.png" alt="img11" />
                        <figcaption>
                            <h2>Chat<span>Room</span></h2>
                            <p> Express and Socket Web App that faciliates live chat functionality<br>
                             <span class="uses"><br> Uses: Web Sockets, Node.js, Express.js, jQuery </p></span>
                            <a data-toggle="modal" data-target="#ChatModal" href=""></a>
                        </figcaption>
                    </figure>

                    <figure class="effect-milo SH">
                        <img src="/assets/images/shudidoo.jpg" alt="img03" />
                        <figcaption>
                            <h2>Shudi<span>doo </span></h2>
                            <p>iOS App that suggests location-based activities<br><br>
                            <span class="uses"> Uses: Swift/iOS, SQL, PHP, CoreLocation, GoogleMaps API</p></span>
                            <a data-toggle="modal" data-target="#SDModal" href=""></a>
                        </figcaption>
                    </figure>

                    <figure class="effect-milo WALL">
                        <img src="/assets/images/wall.png" alt="img03" />
                        <figcaption>
                            <h2>THE<span>WALL</span></h2>
                            <p>A MEAN Stack Web Discussion Forum<br><br>
                            <span class="uses"> Uses: MEAN Stack, HTML, CSS, jQuery, Sockets</p></span>
                            <a data-toggle="modal" data-target="#WallModal" href=""></a>
                        </figcaption>
                    </figure>

                    <br class="clear">

                    <figure class="effect-milo OOP">
                        <img src="/assets/images/circles.png" alt="img03" />
                        <figcaption>
                            <h2>OOP</h2>
                            <p>Mini-Demo of Object Oriented Programming in Action<br><br>
                             <span class="uses"> Uses: OOP, JavaScript, HTML, CSS, jQuery</p></span>
                                <a data-toggle="modal" data-target="#OOPModal" href=""></a>
                        </figcaption>
                    </figure>


                    <figure class="effect-milo CUSTOMERS">
                        <img src="/assets/images/customers.png" alt="img03" />
                        <figcaption>
                            <h2><span>MINI-STORE</span></h2>
                            <p>Sample E-Commerce Website to manage customers & orders<br><br>
                                 <span class="uses">  Uses: MEAN Stack</p></span>
                            <a data-toggle="modal" data-target="#StoreModal" href=""></a>
                        </figcaption>
                    </figure>

                    <figure class="effect-milo JQUERY">
                        <img src="/assets/images/jquery.png" alt="img03" />
                        <figcaption>
                            <h2>jQUERY<span>Demo</span></h2>
                            <p>Quick demo of simple jQuery functions<br><br>
                             <span class="uses"> Uses: jQUERY, HTML, CSS</p></span>
                            <a data-toggle="modal" data-target="#jQueryModal" href=""></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- end portfolio container -->
        </article><!-- end nav3 section -->
        </section><!-- end main section -->


    <!--- BEGIN MODALS -->

    <!-- Project Managed Modal -->
    <div class="modal fade" id="PMModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">PROJECT MANAGED- 1st Place in Hackathon - 2016</h3>
              </div>
              <div class="modal-body">
                <img src="/assets/images/PMManaged.png" alt="ProjectManaged.png" class="modalimage">
                <p>Inspired by years as an IT project manager, I conceptualized and created a web-application that helps users automate tedious project management tasks.
                    From the site, users can create & store meeting agendas, directly email agendas to participants, download agendas to PDF, manage recurring meetings, & have the site
                    send out automatic follow-up reminders to tagged meeting participants.</p>
                <p>Technologies: PHP, SQL, PHPmailer, PDF API, Rich-Text Editor, jQuery, BootStrap, HTML/CSS<br>
                <p>Involvement: Individual Full Stack Development</p>
                <a href="http://52.40.19.212" target="_top"><button class="to_site">TO THE SITE</button></a>
                <a href="http://github.com/LWandres/Project-Managed-Final" target="_top"><button class="to_site">TO GITHUB</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End Project Managed Modal -->

    <!-- Fort McMurray Modal -->
    <div class="modal fade" id="FMModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">FORT MCMURRAY RELIEF FUND- 2016</h3>
              </div>
              <div class="modal-body">
                <img src="/assets/images/FtMac.png" alt="FortMac.png" class="modalimage">
                <p>A PHP website deployed to raise funds for the victims of the Fort McMurray Wildfire in Alberta, Canada. All proceeds are going to the United Way of Fort McMurray for distribution.</p>
                <p>Technologies: PHP, HTML, CSS, jQuery,SQL,Bootstrap, PHPmailer, Sockets<br>
                <p>Involvement: Group Project - Implemented Front-End</p>
                <a href="http://www.fortmcmurrayrelieffund.com/" target="_top"><button class="to_site">TO THE SITE</button></a>
                <a href="http://en.wikipedia.org/wiki/2016_Fort_McMurray_wildfire" target="_top"><button class="to_site">READ ABOUT THE FIRE</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End Fort McMurray Modal -->

    <!-- Letters4Animals Modal -->
    <div class="modal fade" id="L4AModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">LETTERS4ANIMALS - 2016</h3>
              </div>
              <div class="modal-body">
                <img src="/assets/images/L4A.png" alt="Letters4Animals.png" class="modalimage">
                <p> Letters4Animals strives to increase and promote civic engagement through automating letters to political officials.
                    Users choose a cause they care about, enter basic address information, and the site auto-generates a templated letter
                    to political representatives based on the zipcode provided. The Scrum team converted an existing Wordpress design to a JS powered site, enabling the client to expand the site's functionality.
                <p>Technologies: Express.js, AngularJS, Node,js,Postgres, Google Civics API, Google Analytics API, Facebook & Twitter integration, Twilio API, NPM, Rich-Text Editor<br>
                <p>Involvement: Group Project - Full Stack Developer.</p>
                <a href="http://54.187.97.10" target="_top"><button class="to_site">TO THE SITE</button></a>
                <a href="http://github.com/dallals/Letters4Animals" target="_top"><button class="to_site">TO GITHUB</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End Letters4Animals Modal -->


    <!-- Shudidoo Modal -->
    <div class="modal fade" id="SDModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">SHUDIDOO - 2016 (Pronounced: "Should-I-Do")</h3>
              </div>
              <div class="modal-body">
                <video width="350" height="270" controls>
                      <source src="/assets/ShudidooDemo.mp4" type="video/mp4">
                      <!-- <source src="movie.ogg" type="video/ogg"> -->
                    Your browser does not support the video tag.
                </video>
                <p>Users are able to store "To-Do" tasks and find nearby locations where they can complete them using the Google Places API.
                   The App also suggests nearby activities for users to experience on days when they are looking to try something new.<br><br>
                   Technologies: Swift, iOS, CoreLocation, SQL Google Places API<br><br>
                   Involvement: Group Project - Full Stack Mobile Developer</p>
                <button class="to_site">GITHUB REPO COMING SOON <br>(Currently refactoring)</button>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End Shudidoo Modal -->


    <!-- ChatRoom Modal -->
    <div class="modal fade" id="ChatModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">CHAT ROOM - 2016</h3>
              </div>
              <div class="modal-body">
                <img src="/assets/images/mainchat.png" alt="mainchat.png" class="modalimage">

                <p>A straightforward Chat Room where users can communicate in real-time.</p>
                   Technologies: Node.js, Express.js, Socket.io, HTML/CSS, jQuery<br><br>
                   Involvement: Individual Project -  Web Developer</p>
                <a href="http://52.37.34.146" target="_top"><button class="to_site">TO THE SITE</button></a>
                <a href="https://github.com/LWandres/Chat_Room" target="_top"><button class="to_site">TO GITHUB</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End ChatRoom Modal -->

    <!-- OOP Modal -->
    <div class="modal fade" id="OOPModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Object Oriented Programming Demo - 2016</h3>
              </div>
              <div class="modal-body">
                <img src="/assets/images/OOP.png" alt="OOP.png" class="modalimage">
                <p>A very basic implementation of Object Oriented Programming with dynamically generated circles.</p><br>
                   Technologies: Javascript, OOP, jQuery, HTML/CSS<br><br>
                   Involvement: Individual Project- Web Developer</p>
                   NOTE: Please use Google Chrome for this demo.</br><br>
                <a href="/main/OOPDemo" target="_top"><button class="to_site">TO THE SITE</button></a>
                <a href="http://github.com/LWandres/OOPDemo" target="_top"><button class="to_site">TO GITHUB</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End OOP Modal -->


    <!-- The Wall Modal -->
    <div class="modal fade" id="WallModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">THE WALL - 2016</h3>
              </div>
              <div class="modal-body">
                <img src="/assets/images/TheWall.png" alt="TheWall.png" class="modalimage">
                <p>A Web-Forum for Online Discussion.</p>
                   Technologies: MEAN Stack (Mongo, Express.js, AngularJS, Node.js), Mongoose, HTML/CSS<br><br>
                   Involvement: Individual Project - Full Stack Web Developer</p>
                <a href="http://52.32.116.49" target="_top"><button class="to_site">TO THE SITE</button></a>
                <a href="https://github.com/LWandres/TheWall" target="_top"><button class="to_site">TO GITHUB</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End TheWall Modal -->


    <!-- The Mini-Store Modal -->
    <div class="modal fade" id="StoreModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">MINI-STORE - 2016</h3>
              </div>
              <img src="/assets/images/Mini-Store.png" alt="Mini-Store.png" class="modalimage">
              <div class="modal-body">
                <p>A back-end administration portal for a mock company to manage their customers, products, and orders.</p>
                   Technologies: MEAN Stack (Mongo, Express.js, AngularJS, Node.js), Mongoose, HTML/CSS<br><br>
                   Involvement: Individual Project- Full Stack Web Developer</p>
                <a href="http://52.43.15.209/" target="_top"><button class="to_site">TO THE SITE</button></a>
                <a href="https://github.com/LWandres/Mini-Store" target="_top"><button class="to_site">TO GITHUB</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End Mini-Store Modal -->


    <!-- The Mini-Store Modal -->
    <div class="modal fade" id="jQueryModal" role="dialog">
        <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">STAR WARS jQUERY DEMO - 2016</h3>
              </div>
              <div class="modal-body">
                <img src="/assets/images/star_wars.png" alt="star_wars.png" class="modalimage">
                <p>An interactive jQuery site themed after Star Wars.</p>
                   Technologies: HTML/CSS, jQuery<br><br>
                   Involvement: Individual Project - Web Developer</p>
                <a href="/main/starwars" target="_top"><button class="to_site">TO THE SITE</button></a>
                <a href="http://github.com/LWandres/Star_Wars-jQuery-Demo" target="_top"><button class="to_site">TO GITHUB</button></a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- End Mini-Store Modal -->


</body>

    <script>
        new ElastiStack(document.getElementById('elasticstack'));
    </script>
</html>
