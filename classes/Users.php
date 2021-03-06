<?php
    include 'database.php';

    class Users extends Database{


        function register($fname,$lname,$pw,$email){
            $sql = "INSERT INTO Users(fname,lname,pw,email)
                    VALUE('$fname','$lname','$pw','$email')";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                echo "<div class = 'alert alert-success text-center myAlert'>Thank your for your sign up!</div>";
            }else{
                echo "<div class='alert alert-danger>Error: register your account</div>";
            }

        }

        function login($pw,$email){
            $sql = "SELECT * FROM Users 
                    WHERE email='$email' AND pw='$pw'";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1){

                $row = $result->fetch_assoc();
                if($row['status'] == NULL){
                $_SESSION['user_id'] = $row['user_id'];
                header('location:dashboard.php');

                }else{
                    header('location:admintop.php');
                }

            }else{
                echo "<div class='alert alert-danger text-center myAlert'>Wrong E-mail or PW</div>";
            }
        }
        

        // Start of READ AND GET the DATABASE //
        function itemlist(){
             $sql = "SELECT * FROM Items";
            $result= $this->conn->query($sql);
            if($result->num_rows>0){
                $rows = array();
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        function get_itemlist($item_id){
            $sql = "SELECT * FROM Items WHERE item_id='$item_id'";
           $result= $this->conn->query($sql);
           if($result->num_rows>0){
               $rows = array();
               while($row = $result->fetch_assoc()){
                   $rows[] = $row;
               }
               return $rows;
           }
       }


        function get_room(){
            $sql = "SELECT * From Rooms";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                $row = array();
                while($rows = $result->fetch_assoc()){
                    $row[] = $rows;
                }
                return $row;
    
            }else{
                return FALSE;
            }
        }

        function get_1room($room_id){
            $sql = "SELECT * From Rooms WHERE room_id='$room_id'";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                $row = array();
                while($rows = $result->fetch_assoc()){
                    $row[] = $rows;
                }
                return $row;
    
            }else{
                return FALSE;
            }
        }

        function get_user(){
            $sql = "SELECT * From Users";
            $result = $this->conn->query($sql);

            if($result->num_rows>0){
                $row = array();
                while($rows = $result->fetch_assoc()){
                    $row[] = $rows;
                }
                return $row;
    
            }else{
                return FALSE;
            }
        }


        function get_roomname($room_id){
            $sql = "SELECT room_name FROM Rooms WHERE room_id='$room_id'";
            $result = $this->conn->query($sql);
            
            if($result->num_rows>0){
                $row = array($room_id);
                while($rows = $result->fetch_assoc()){
                    $row[] = $rows;
                }
                return $row;
    
            }else{
                return FALSE;
            }
        }

        function readroom($user_id){
            $today = DATE('y-m-d');
            $sql = "SELECT * FROM Reserved_room INNER JOIN Rooms ON Reserved_room.room_id = Rooms.room_id 
                    WHERE Reserved_room.user_id = '$user_id' AND Reserved_room.reserved_date > '$today'
                    ORDER BY reserved_date ASC";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0 ){
                $array = array();
                while($row = $result->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }else{
                echo "<h2 class='alert alert-danger text-center'>You have no Books</h2>";
            }
        }

        function readroom_expired($user_id){
            $today = DATE('y-m-d');
            $sql = "SELECT * FROM Reserved_room INNER JOIN Rooms ON Reserved_room.room_id = Rooms.room_id 
                    WHERE Reserved_room.user_id = '$user_id' AND Reserved_room.reserved_date < '$today'
                    ORDER BY reserved_date ASC";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0 ){
                $array = array();
                while($row = $result->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }else{
                echo "<h2 class='alert alert-danger text-center'>You have no Books</h2>";
            }
        }

        function readroom_all($user_id){
            $sql = "SELECT * FROM Reserved_room INNER JOIN Rooms ON Reserved_room.room_id = Rooms.room_id 
                    WHERE Reserved_room.user_id = '$user_id'
                    ORDER BY reserved_date ASC";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0 ){
                $array = array();
                while($row = $result->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }else{
                echo "<h2 class='alert alert-danger text-center'>You have no Books</h2>";
            }
        }



        function readitem($user_id){
            $today = DATE('y-m-d');
            $sql = "SELECT * FROM Rentaled_item INNER JOIN Items ON Rentaled_item.item_id = Items.item_id 
                    WHERE Rentaled_item.user_id = '$user_id' AND Rentaled_item.rental_end > '$today'
                    ORDER BY rental_end ASC";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0 ){
                $array = array();
                while($row = $result->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }else{
                echo "<h2 class='alert alert-danger text-center'>You have no Books</h2>";
            }
        }

        function readitem_expired($user_id){
            $today = DATE('y-m-d');
            $sql = "SELECT * FROM Rentaled_item INNER JOIN Items ON Rentaled_item.item_id = Items.item_id 
                    WHERE Rentaled_item.user_id = '$user_id' AND Rentaled_item.rental_end < '$today'
                    ORDER BY rental_end ASC";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0 ){
                $array = array();
                while($row = $result->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }else{
                echo "<h2 class='alert alert-danger text-center'>You have no Books</h2>";
            }
        }

        function readitem_all($user_id){
            $sql = "SELECT * FROM Rentaled_item INNER JOIN Items ON Rentaled_item.item_id = Items.item_id 
                    WHERE Rentaled_item.user_id = '$user_id'
                    ORDER BY rental_end ASC";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0 ){
                $array = array();
                while($row = $result->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }else{
                echo "<h2 class='alert alert-danger text-center'>You have no Books</h2>";
            }
        }

        // End of READ AND GET //


        // Start of DELETE //

        function deleteroom($user_id,$rentalroom_id){
            $sql = "DELETE FROM Reserved_room WHERE user_id = '$user_id' AND rentalroom_id = '$rentalroom_id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:mypage.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }



        function deleteuser($user_id){
            $sql = "DELETE FROM Users WHERE user_id = '$user_id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:admintop.php');
                echo "<div class = 'alert alert-success text-center deleteAlert'>DELETE</div>";
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }


        function deleteitem($user_id,$rentalitem_id){
            $sql = "DELETE FROM Rentaled_item WHERE user_id = '$user_id' AND rentalitem_id = '$rentalitem_id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:mypage.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        // End of DELETE //


        //get vacantroom //
        function get_vacantroom0($room_id,$reserved_date){

            $sql = "SELECT * FROM Reserved_room WHERE room_id='$room_id' AND reserved_date='$reserved_date'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return "-";
                
            }else{
                return "<button class='btn btn-primary rounded-pill' name='day0'>book</button>";
            }
        }

        function get_vacantroom1($room_id,$reserved_date){

            $sql = "SELECT * FROM Reserved_room WHERE room_id='$room_id' AND reserved_date='$reserved_date'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return "-";
                
            }else{
                return "<button class='btn btn-primary rounded-pill' name='day1'>book</button>";
            }
        }
        function get_vacantroom2($room_id,$reserved_date){

            $sql = "SELECT * FROM Reserved_room WHERE room_id='$room_id' AND reserved_date='$reserved_date'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return "-";
                
            }else{
                return "<button class='btn btn-primary rounded-pill' name='day2'>book</button>";
            }
        }
        function get_vacantroom3($room_id,$reserved_date){

            $sql = "SELECT * FROM Reserved_room WHERE room_id='$room_id' AND reserved_date='$reserved_date'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return "-";
                
            }else{
                return "<button class='btn btn-primary rounded-pill' name='day3'>book</button>";
            }
        }
        function get_vacantroom4($room_id,$reserved_date){

            $sql = "SELECT * FROM Reserved_room WHERE room_id='$room_id' AND reserved_date='$reserved_date'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return "-";
                
            }else{
                return "<button class='btn btn-primary rounded-pill' name='day4'>book</button>";
            }
        }
        function get_vacantroom5($room_id,$reserved_date){

            $sql = "SELECT * FROM Reserved_room WHERE room_id='$room_id' AND reserved_date='$reserved_date'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return "-";
                
            }else{
                return "<button class='btn btn-primary rounded-pill' name='day5'>book</button>";
            }
        }
        function get_vacantroom6($room_id,$reserved_date){

            $sql = "SELECT * FROM Reserved_room WHERE room_id='$room_id' AND reserved_date='$reserved_date'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return "-";
                
            }else{
                return "<button class='btn btn-primary rounded-pill' name='day6'>book</button>";
            }
        }
        // END of vacantroom //


        // Start of RESERVATION // 
        function reserved_room($user_id,$room_id,$reserved_date){
            $sql = "INSERT INTO Reserved_room(user_id,room_id,reserved_date) VALUES ('$user_id','$room_id','$reserved_date')";
            $result = $this->conn->query($sql);

           if($result == TRUE){
                header('location:thanks.php?user_id='.$user_id.'');
               
           }else{
            die("ERROR: ".$this->conn->error);
           }
        }

        function reserved_item($user_id,$item_id,$rental_start,$rental_end){
            $endday = strtotime($rental_end);
            $startday = strtotime($rental_start);
            $date = ($endday - $startday)/(60*60*24);

            if($date < 8){
                $sql = "SELECT * FROM Rentaled_item 
                        WHERE item_id='$item_id' 
                        AND(('$rental_start' BETWEEN rental_start AND rental_end)
                        OR ('$rental_end' BETWEEN rental_start AND rental_end)
                        OR ('$rental_start' < rental_start AND '$rental_end' > rental_end))";
                $result = $this->conn->query($sql);

                if($result->num_rows > 0){
                    echo "<h2 class='alert alert-danger text-center itemAlert'>Sorry that day was full...</h2>";

                }else{
                    $sql1 = "INSERT INTO Rentaled_item(user_id,item_id,rental_start,rental_end) 
                            VALUES ('$user_id','$item_id','$rental_start','$rental_end')";
                    $result1 = $this->conn->query($sql1);

                    if($result1 == TRUE){
                        header('location:thanks.php?user_id='.$user_id.'');
                    
                }else{
                    die("ERROR: ".$this->conn->error);
                }
                }
            }else{
                echo "<h2 class='alert alert-danger text-center itemAlert'>You choose ".$date." Days!<br>Please book within 7 Days.</h2>";
                
            }
        }

        
        function day0($day0,$room_id){
            $sql = "SELECT * FROM Reserved_room WHERE reserved_date='$day0' AND room_id='$room_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                echo "<div class='alert alert-danger'>Sorry, It is full...</div>";
                
            }else{
                header('location:bookroomnow.php?room_id='.$room_id.'&reserved_date='.$day0.'') ;
            
            }
        }

        function day1($day1,$room_id){
            $sql = "SELECT * FROM Reserved_room WHERE reserved_date='$day1' AND room_id='$room_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                echo "<div class='alert alert-danger'>Sorry, It is full...</div>";
                
            }else{
                header('location:bookroomnow.php?room_id='.$room_id.'&reserved_date='.$day1.'') ;
            
            }
        }

        function day2($day2,$room_id){
            $sql = "SELECT * FROM Reserved_room WHERE reserved_date='$day2' AND room_id='$room_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                echo "<div class='alert alert-danger'>Sorry, It is full...</div>";
                
            }else{
                header('location:bookroomnow.php?room_id='.$room_id.'&reserved_date='.$day2.'') ;
            
            }
        }

        function day3($day3,$room_id){
            $sql = "SELECT * FROM Reserved_room WHERE reserved_date='$day3' AND room_id='$room_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                echo "<div class='alert alert-danger'>Sorry, It is full...</div>";
                
            }else{
                header('location:bookroomnow.php?room_id='.$room_id.'&reserved_date='.$day3.'') ;
            
            }
        }

        function day4($day4,$room_id){
            $sql = "SELECT * FROM Reserved_room WHERE reserved_date='$day4' AND room_id='$room_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                echo "<div class='alert alert-danger'>Sorry, It is full...</div>";
                
            }else{
                header('location:bookroomnow.php?room_id='.$room_id.'&reserved_date='.$day4.'') ;
            
            }
        }

        function day5($day5,$room_id){
            $sql = "SELECT * FROM Reserved_room WHERE reserved_date='$day5' AND room_id='$room_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                echo "<div class='alert alert-danger'>Sorry, It is full...</div>";
                
            }else{
                header('location:bookroomnow.php?room_id='.$room_id.'&reserved_date='.$day5.'') ;
            
            }
        }

        function day6($day6,$room_id){
            $sql = "SELECT * FROM Reserved_room WHERE reserved_date='$day6' AND room_id='$room_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                echo "<div class='alert alert-danger'>Sorry, It is full...</div>";
                
            }else{
                header('location:bookroomnow.php?room_id='.$room_id.'&reserved_date='.$day6.'') ;
            
            }
        }

        // End of RESERVATION // 

        // Start of Admin //
        function admindeleteroom($room_id){
            $sql = "DELETE FROM Rooms WHERE room_id = '$room_id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:adminroom.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        function admindeleteitem($item_id){
            $sql = "DELETE FROM Items WHERE item_id = '$item_id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:adminitem.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        function adminUpdateRoom($room_id,$room_name,$room_img,$room_desc){
            $sql = "UPDATE Rooms SET room_name='$room_name',room_img='$room_img',room_desc='$room_desc' WHERE room_id='$room_id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:adminroom.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        function adminUpdateItem($item_id,$item_name,$item_img,$item_desc){
            $sql = "UPDATE Items SET item_name='$item_name',item_img='$item_img',item_desc='$item_desc' WHERE item_id='$item_id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:adminroom.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }



    }
?>