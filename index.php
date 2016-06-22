





<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>DANISWA DEVELOPMENT</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content='Web development and Graphic Design'>
    <meta name='keywords' content='web, website, development, developer, graphic, design, simi, valley'>
    <link rel='stylesheet' type='text/css' href='stylesheets/index_stylesheet.css'>
    <script type='text/javascript' src='javascript/hub_animate.js'></script>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <link href='favicon.ico' rel='icon' type='image/png'>
</head>
<body>
    <script>
          (function(i,s,o,g,r,a,m){
              i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)
              },
              i[r].l=1*new Date();
              a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];
              a.async=1;
              a.src=g;
              m.parentNode.insertBefore(a,m)
          }
          )(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-77978074-1', 'auto');
          ga('send', 'pageview');
    </script>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
                <div class='row'>
                    <div id='header'>
                        <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                            <a href='index.php'><img id='logo' src='images/logo.png'></a>
                        </div>
                        <div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
                            <img id='title' src='images/title_white.png'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
                <div class='row'>
                    <div class='col-xs-9 col-xs-offset-3 col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-9 col-lg-offset-3'>
                        <a href='pages/contact.php'><img class='contactIcons' src='images/email_white.png'></a>
                        <a href='https://plus.google.com/+DaniswaDevelopmentSimiValley'><img class='contactIcons' src='images/googleplus_white.png'></a>
                        <a href='https://www.facebook.com/Daniswa-Development-681514185330738/'><img class='contactIcons' src='images/facebook_white.png'></a>
                        <!--<img class='contactIcons' src='images/youtube_white.png'>-->
                    </div>
                </div>
                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                        <h3 id='description'>Web Development and Graphic Design at it's Finest!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 hidden-md hidden-lg'>
                <a href='pages/projects.php'><img class='mobileButton' src='images/projects_mobile.png'></a>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 hidden-md hidden-lg'>
                <a href='pages/bio.php'><img class='mobileButton' src='images/bio_mobile.png'></a>
            </div>
        </div>
        <div class='row'>
            <div class='col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 hidden-md hidden-lg'>
                <a href='pages/contact.php'><img class='mobileButton' src='images/contact_mobile.png'></a>
            </div>
        </div>
    </div>
    <div class='container-fluid'>
        <div id='buttons'>
            <div class='row'>
                <div class='hidden-xs hidden-sm col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2'>
                    <div id='button1'>
                        <img id='button1' src='images/projectButton.png'>
                    </div>
                    <div id='animate1'>
                        <a href='pages/projects.php'><img class='hubs' src='images/hubs.png'></a>
                    </div>
                </div>
                <div class='hidden-xs hidden-sm col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1'>
                    <div id='button2'>
                        <img id='button2' src='images/bioButton.png'>
                    </div>
                    <div id='animate2'>
                        <a href='pages/bio.php'><img class='hubs' src='images/hubs.png'></a>
                    </div>
                </div>
                <div class='hidden-xs hidden-sm col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1'>
                    <div id='button3'>
                        <img id='button3' src='images/contactButton.png'>
                    </div>
                    <div id='animate3'>
                        <a href='pages/contact.php'><img class='hubs' src='images/hubs.png'></a>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
             <div class='hidden-xs hidden-sm col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1'>
                <div id='buttonShadow'>
                    <img id='shadows' src='images/shadows.png'>
                </div>
             </div>
        </div>
    </div>
    <div id='footer'>
        <p>DANISWA DEVELOPMENT 2015 * swa67dani@gmail.com * WWW.DANISWA.COM<p>
    </div>

    <script>
        $('div#animate1').hover(function(){
            element = document.getElementById('animate1');
            activate(element,linkOne);
        },function(){
            deactivate(element,linkOne);
        });
        $('div#animate2').hover(function(){
            element = document.getElementById('animate2');
            activate(element,linkTwo);
        },function(){
            deactivate(element,linkTwo);
        });
        $('div#animate3').hover(function(){
            element = document.getElementById('animate3');
            activate(element,linkThree);
        },function(){
            deactivate(element,linkThree);
        });
    </script>
</body>
</html>