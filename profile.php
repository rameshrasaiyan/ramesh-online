<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ramesh Rasaiyan's Personal Website | Profile </title>
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
                    <h2 class="page-title">Ramesh's Profile</h2>
                </header>
                <div class="row">
                    <div class="column-left">
                        <h2 class="page-title">Experience</h2>
                        <ul class="experience-items">
                            <?php
                                include 'settings.php';
                                $pdo = Database::connect();
                                $sql = 'SELECT * FROM experience ORDER BY id DESC';
                                foreach ($pdo->query($sql) as $row) {
                                    echo '<li class="experience-item">';
                                    echo '<span class="exp-year">'. $row['fyear'] .' - '.  $row['tyear'] .'</span>';
                                    echo '<div class="exp-meta">';
                                    echo '<h3 class="exp-title">'. $row['title'] .'</h3>';
                                    echo '<h4 class="exp-company">'. $row['company'] .'</h4>';
                                    echo '<p class="exp-desc">'. $row['rdesc'] .'</p>';
                                    echo '</div></li>';
                                }
                            Database::disconnect();
                            ?>
                        </ul>


                        <h2 class="page-title">Education</h2>
                        <ul class="education-items">
                            <li class="education-item">
                                <span class="edu-year">1997 - 1999</span>
                                <div class="edu-meta">
                                    <h3 class="edu-title">Professional Diploma in Network Centered Computing</h3>
                                    <h4 class="edu-university">National Institute of Information Technology</h4>
                                </div>
                            </li>
                            <li class="education-item">
                                <span class="edu-year">1997 - 1998</span>
                                <div class="edu-meta">
                                    <h3 class="edu-title">Certificate in Computing</h3>
                                    <h4 class="edu-university">Indira Gandhi National Open University</h4>
                                </div>
                            </li>
                            <li class="education-item">
                                <span class="edu-year">1993 - 1996</span>
                                <div class="edu-meta">
                                    <h3 class="edu-title">B.A., English Literature</h3>
                                    <h4 class="edu-university">Bharathiyar University</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="column-right">
                        <h2 class="page-title">My Skills</h2>
                        <ul class="skills-content">
                            <li class="skills-content-item">
                                <span>HTML5 & CSS3</span>
                                <span class="skills-overlay-bar"></span>
                                <span class="skills-bg"></span>
                                <span class="skills-persent">95%</span>
                            </li>
                            <li class="skills-content-item">
                                <span>JavaScript</span>
                                <span class="skills-overlay-bar"></span>
                                <span class="skills-bg"></span>
                                <span class="skills-persent">85%</span>
                            </li>
                            <li class="skills-content-item">
                                <span>jQuery</span>
                                <span class="skills-overlay-bar"></span>
                                <span class="skills-bg"></span>
                                <span class="skills-persent">90%</span>
                            </li>
                            <li class="skills-content-item">
                                <span>AngularJs</span>
                                <span class="skills-overlay-bar"></span>
                                <span class="skills-bg"></span>
                                <span class="skills-persent">60%</span>
                            </li>
                            <li class="skills-content-item">
                                <span>Drupal</span>
                                <span class="skills-overlay-bar"></span>
                                <span class="skills-bg"></span>
                                <span class="skills-persent">80%</span>
                            </li>
                        </ul>
                        <h2 class="page-title">Objective</h2>
                        <p class="obj-desc">
                            I am a UI/UX professional specializing in enhancing customer satisfaction and loyalty by improving the usability, ease of use interaction between the user and the product, and producing aesthetic responsive websites and graphic web design mockups. I have more than 16 years of diversified experience on HTML5/CSS3, User Experience(UX) Design, Visual Design, Interaction Design and Theme Development for Drupal and Wordpress.
                        </p>
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
