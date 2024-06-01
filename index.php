<html>
    <head>
        <meta charset="utf-8">
        <title>ვიზიტის დაჯავშნა</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.inputmask.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <?php
            include('script.php');
        ?>
        <div class="center">
            <form method="post" action="index.php">
                <input type="text" name="firstlastname" placeholder="სახელი / გვარი" required>
                <br>
                <input class="number" name="mobile" type="text" placeholder="მობილური" required>
                <br>
                <select name="day" required>
                    <option value="" hidden>აირჩიეთ დღე</option>
                    <option value="ორშაბათს">ორშაბათი</option>
                    <option value="სამშაბათს">სამშაბათი</option>
                    <option value="ოთხშაბათს">ოთხშაბათი</option>
                    <option value="ხუთშაბათს">ხუთშაბათი</option>
                    <option value="პარასკევს">პარასკევი</option>
                    <option value="შაბათს">შაბათი</option>
                    <option value="კვირას">კვირა</option>
                </select>
                <select name="time" required>
                    <option value="" hidden>აირჩიეთ საათი</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">01:00</option>
                    <option value="13:30">01:30</option>
                    <option value="14:00">02:00</option>
                    <option value="14:30">02:30</option>
                    <option value="15:00">03:00</option>
                    <option value="15:30">03:30</option>
                    <option value="16:00">04:00</option>
                    <option value="16:30">04:30</option>
                    <option value="17:00">05:00</option>
                    <option value="17:30">05:30</option>
                    <option value="18:00">06:00</option>
                </select>
                <br>
                <button name="request">ვიზიტის დაჯავშნა</button>
                </form>
                <br>
                <form method="post" action="index.php">
                <input type="text" name="order_number" placeholder="ვიზიტის ნომერი" required>
                <br>
                <button name="cancel_request">ვიზიტის გაუქმება</button>
                <br>
                <a id="go_info" href="info.php">დაკავებული ადგილების ნახვა</a>
                <div class="msg">
                    <?php echo $msg;?>
                </div>
                <div class="error">
                    <?php echo $error;?>
                </div>
            </form>
        </div>
    </body>
</html>