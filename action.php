<?php 
    include 'classes/Users.php';
    $userobj = new Users;

        if(isset($_POST['register'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pw = $_POST['pw'];
            $pw2 = $_POST['pw2'];
            $email = $_POST['email'];
    
            if($pw === $pw2){
                $pw = md5($_POST['pw']);
                $userobj->register($fname,$lname,$pw,$email);
            }else{
                echo "<div class = 'alert alert-danger text-center myAlert'>Wrong password</div>";
            }


        }elseif(isset($_POST['login'])){
            $pw = md5($_POST['pw']);
            $email = $_POST['email'];
    
            $userobj->login($pw,$email);

        }elseif(isset($_POST['reserve_item'])){
            $user_id = $_POST['user_id'];
            $item_id = $_POST['item_id'];
            $rental_start = $_POST['rental_start'];
            $rental_end = $_POST['rental_end'];

            $date1 = date($rental_start);
            $date2 = date($rental_end);

            // echo $date1;
            // echo $date2;

            if($date1>$date2){
                echo "<h2 class='alert alert-danger text-center itemAlert'>Error:You choose wrong date (End Date is earlier than Start Date)</h2>";

            }else{
                $userobj->reserved_item($user_id,$item_id,$rental_start,$rental_end);
            }

        }elseif(isset($_POST['reserve_room'])){
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $reserved_date = $_POST['reserved_date'];

            $userobj->reserved_room($user_id,$room_id,$reserved_date);

            
            
        }elseif(isset($_POST['day0'])){
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $day0 = date("20y-m-d");

            $userobj->day0($day0,$room_id);

        }elseif(isset($_POST['day1'])){
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $day1 = date("20y-m-d",strtotime("+1 day"));

            $userobj->day1($day1,$room_id);

        }elseif(isset($_POST['day2'])){
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $day2 = date("20y-m-d",strtotime("+2 day"));

            $userobj->day2($day2,$room_id);

        }elseif(isset($_POST['day3'])){
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $day3 = date("20y-m-d",strtotime("+3 day"));

            $userobj->day3($day3,$room_id);

        }elseif(isset($_POST['day4'])){
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $day4 = date("20y-m-d",strtotime("+4 day"));

            $userobj->day4($day4,$room_id);

        }elseif(isset($_POST['day5'])){
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $day5 = date("20y-m-d",strtotime("+5 day"));

            $userobj->day5($day5,$room_id);

        }elseif(isset($_POST['day6'])){
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $day6 = date("20y-m-d",strtotime("+6 day"));

            $userobj->day6($day6,$room_id);

            //End of Room-Reservation System//

            //Start of Admin Function //
        }elseif(isset($_POST['adminupdateroom'])){
            $room_id = $_GET['room_id'];
            $room_name = $_POST['room_name'];
            $room_img = $_POST['room_img'];
            $room_desc = $_POST['room_desc'];

            $userobj->adminUpdateRoom($room_id,$room_name,$room_img,$room_desc);

        }elseif(isset($_POST['adminupdateitem'])){
            $item_id = $_GET['item_id'];
            $item_name = $_POST['item_name'];
            $item_img = $_POST['item_img$item_img'];
            $item_desc = $_POST['item_desc'];

            $userobj->adminUpdateItem($item_id,$item_name,$item_img,$item_desc);

        }

    ?>

    