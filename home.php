<html>
    <head>
        <meta charset="utf-8">
        <title>სამართავი გვერდი</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="css/all.css" type="text/css" rel="stylesheet">
        <link href="css/fontawesome.min.css" type="text/css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.inputmask.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tab.js"></script>
    </head>
    <body>
        <?php
            include('script.php');

            if($_SESSION['username'] == ""){
                header('location: login.php');
            }
        ?>
        <div class="wrapper">
            <div class="sidebar">
                <div class="profile">
                    <img src="img/profile.jpg" alt="profile_picture">
                    <h3><?php echo $_SESSION['username']; ?></h3>
                </div>
                    <ul>
                        <li>
                            <a href="schedule.php">
                                <span class="item">სამუშაო გრაფიკი</span>
                            </a>
                        </li>
                        <li>
                            <a href="home.php?logout=1">
                                <span class="item">გამოსვლა</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>