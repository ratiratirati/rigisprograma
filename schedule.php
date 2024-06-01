<html>
    <head>
        <meta charset="utf-8">
        <title>სამართავი გვერდი</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="css/all.css" type="text/css" rel="stylesheet">
        <link href="css/fontawesome.min.css" type="text/css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.inputmask.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/tablefilter.js"></script>
        <script src="js/script.js"></script>
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
                            <a href="home.php">
                                <span class="item">უკან დაბრუნება</span>
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
        
    
  
    <div class="tab">
        <?php echo $msg; ?>
        <?php echo $error; ?>
    <button type="button" id="add_button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="fa-sharp fa-regular fa-calendar-plus calendar"></i>
    </button>

 
    <div class="modal fade modal-xl" id="staticBackdrop"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="post" action="schedule.php">
            <div class="input-group mb-4">
                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" name="firstlastname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="სახელი / გვარი" required>
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-phone-volume"></i></span>
                <input type="text" class="form-control" name="mobile" id="number" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="მობილურის ნომერი" required>
            </div>
            <div class="input-group mb-4">
            <label class="input-group-text" for="inputGroupSelect01"><i class="fa-solid fa-calendar-day"></i></label>
                <select class="form-select" name="day" id="inputGroupSelect01" required>
                    <option value="" hidden>აირჩიეთ დღე</option>
                    <option value="ორშაბათს">ორშაბათი</option>
                    <option value="სამშაბათს">სამშაბათი</option>
                    <option value="ოთხშაბათს">ოთხშაბათი</option>
                    <option value="ხუთშაბათს">ხუთშაბათი</option>
                    <option value="პარასკევს">პარასკევი</option>
                    <option value="შაბათს">შაბათი</option>
                    <option value="კვირას">კვირა</option>
                </select>
            </div>
            <div class="input-group mb-4">
            <label class="input-group-text" for="inputGroupSelect02"><i class="fa-regular fa-clock"></i></label>
            <select class="form-select" name="time" id="inputGroupSelect02" required>
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
            </div>
            </div>
            <div class="modal-footer">
                <button name="request_add" class="btn btn-primary">ვიზიტის დაჯავშნა</button>
            </div>
            </div>
        </form>
    </div>
    </div>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="ძიება შეიყვანეთ სახელი / გვარი მობილური საათი ან ტელეფონის ნომერი ">
        <button class="tablinks" onclick="openday(event, 'Monday')">ორშაბათი ( <?php $select = "SELECT COUNT(id) `count` FROM  `orderlist` WHERE `day`='ორშაბათს'"; $result = mysqli_query($con,$select); $row = mysqli_fetch_assoc($result); echo $row['count'] ?> )</button>
        <button class="tablinks" onclick="openday(event, 'Tuesday')">სამშაბათი ( <?php $select = "SELECT COUNT(id) `count` FROM  `orderlist` WHERE `day`='სამშაბათს'"; $result = mysqli_query($con,$select); $row = mysqli_fetch_assoc($result); echo $row['count'] ?> )</button>
        <button class="tablinks" onclick="openday(event, 'Wednesday')">ოთხშაბათი ( <?php $select = "SELECT COUNT(id) `count` FROM  `orderlist` WHERE `day`='ოთხშაბათს'"; $result = mysqli_query($con,$select); $row = mysqli_fetch_assoc($result); echo $row['count'] ?> )</button>
        <button class="tablinks" onclick="openday(event, 'Thursday')">ხუთშაბათი ( <?php $select = "SELECT COUNT(id) `count` FROM  `orderlist` WHERE `day`='ხუთშაბათს'"; $result = mysqli_query($con,$select); $row = mysqli_fetch_assoc($result); echo $row['count'] ?> )</button>
        <button class="tablinks" onclick="openday(event, 'Friday')">პარასკევი ( <?php $select = "SELECT COUNT(id) `count` FROM  `orderlist` WHERE `day`='პარასკევს'"; $result = mysqli_query($con,$select); $row = mysqli_fetch_assoc($result); echo $row['count'] ?> )</button>
        <button class="tablinks" onclick="openday(event, 'Saturday')">შაბათი ( <?php $select = "SELECT COUNT(id) `count` FROM  `orderlist` WHERE `day`='შაბათს'"; $result = mysqli_query($con,$select); $row = mysqli_fetch_assoc($result); echo $row['count'] ?> )</button>
        <button class="tablinks" onclick="openday(event, 'Sunday')">კვირა ( <?php $select = "SELECT COUNT(id) `count` FROM  `orderlist` WHERE `day`='კვირას'"; $result = mysqli_query($con,$select); $row = mysqli_fetch_assoc($result); echo $row['count'] ?> )</button>
        <button class="tablinks" onclick="openday(event, 'endday')">სამუშაო დღის დასრულება</button>


        <div id="Monday" class="tabcontent">
            <table id="customers">
    <tr>
        <th><i class="fa-solid fa-user"></i> სახელი / გვარი</th>
        <th><i class="fa-solid fa-phone-volume"></i> მობილური</th>
        <th title="13:00 = 01:00 // 13:30 = 01:30 // 14:00 = 02:00 // 14:30 = 02:30 // 15:00 = 03:00 //  15:30 = 03:30 // 16:00  = 04:00 //  16:30 = 04:30 // 17:00 = 05:00 // 17:30 = 05:30 // 18:00 = 06:00"><i class="fa-regular fa-clock"></i> საათი</th>
        <th><i class="fa-solid fa-hashtag"></i> ვიზიტის ნომერი</th>
        <th>მოქმედება</th>
    </tr>
    <?php 
            $select = "SELECT * FROM `orderlist` WHERE `day`='ორშაბათს'  ORDER BY `time` ASC ";
            $result = mysqli_query($con,$select);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row['firstlastname']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['time']."</td>
                <td>".$row['order_number']."</td>
                <td>
                    <form method='post' action='schedule.php'>
                    <input name='order_id' type='hidden' value='".$row['id']."'>
                    <button name='delete_order' title='წაშლა' id='delete_btn' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button>
                    </form>
                </td>
                </tr>";
            }   

            
            ?>
    </table>
        </div>

        <div id="Tuesday" class="tabcontent">
        <table id="customers">
    <tr>
        <th><i class="fa-solid fa-user"></i> სახელი / გვარი</th>
        <th><i class="fa-solid fa-phone-volume"></i> მობილური</th>
        <th title="13:00 = 01:00 // 13:30 = 01:30 // 14:00 = 02:00 // 14:30 = 02:30 // 15:00 = 03:00 //  15:30 = 03:30 // 16:00  = 04:00 //  16:30 = 04:30 // 17:00 = 05:00 // 17:30 = 05:30 // 18:00 = 06:00"><i class="fa-regular fa-clock"></i> საათი</th>
        <th><i class="fa-solid fa-hashtag"></i> ვიზიტის ნომერი</th>
        <th>მოქმედება</th>
    </tr>
    <?php 
            $select = "SELECT * FROM `orderlist` WHERE `day`='სამშაბათს' ORDER BY `time` ASC ";
            $result = mysqli_query($con,$select);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row['firstlastname']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['time']."</td>
                <td>".$row['order_number']."</td>
                <td>
                    <form method='post' action='schedule.php'>
                    <input name='order_id' type='hidden' value='".$row['id']."'>
                    <button name='delete_order' title='წაშლა' id='delete_btn' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button>
                    </form>
                </td>
                </tr>";
            }   


            
            ?>
    </table>
        </div>

        <div id="Wednesday" class="tabcontent">
        <table id="customers">
    <tr>
        <th><i class="fa-solid fa-user"></i> სახელი / გვარი</th>
        <th><i class="fa-solid fa-phone-volume"></i> მობილური</th>
        <th title="13:00 = 01:00 // 13:30 = 01:30 // 14:00 = 02:00 // 14:30 = 02:30 // 15:00 = 03:00 //  15:30 = 03:30 // 16:00  = 04:00 //  16:30 = 04:30 // 17:00 = 05:00 // 17:30 = 05:30 // 18:00 = 06:00"><i class="fa-regular fa-clock"></i> საათი</th>
        <th><i class="fa-solid fa-hashtag"></i> ვიზიტის ნომერი</th>
        <th>მოქმედება</th>
    </tr>
    <?php 
            $select = "SELECT * FROM `orderlist` WHERE `day`='ოთხშაბათს' ORDER BY `time` ASC ";
            $result = mysqli_query($con,$select);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row['firstlastname']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['time']."</td>
                <td>".$row['order_number']."</td>
                <td>
                    <form method='post' action='schedule.php'>
                    <input name='order_id' type='hidden' value='".$row['id']."'>
                    <button name='delete_order' title='წაშლა' id='delete_btn' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button>
                    </form>
                </td>
                </tr>";
            }   


            
            ?>
    </table>
        </div>
        
        <div id="Thursday" class="tabcontent">
        <table id="customers">
    <tr>
        <th><i class="fa-solid fa-user"></i> სახელი / გვარი</th>
        <th><i class="fa-solid fa-phone-volume"></i> მობილური</th>
        <th title="13:00 = 01:00 // 13:30 = 01:30 // 14:00 = 02:00 // 14:30 = 02:30 // 15:00 = 03:00 //  15:30 = 03:30 // 16:00  = 04:00 //  16:30 = 04:30 // 17:00 = 05:00 // 17:30 = 05:30 // 18:00 = 06:00"><i class="fa-regular fa-clock"></i> საათი</th>
        <th><i class="fa-solid fa-hashtag"></i> ვიზიტის ნომერი</th>
        <th>მოქმედება</th>
    </tr>
    <?php 
            $select = "SELECT * FROM `orderlist` WHERE `day`='ხუთშაბათს' ORDER BY `time` ASC ";
            $result = mysqli_query($con,$select);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row['firstlastname']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['time']."</td>
                <td>".$row['order_number']."</td>
                <td>
                    <form method='post' action='schedule.php'>
                    <input name='order_id' type='hidden' value='".$row['id']."'>
                    <button name='delete_order' title='წაშლა' id='delete_btn' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button>
                    </form>
                </td>
                </tr>";
            }   


            
            ?>
    </table>
        </div>

        <div id="Friday" class="tabcontent">
        <table id="customers">
    <tr>
        <th><i class="fa-solid fa-user"></i> სახელი / გვარი</th>
        <th><i class="fa-solid fa-phone-volume"></i> მობილური</th>
        <th title="13:00 = 01:00 // 13:30 = 01:30 // 14:00 = 02:00 // 14:30 = 02:30 // 15:00 = 03:00 //  15:30 = 03:30 // 16:00  = 04:00 //  16:30 = 04:30 // 17:00 = 05:00 // 17:30 = 05:30 // 18:00 = 06:00"><i class="fa-regular fa-clock"></i> საათი</th>
        <th><i class="fa-solid fa-hashtag"></i> ვიზიტის ნომერი</th>
        <th>მოქმედება</th>
    </tr>
    <?php 
            $select = "SELECT * FROM `orderlist` WHERE `day`='პარასკევს' ORDER BY `time` ASC ";
            $result = mysqli_query($con,$select);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row['firstlastname']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['time']."</td>
                <td>".$row['order_number']."</td>
                <td>
                    <form method='post' action='schedule.php'>
                    <input name='order_id' type='hidden' value='".$row['id']."'>
                    <button name='delete_order' title='წაშლა' id='delete_btn' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button>
                    </form>
                </td>
                </tr>";
            }   


            
            ?>
    </table>
        </div>

        <div id="Saturday" class="tabcontent">
        <table id="customers">
    <tr>
        <th><i class="fa-solid fa-user"></i> სახელი / გვარი</th>
        <th><i class="fa-solid fa-phone-volume"></i> მობილური</th>
        <th title="13:00 = 01:00 // 13:30 = 01:30 // 14:00 = 02:00 // 14:30 = 02:30 // 15:00 = 03:00 //  15:30 = 03:30 // 16:00  = 04:00 //  16:30 = 04:30 // 17:00 = 05:00 // 17:30 = 05:30 // 18:00 = 06:00"><i class="fa-regular fa-clock"></i> საათი</th>
        <th><i class="fa-solid fa-hashtag"></i> ვიზიტის ნომერი</th>
        <th>მოქმედება</th>
    </tr>
    <?php 
            $select = "SELECT * FROM `orderlist` WHERE `day`='შაბათს' ORDER BY `time` ASC ";
            $result = mysqli_query($con,$select);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row['firstlastname']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['time']."</td>
                <td>".$row['order_number']."</td>
                <td>
                    <form method='post' action='schedule.php'>
                    <input name='order_id' type='hidden' value='".$row['id']."'>
                    <button name='delete_order' title='წაშლა' id='delete_btn' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button>
                    </form>
                </td>
                </tr>";
            }   


            
            ?>
    </table>
        </div>

        <div id="Sunday" class="tabcontent">
        <table id="customers">
    <tr>
        <th><i class="fa-solid fa-user"></i> სახელი / გვარი</th>
        <th><i class="fa-solid fa-phone-volume"></i> მობილური</th>
        <th title="13:00 = 01:00 // 13:30 = 01:30 // 14:00 = 02:00 // 14:30 = 02:30 // 15:00 = 03:00 //  15:30 = 03:30 // 16:00  = 04:00 //  16:30 = 04:30 // 17:00 = 05:00 // 17:30 = 05:30 // 18:00 = 06:00"><i class="fa-regular fa-clock"></i> საათი</th>
        <th><i class="fa-solid fa-hashtag"></i> ვიზიტის ნომერი</th>
        <th>მოქმედება</th>
    </tr>
    <?php 
            $select = "SELECT * FROM `orderlist` WHERE `day`='კვირას' ORDER BY `time` ASC ";
            $result = mysqli_query($con,$select);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>".$row['firstlastname']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['time']."</td>
                <td>".$row['order_number']."</td>
                <td>
                    <form method='post' action='schedule.php'>
                    <input name='order_id' type='hidden' value='".$row['id']."'>
                    <button name='delete_order' title='წაშლა' id='delete_btn' class='btn btn-danger'><i class='fa-solid fa-trash-can'></i></button>
                    </form>
                </td>
                </tr>";
            }   


            
            ?>
    </table>
        </div>

        <div id="endday" class="tabcontent">
            <form method="post" action="schedule.php">
            <div class="input-group mb-4">
                <label class="input-group-text" for="inputGroupSelect03"><i class="fa-solid fa-calendar-day"></i></label>
                <select class="form-select" name="dayy" id="inputGroupSelect03" required>
                    <option value="" hidden>აირჩიეთ დღე</option>
                    <option value="ორშაბათს">ორშაბათი</option>
                    <option value="სამშაბათს">სამშაბათი</option>
                    <option value="ოთხშაბათს">ოთხშაბათი</option>
                    <option value="ხუთშაბათს">ხუთშაბათი</option>
                    <option value="პარასკევს">პარასკევი</option>
                    <option value="შაბათს">შაბათი</option>
                    <option value="კვირას">კვირა</option>
                </select>
                </div>
                <button name="get_endday" id="get_endday" class="btn btn-primary">დღის დასრულება</button>
            </div>
            </form>
        </div>

        </div>

   
    </body>
</html>