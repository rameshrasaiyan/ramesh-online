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
                        <h2 class="page-title">Profile Admin</h2>
                    </header>
                    <div class="row">
                        <div class="signle-column">
                            <div class="experience-wrapper">
                                <h2 class="page-title">Experience</h2>
                                <table class="admin-tbl">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Company</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include 'settings.php';
                                    $pdo = Database::connect();
                                    $sql = 'SELECT * FROM experience ORDER BY id DESC';
                                    foreach ($pdo->query($sql) as $row) {
                                        echo '<tr>';
                                        echo '<td>'. $row['title'] .'</td>';
                                        echo '<td>'. $row['company'] .'</td>';
                                        echo '<td>';
                                        echo '<a href="delete.php?id=' . $row['id'] . '" class="admin-icon box-shadow"><i class="fa fa-trash"></i></a>';
                                        echo '<a href="update.php?id=' . $row['id'] . '" class="admin-icon box-shadow"><i class="fa fa-pencil"></i></a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    Database::disconnect();
                                    ?>
                                    </tbody>
                                </table>
                                <div class="admin-btn-container">
                                    <a href="add-exp.php" class="btn-admin box-shadow">Add Experience</a>
                                </div>
                            </div>
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
