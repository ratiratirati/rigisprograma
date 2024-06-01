<?php

// მოანემთა ბაზასთან კავშირი

$con = mysqli_connect('localhost','root','','minedatabase');
$msg = "";
$error = "";
session_start();

// ვიზიტის დაჯავშნა მომხმარებლის გვერდი 

if(isset($_POST['request'])){
    
    $firstlastname = $_POST['firstlastname'];
    $mobile = $_POST['mobile'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $rand = rand(1000,100000);

    if($firstlastname != "" and $mobile != "" and  $day != "" and  $time != ""){

        $select = "SELECT * FROM `orderlist` WHERE `day`='$day' and `time`='$time'";
        $result = mysqli_query($con,$select);
        if(!mysqli_num_rows($result)){
            $insert = "INSERT INTO `orderlist` (`firstlastname`,`mobile`,`day`,`time`,`order_number`) VALUES ('$firstlastname','$mobile','$day','$time','#$rand')";
            if(mysqli_query($con,$insert)){
                $msg =  $firstlastname.' წარმატებით მოხდა ვიზიტის დაჯავშვნა '.$day.' '.$time.' საათზე'.' თქვენი ვიზიტის ნომერია: #'.$rand;
            }
        }else{
            $error = "ვიზიტი აღნიშნულ დღეს და აღნიშნულ საათზე სხვა ადამიანს აქვს დაჯავშნილი";
        }

    }
}

// სისტემაში შესვლის ფორმა

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if($username != "" and $password != ""){

        $select = "SELECT * FROM `users` WHERE `username`='$username'";
        $result = mysqli_query($con,$select);
        if(mysqli_num_rows($result)){
        $select = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
        $result = mysqli_query($con,$select);
        if(mysqli_num_rows($result)){
            $_SESSION['username'] = $username;
            header('location: home.php');
        }else{
            $error = "მომხმარებლის პაროლი არასწორია";
        }
    }else{
        $error = "ესეთი მომხმარებელი სისტემაში საერთოდ არ არსებობს";
    }
    }
}


// ვიზიტის გაუქმება

if(isset($_POST['cancel_request'])){

    $order_number = $_POST['order_number'];

    if($order_number != ""){

        $select = "SELECT * FROM `orderlist` WHERE `order_number`='$order_number'";
        $result = mysqli_query($con,$select);
        if(mysqli_num_rows($result)){
            $delete = "DELETE FROM `orderlist` WHERE `order_number`='$order_number'";
            $result = mysqli_query($con,$delete);
            if($result){
                $msg = "წარმატებით მოხდა ვიზიტის გაუქმება";
            }
        }else{
            $error = "ვიზიტის ნომერი არასწორია";
        }
       
    }
}

// სისტემიდან გამოსვლა

if(isset($_GET['logout'])){
    unset($_SESSION['username']);
    session_destroy();
    header('location: login.php');
}

// ვიზიტის დაჯავშნა ადმინის გვერდი 

if(isset($_POST['request_add'])){
    $firstlastname = $_POST['firstlastname'];
    $mobile = $_POST['mobile'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $rand = rand(1000,100000);

    if($firstlastname != "" and $mobile != "" and  $day != "" and  $time != ""){

        $select = "SELECT * FROM `orderlist` WHERE `day`='$day' and `time`='$time'";
        $result = mysqli_query($con,$select);
        if(!mysqli_num_rows($result)){
            $insert = "INSERT INTO `orderlist` (`firstlastname`,`mobile`,`day`,`time`,`order_number`) VALUES ('$firstlastname','$mobile','$day','$time','#$rand')";
            if(mysqli_query($con,$insert)){
                $msg = '<div class="alert alert-success" role="alert">წარმატებით მოხდა ვიზიტის დაჯავშნა '.$day.' '.$time.' საათზე '.$firstlastname.' სთვის <button type="button" style="float:right; margin-top:-9px" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }else{
            $error = '<div class="alert alert-danger" role="alert">ვიზიტი აღნიშნულ დღეს და აღნიშნულ საათზე სხვა ადამიანს აქვს დაჯავშნილი <button type="button" style="float:right; margin-top:-9px" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }

    }
}

// ვიზიტის წაშლა

if(isset($_POST['delete_order'])){
    $order_id = $_POST['order_id'];
    $delete = "DELETE FROM `orderlist` WHERE id='$order_id'";
    if(mysqli_query($con,$delete)){
        $msg = '<div class="alert alert-danger" role="alert">წარმატებით მოხდა ვიზიტის წაშლა<button type="button" style="float:right; margin-top:-9px" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}


// სამუშაო დღის დასრულება

if(isset($_POST['get_endday'])){
    $dayy = $_POST['dayy'];
    $delete = "DELETE FROM `orderlist` WHERE `day`='$dayy'";
    if(mysqli_query($con,$delete)){
        $msg = '<div class="alert alert-success" role="alert">წარმატებით მოხდა სამუშაო დღის დასრულება<button type="button" style="float:right; margin-top:-9px" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}


?>