





<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>DANISWA DEVELOPMENT | Contact Us</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='../stylesheets/stylesheet.css'>
    <meta name='description' content='Web development and Graphic Design'>
    <meta name='keywords' content='web, website, development, developer, graphic, design, simi, valley'>
    <script type='text/javascript' src='javascript/form_validate.js'></script>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <link href='../favicon.ico' rel='icon' type='image/png'>
</head>
<body>
    <?php include '../functions/analytics.php'; ?>
    <?php include '../functions/email_function.php'; ?>
    <?php include '../functions/pages_header.php'; ?>
    <!--<div class='container-fluid'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-1'>
                <div id='contactHeader'>
                    <h2 id='title'>Contact Our Team</h1>
                    <h3 class='invite'>If you are ready to get your website concept up and running,
                    or if you are just looking around to see what's out there.
                    Leave us a message, and our team members will contact you.</h3>
                </div>
            </div>
        </div>
    </div>-->
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-9 col-lg-9'>
                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-11 col-md-offset-1 col-lg-11 col-lg-offset-1'>
                        <div id='contactHeader'>
                            <h2 id='title'>Contact Our Team</h1>
                            <h3 class='invite'>If you are ready to get your website concept up and running,
                            or if you are just looking around to see what's out there.
                            Leave us a message, and our team members will contact you.</h3>
                        </div>
                    </div>
                </div>
                <div id='emailForm'>
                    <form id='emailForm' name='contactForm' onsubmit='validElements()' method='POST' action=''>
                        <div class='row'>
                            <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2'>
                                <h4 class='contactForm'>*First Name:</h4>
                            </div>
                            <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                <input class='contactElements' type="text" name="fName">
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2'>
                                <h4 class='contactForm'>*Last Name:</h4>
                            </div>
                            <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                <input class='contactElements' type="text" name="lName">
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2'>
                                <h4 class='contactForm'>*Email:</h4>
                            </div>
                            <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                <input class='contactElements' type="text" name="email">
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2'>
                                <h4 class='contactForm'>Phone Number:</h4>
                            </div>
                            <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                <input id='areaCode' type="text" name="areaCode" placeholder='123'>
                                <input id='prefix' type="text" name="phonePrefix" placeholder='456'>
                                <input id='suffix' type="text" name="phoneSuffix" placeholder='7890'>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2'>
                                <h4 class='contactForm'>*Best Time to Reach You:</h4>
                            </div>
                            <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                <select id='contactElements' name='timeOfDay'>
                                    <option value='anytime'>Anytime</option>
                                    <option value='morning'>Morning</option>
                                    <option value='afternoon'>Afternoon</option>
                                    <option value='evening'>Evening</option>
                                </select>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2'>
                                <h4 class='contactForm'>*Comments:</h4>
                            </div>
                            <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0'>
                                <textarea id='contactElements' name='comment'>
                                </textarea>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-5 col-lg-4 col-lg-offset-5'>
                                <input id='contactButton' type='submit' name='submit' value='Submit'>
                            </div>
                        </div>
                    </form>
                </div>
            </div
        </div>
        <div class='col-xs-12 col-sm-12 col-md-3 col-lg-3'>
             <p>We are a Web Development Team based out of Simi Valley California.
             Our team members are knowledgeable and dedicated to customer satisfaction.
             Our skills include:</p>
             <ul>
                 <li><p>Website Development</p></li>
                 <li><p>Website Animation</p></li>
                 <li><p>Web Applications</p></li>
                 <li><p>Mobile Device Optimization</p></li>
                 <li><p>Search Engine Optimization</p></li>
                 <li><p>Graphic Designs</p></li>
                 <li><p>Web Designs</p></li>
                 <li><p>Business Card Design</p></li>
                 <li><p>Flyer Design</p></li>
                 <li><p>Image Editing</p></li>
             </ul>
             <p>Feel Free To Contact Us</p>
             <p>Email: swa67dani@gmail.com</p>
             <p>Or by Social Media</p>
        </div>
    </div>
        <?php include '../functions/footer.php'; ?>
    <!--<script>
    function validElements(){
        var fName = document.forms['emailForm']['fName'].value;
        var lName = document.forms['emailForm']['lName'].value;
        var email = document.forms['emailForm']['email'].value;
        var comment = document.forms['emailForm']['comment'].value;
        alert("'" + comment + "'");
        if(fName == ''){
            alert('Please enter your first name.');
        }else if(lName == ''){
            alert('Please enter your last name.');
        }else if(email == ''){
            alert('Please enter your email address.');
        }else if(comment == null){
            alert('Please leave a comment.');
        }else{
            return true;
        }
    }
</script>-->

</body>
</html>