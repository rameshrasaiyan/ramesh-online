<?php
require 'settings.php';

$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
    header("Location: update.php");
}

if ( !empty($_POST)) {
    // keep track validation errors
    $titleError = null;
    $companyError = null;
    $fyearError = null;
    $tyearError = null;

    // keep track post values
    $title = $_POST['txt-title'];
    $company = $_POST['txt-company'];
    $desc = $_POST['txtarea-desc'];
    $fyear = $_POST['txt-from'];
    $tyear = $_POST['txt-to'];

    // validate input
    $valid = true;
    if (empty($title)) {
        $titleError = 'Please enter the title.';
        $valid = false;
    }

    if (empty($company)) {
        $companyError = 'Please enter the company name.';
        $valid = false;
    }

    if (empty($fyear)) {
        $fyearError = 'Please enter the from year.';
        $valid = false;
    }

    if (empty($tyear)) {
        $tyearError = 'Please enter the to year.';
        $valid = false;
    }


    // update data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE experience  set title = ?, company = ?, fyear = ?, tyear = ?, rdesc = ?  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($title,$company,$fyear,$tyear,$desc,$id));
        Database::disconnect();
        header("Location: profile-admin.php");
    }
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM experience where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $title = $data['title'];
    $company = $data['company'];
    $desc = $data['rdesc'];
    $fyear = $data['fyear'];
    $tyear = $data['tyear'];
    Database::disconnect();
}
?>


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
                    <h2 class="page-title">Update Experience</h2>
                </header>
                <div class="row">
                    <div class="signle-column">
                        <div class="experience-wrapper">
                            <form action="update.php?id=<?php echo $id?>" method="post">
                                <ul class="contact-items">
                                    <li class="contact-item">
                                        <label for="txt-title">Title: </label>
                                        <input type="text" name="txt-title" id="txt-title" class="input-title" value="<?php echo !empty($title)?$title:'';?>">
                                        <?php if (!empty($titleError)): ?>
                                            <span class="alert"><?php echo $titleError;?></span>
                                        <?php endif; ?>
                                    </li>
                                    <li class="contact-item">
                                        <label for="txt-company">Company Name: </label>
                                        <input type="text" name="txt-company" id="txt-company" class="input-company" value="<?php echo !empty($company)?$company:'';?>">
                                    </li>
                                    <li class="contact-item">
                                        <label for="txt-from">From Year: </label>
                                        <input type="text" name="txt-from" id="txt-from" class="input-from" value="<?php echo !empty($fyear)?$fyear:'';?>">
                                    </li>
                                    <li class="contact-item">
                                        <label for="txt-to">To Year: </label>
                                        <input type="text" name="txt-to" id="txt-to" class="input-to" value="<?php echo !empty($tyear)?$tyear:'';?>">
                                    </li>
                                    <li class="contact-item">
                                        <label for="txtarea-desc">Description: </label>
                                        <textarea name="txtarea-desc" id="txtarea-desc" cols="30" rows="10" class="input-desc"><?php echo !empty($desc)?$desc:'';?></textarea>
                                    </li>
                                    <li class="contact-item">
                                        <input type="reset" class="btn btn-reset">
                                        <input type="submit" class="btn btn-submit">
                                    </li>

                                </ul>
                            </form>
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
