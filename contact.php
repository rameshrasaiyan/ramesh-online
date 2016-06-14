<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ramesh Rasaiyan's Personal Website | Contact </title>
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
                <h1><a class="branding-text" href="index.html">Ramesh Rasaiyan</a></h1>
            </div>
            <div class="nav-container">
                <nav>
                    <ul class="nav-items">
                        <li class="nav-item"><a href="index.html" class="nav-item-link">Home</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-item-link">About</a></li>
                        <li class="nav-item"><a href="interests.html" class="nav-item-link">Interests</a></li>
                        <li class="nav-item"><a href="profile.html" class="nav-item-link">Resume</a></li>
                        <li class="nav-item"><a href="skills.html" class="nav-item-link">Skills</a></li>
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
                    <div class="column-left">
                        <form action="contact.php">
                            <ul class="contact-items">
                                <li class="contact-item">
                                    <label for="name">Full Name: </label>
                                    <input type="text" name="name" id="name" class="input-name">
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
</body>
</html>
