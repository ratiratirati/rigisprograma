<html>
    <head>
        <meta charset="utf-8">
        <title>საინფორმაციო გვერდი</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/info.css">
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
        ?>
        <div class="tab">
         <button class="tablinks" onclick="openday(event, 'Monday')">ორშაბათი</button>
         <button class="tablinks" onclick="openday(event, 'Tuesday')">სამშაბათი</button>
         <button class="tablinks" onclick="openday(event, 'Wednesday')">ოთხშაბათი</button>
         <button class="tablinks" onclick="openday(event, 'Thursday')">ხუთშაბათი</button>
         <button class="tablinks" onclick="openday(event, 'Friday')">პარასკევი</button>
         <button class="tablinks" onclick="openday(event, 'Saturday')">შაბათი</button>
         <button class="tablinks" onclick="openday(event, 'Sunday')">კვირა</button>
         <button><a id="go_back" href="index.php">უკან დაბრუნება</a></button>
        </div>

        <div id="Monday" class="tabcontent">
            <table id="customers">
            <tr>
                <th>საათი</th>
            </tr>
            <?php   $select = "SELECT * FROM `orderlist` WHERE `day`='ორშაბათს'";
                    $result = mysqli_query($con,$select);
                    if(mysqli_num_rows($result)){
                        $select = "SELECT * FROM `orderlist` WHERE `day`='ორშაბათს'  ORDER BY `time` ASC ";
                        $result = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['time']." დაკავებულია</td>
                            </tr>";
                        }   
                    }else{
                        echo "<tr>
                            <td>ყველა საათი თავისუფალია</td>
                            </tr>";
                    }

                    
                    ?>
            </table>
        </div>

        <div id="Tuesday" class="tabcontent">
            <table id="customers">
            <tr>
                <th>საათი</th>
            </tr>
            <?php   $select = "SELECT * FROM `orderlist` WHERE `day`='სამშაბათს'";
                    $result = mysqli_query($con,$select);
                    if(mysqli_num_rows($result)){
                        $select = "SELECT * FROM `orderlist` WHERE `day`='სამშაბათს'  ORDER BY `time` ASC ";
                        $result = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['time']." დაკავებულია</td>
                            </tr>";
                        }   
                    }else{
                        echo "<tr>
                            <td>ყველა საათი თავისუფალია</td>
                            </tr>";
                    }

                    
                    ?>
            </table>
        </div>

        <div id="Wednesday" class="tabcontent">
            <table id="customers">
            <tr>
                <th>საათი</th>
            </tr>
            <?php   $select = "SELECT * FROM `orderlist` WHERE `day`='ოთხშაბათს'";
                    $result = mysqli_query($con,$select);
                    if(mysqli_num_rows($result)){
                        $select = "SELECT * FROM `orderlist` WHERE `day`='ოთხშაბათს'  ORDER BY `time` ASC ";
                        $result = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['time']." დაკავებულია</td>
                            </tr>";
                        }   
                    }else{
                        echo "<tr>
                            <td>ყველა საათი თავისუფალია</td>
                            </tr>";
                    }

                    
                    ?>
            </table>
        </div>

        <div id="Thursday" class="tabcontent">
            <table id="customers">
            <tr>
                <th>საათი</th>
            </tr>
            <?php   $select = "SELECT * FROM `orderlist` WHERE `day`='ხუთშაბათს'";
                    $result = mysqli_query($con,$select);
                    if(mysqli_num_rows($result)){
                        $select = "SELECT * FROM `orderlist` WHERE `day`='ხუთშაბათს'  ORDER BY `time` ASC ";
                        $result = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['time']." დაკავებულია</td>
                            </tr>";
                        }   
                    }else{
                        echo "<tr>
                            <td>ყველა საათი თავისუფალია</td>
                            </tr>";
                    }

                    
                    ?>
            </table>
        </div>

        <div id="Friday" class="tabcontent">
            <table id="customers">
            <tr>
                <th>საათი</th>
            </tr>
            <?php   $select = "SELECT * FROM `orderlist` WHERE `day`='პარასკევს'";
                    $result = mysqli_query($con,$select);
                    if(mysqli_num_rows($result)){
                        $select = "SELECT * FROM `orderlist` WHERE `day`='პარასკევს'  ORDER BY `time` ASC ";
                        $result = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['time']." დაკავებულია</td>
                            </tr>";
                        }   
                    }else{
                        echo "<tr>
                            <td>ყველა საათი თავისუფალია</td>
                            </tr>";
                    }

                    
                    ?>
            </table>
        </div>

        <div id="Saturday" class="tabcontent">
            <table id="customers">
            <tr>
                <th>საათი</th>
            </tr>
            <?php   $select = "SELECT * FROM `orderlist` WHERE `day`='შაბათს'";
                    $result = mysqli_query($con,$select);
                    if(mysqli_num_rows($result)){
                        $select = "SELECT * FROM `orderlist` WHERE `day`='შაბათს'  ORDER BY `time` ASC ";
                        $result = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['time']." დაკავებულია</td>
                            </tr>";
                        }   
                    }else{
                        echo "<tr>
                            <td>ყველა საათი თავისუფალია</td>
                            </tr>";
                    }

                    
                    ?>
            </table>
        </div>

        <div id="Sunday" class="tabcontent">
            <table id="customers">
            <tr>
                <th>საათი</th>
            </tr>
            <?php   $select = "SELECT * FROM `orderlist` WHERE `day`='კვირას'";
                    $result = mysqli_query($con,$select);
                    if(mysqli_num_rows($result)){
                        $select = "SELECT * FROM `orderlist` WHERE `day`='კვირას'  ORDER BY `time` ASC ";
                        $result = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>".$row['time']." დაკავებულია</td>
                            </tr>";
                        }   
                    }else{
                        echo "<tr>
                            <td>ყველა საათი თავისუფალია</td>
                            </tr>";
                    }

                    
                    ?>
            </table>
        </div>


    </body>
</html>