<?php
if(isset($_POST['submit'])){
    $to = "rasaiyan.ramesh@gmail.com";
    $from = $_POST['email'];
    $full_name = $_POST['fullname'];
    $subject = $_POST['txtSubject'];
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['txtMessage'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    header('Location: thankyou.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ramesh Rasaiyan's Personal Website | Contact </title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,300,700' type='text/css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto+Slab:400,300,700,100' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
</head>
<body>
    <div class="wrapper-container">
        <header class="header">
            <div class="header-content">
                <div class="brand-container">
                    <h1><a class="branding-text" href="index.php">Ramesh Rasaiyan</a></h1>
                </div>
                <div class="nav-container">
                    <nav>
                        <ul class="nav-items">
                            <li class="nav-item"><a href="index.php" class="nav-item-link">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-item-link">About</a></li>
                            <li class="nav-item"><a href="interests.php" class="nav-item-link">Interests</a></li>
                            <li class="nav-item"><a href="profile.php" class="nav-item-link">Resume</a></li>
                            <li class="nav-item"><a href="masters.php" class="nav-item-link">Master's</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-item-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="content-wrapper">
            <section class="content">
                <article class="main-article">
                    <header>
                        <h2 class="page-title">Contact Ramesh</h2>
                    </header>
                    <div class="row">
                        <div class="single-column">
                            <form action="contact.php" method="post" name="contactForm" id="contactForm" onsubmit="return(validateContactForm());">
                                <ul class="contact-items">
                                    <li class="contact-item">
                                        <label for="fullname">Full Name: </label>
                                        <input type="text" name="fullname" id="fullname" class="input-name" onfocus="removeError('fullname', 'input-name', 'nameMsg' );">
                                        <span class="error" id="nameMsg"></span>
                                    </li>
                                    <li class="contact-item">
                                        <label for="email">Email Address: </label>
                                        <input type="text" name="email" id="email" class="input-email" onfocus="removeError('email', 'input-email', 'emailMsg' );">
                                        <span class="error" id="emailMsg"></span>
                                    </li>
                                    <li class="contact-item">
                                        <label for="subject">Subject: </label>
                                        <input type="text" name="txtSubject" id="txtSubject" class="input-subject" onfocus="removeError('txtSubject', 'input-subject', 'subMsg' );">
                                        <span class="error" id="subMsg"></span>
                                    </li>
                                    <li class="contact-item">
                                        <label for="message">Message: </label>
                                        <textarea name="txtMessage" id="txtMessage" cols="30" rows="10" class="input-message" onfocus="removeError('txtMessage', 'input-message', 'msgMsg' );"></textarea>
                                        <span class="error" id="msgMsg"></span>
                                    </li>
                                    <li class="contact-item">
                                        <input type="reset" name="reset" value="Reset" class="btn btn-reset">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-submit">
                                    </li>

                                </ul>
                            </form>
                        </div>
                    </div>
                </article>
                <aside class="sidebar box-shadow">
                    <div class="responsive-blocks">
                        <h2 class="sidebar-title">Drupal Contributions</h2>
                        <div class="responsive-content">
                            <ul class="drupal-contribution">
                                <li><a href="https://www.drupal.org/project/elimai" target="_blank">Elimai - Drupal 7 Theme</a></li>
                                <li><a href="https://www.drupal.org/project/azhagu" target="_blank">Azhagu - Drupal 7 Theme</a></li>
                                <li><a href="https://www.drupal.org/project/katturai" target="_blank">Katturai - Drupal 7 Theme</a></li>
                                <li><a href="https://www.drupal.org/project/flickr_bricks" target="_blank">Flickr Bricks - Drupal 7 Module</a></li>
                                <li><a href="https://www.drupal.org/sandbox/rameshrasaiyan/slide_login" target="_blank">Slide Login - Drupal 7 Module</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="responsive-blocks">
                        <h2 class="sidebar-title">My Flickr Gallery</h2>
                        <div class="responsive-content">
                            <div id="flickr-container">
                                <ul class="flickr-content"></ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </section>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2016 Ramesh Rasaiyan</p>
        </div>
    </footer>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/flickr.js"></script>
    <script src="js/validate-contact.js"></script>
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-79514339-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
