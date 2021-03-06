<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Documentation Symfony</title>

    <!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

<body>
	<nav class="nav flex-column" id="sidebar">
        <div class="sidebar-header">
            <img src="assets/img/logo.png" alt="logo-symfony" class="img-responsive">
        </div>
        <a class="nav-link" href="index.php?setup"><i class="fas fa-tools"></i>Setup</a>
        <a class="nav-link" href="index.php?review"><i class="fas fa-search"></i>Review</a>
        <a class="nav-link" href="index.php?prod"><i class="fas fa-upload"></i>Mise en prod</a>
        <hr>
        <a class="nav-link" href="index.php?marine"><i class="fas fa-user"></i>Marine</a>
        <a class="nav-link" href="index.php?fosuserbundle"><i class="fas fa-users"></i>FOSUSER Bundle</a>
<!--        <a class="nav-link" href="index.php?multilingue"><i class="fas fa-language"></i>Multilingue</a>-->
        <a class="nav-link" href="index.php?fixture"><i class="fas fa-database"></i>Fixture</a>
        <a class="nav-link" href="index.php?test"><i class="fas fa-tasks"></i>Test</a>
        <a class="nav-link" href="index.php?service"><i class="fas fa-puzzle-piece"></i>Service</a>
        <a class="nav-link" href="index.php?maintenance"><i class="fas fa-wrench"></i>Maintenance</a>

        <a class="nav-link" href="index.php?cmd"><i class="fas fa-cogs"></i>CMD utiles</a>
	</nav>
    <main id="content-page">
        <?php
            $page= getenv("QUERY_STRING");
            if($page=="")
                $page="setup";
            include $page.".php";
        ?>
    </main>
</body>

</html>