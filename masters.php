<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ramesh Rasaiyan's Personal Website | Masters </title>
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
                        <h2 class="page-title">Master's @ Boston University MET</h2>
                    </header>
                    <div class="row">
                        <div class="single-column">
                            <h2>Courses</h2>
                            <span class="legend legend-progress">In Progress</span>
                            <span class="legend  legend-not-started">Not Started</span>
                            <span class="legend  legend-completed">Completed</span>
                            <ul class="course-items">
                                <li class="course-item completed"><a href="http://www.bu.edu/csmet/cs601/" target="_blank">MET CS 601 Web Application Development</a></li>
                                <li class="course-item in-progress"><a href="http://www.bu.edu/csmet/cs520/" target="_blank">MET CS 520 Information Structures with Java</a></li>
                                <li class="course-item not-started"><a href="http://www.bu.edu/csmet/cs546/" target="_blank">MET CS 546 Quantitative Methods for Information Systems</a></li>
                                <li class="course-item not-started"><a href="http://www.bu.edu/csmet/cs602/" target="_blank">MET CS 602 Server-Side Web Development</a></li>
                                <li class="course-item not-started"><a href="http://www.bu.edu/csmet/cs701/" target="_blank">MET CS 701 Rich Internet Application Development</a></li>
                                <li class="course-item not-started"><a href="http://www.bu.edu/csmet/cs625/" target="_blank">MET CS 625 Business Data Communication and Networks</a></li>
                                <li class="course-item not-started"><a href="http://www.bu.edu/csmet/cs669/" target="_blank">MET CS 669 Database Design and Implementation for Business</a></li>
                                <li class="course-item not-started"><a href="http://www.bu.edu/csmet/cs682/" target="_blank">MET CS 682 Information Systems Analysis and Design</a></li>
                                <li class="course-item not-started"><a href="http://www.bu.edu/csmet/cs782/" target="_blank">MET CS 782 IT Strategy and Management</a></li>
                            </ul>
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
