<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery Portfolio</title>
    <meta name="viewport" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="description" content="Web Developer Portfolio Website">
    <meta name="keywords" content="Laura Wandres,Laura Wandres Portfolio,Web Developer,HTML5,CSS3,JavaScript,Full Stack Developer,San Francisco">
    <meta name="author" content="Laura Wandres">
    <link rel="icon" href="/assets/images/logo.png" type="image/x-icon">

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" href="/assets/css/starwars.css" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel='stylesheet' type='text/css'>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/assets/js/starwars.js"></script>

    <script>
        $(document).ready(function() {
            // toggle functions
            $('img').click(function() {
                var newimage = $(this).attr('src')
                $(this).attr('src', $(this).attr('data-alt-src'));
                $(this).attr('data-alt-src', newimage);
            });

            //sort function
            $(function() {
                $("#sortable").sortable();
                $("#sortable").disableSelection();
            });

            // image overlay function
            $('.third').coveringBad();

            //get STARWARS CHARACTERS- for future API implementation. Current will console log JSON on button clicks.
            // $('#getcharacters').click(function(){
            //   $.get("http://swapi.co/api/people", function(res) {
            //       console.log(res);
            //   }, "json");
            // });
            //
            // $('#getplanets').click(function(){
            //   $.get("http://swapi.co/api/planets", function(res) {
            //       console.log(res);
            //   }, "json");
            // });
            //
            // $('#getspecies').click(function(){
            //   $.get("http://swapi.co/api/species", function(res) {
            //       console.log(res);
            //   }, "json");
            // });
            //Google Analytics
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-82133906-1', 'auto');
              ga('send', 'pageview');

        });
    </script>
    <!-- JS -->
</head>

<body>
    <div id="starwarsheader">
        <h1>STARWARS jQUERY PLAYGROUND</h1>
    </div>

    <div id="background">
        <div class="stars"></div>
        <div class="twinkling"></div>

        <div id="starwarsmain" class="col-md-11">
            <!-- Toggle Effect -->

            <div id="wrapper-darklight" class="col-md-2">
                <img src='/../../assets/images/starwarsimages/Light1.png' data-alt-src='/../../assets/images/starwarsimages/Dark1.png' />
                <img src='/../../assets/images/starwarsimages/Light2.png' data-alt-src='/../../assets/images/starwarsimages/Dark2.png' />
                <img src='/../../assets/images/starwarsimages/Light3.png' data-alt-src='/../../assets/images/starwarsimages/Dark3.png' />
                <img src='/../../assets/images/starwarsimages/Light4.png' data-alt-src='/../../assets/images/starwarsimages/Dark4.png' />
                <img src='/../../assets/images/starwarsimages/Light5.png' data-alt-src='/../../assets/images/starwarsimages/Dark5.png' />
                <h2><span class="dark">Dark</span> or <span class="light">Light </span>Side?</h2>
                <p>Click the images to see!
                    <p>
            </div>

            <!-- Sortable -->
            <div id="sortable-force" class="col-md-2">
                <ul id="sortable">
                    <li class="ui-state-default"><img id="img_sort" src="/../../assets/images/starwarsimages/sort2.png"></li>
                    <li class="ui-state-default"><img id="img_sort" src="/../../assets/images/starwarsimages/sort4.png"></li>
                    <li class="ui-state-default"><img id="img_sort" src="/../../assets/images/starwarsimages/sort1.png"></li>
                    <li class="ui-state-default"><img id="img_sort" src="/../../assets/images/starwarsimages/sort5.png"></li>
                    <li class="ui-state-default"><img id="img_sort" src="/../../assets/images/starwarsimages/sort3.png"></li>
                </ul>
                <h2>Sortable Puzzle</h2>
                <p>Use the force to reassemble the image</p>
            </div>

            <!-- image overlay -->
            <div id="image-overlay" class="col-md-2">
                <div class="covered third" data-passive="/../../assets/images/starwarsimages/before.png" width="350px" data-active="/../../assets/images/starwarsimages/after.png">
                    <div class="handle"></div>
                    <div class="changeable"></div>
                </div>
                <h2>Time Warp</h2>
            </div>

            <!-- StarWars API button for Inclusion in future iterations -->
            <!-- <div id="API" class="col-md-10">
          <button id="getcharacters">GET CHARACTERS</button></a>
          <button id="getplanets">GET PLANETS</button></a>
          <button id="getspecies">GET SPECIES</button></a>

        </div> -->

        </div>
    </div>
</body>

</html>
