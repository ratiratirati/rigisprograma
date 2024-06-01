<html>
    <head>
        <meta charset="utf-8">
        <title>ავტორიზაცია</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
    </head>
    <body>
        <?php
            include('script.php');
        ?>
       <div class="center">
            <form method="post" action="login.php">
                <input type="text" name="username" placeholder="მომხმარებელი" required>
                <br>
                <input type="password" name="password" placeholder="პაროლი" required>
                <br>
                <button name="login">სისტემაში შესვლა</button>
                <div class="error">
                    <?php echo $error;?>
                </div>
            </form>
       </div>
    </body>
</html>