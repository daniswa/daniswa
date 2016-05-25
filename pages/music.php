





<!DOCTYPE html>
<html lang='en-US'>
<head>
     <title>My Music Page</title>
     <meta charset='utf-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel=stylesheet type='text/css' href='stylesheets/styleSheet.css'>
     <link rel=stylesheet type='text/css' href='stylesheets/musicStyleSheet.css'>
     <script type='text/javascript' src='javascript/backgroundFlash.js'></script>
     <!-- Latest compiled and minified CSS -->
     <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
     <!-- jQuery library -->
     <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
     <!-- Latest compiled JavaScript -->
     <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
</head>
<body>
<div class='container-fluid'>
     <div>
          <img id='bgImage' name='backgroundImage' src='images/indexBack0.png'>
          <body onLoad='switchImage(backgroundImage)'>
     </div>
     <div class='row'>
          <div class='col-xs-10 col-sm-10 col-md-12 col-lg-12'>
               <?php include 'musicNavBar.php'; ?>
          </div>
     </div>
     <div class='row'>
          <div class='audioP'>
               <audio controls>
                    <source src='audio/tomorrow.m4a' type='audio/mp4'>
                    Your Browser Does Not Support This Audio Element.
               </audio>
          </div>
     </div>
     <div class='footer'>
          <div class='row'>
               <div class='col-xs-12 col-sm-12 col-md-6 col-md-push-4 col-lg-4 col-lg-push-4'>
                    <p>Created by Michael Costa * swa67dani@gmail.com * www.daniswa.com</p>
               </div>
          </div>
     </div>
</div>
</body>
</html>