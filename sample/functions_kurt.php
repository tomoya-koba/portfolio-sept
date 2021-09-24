<?php
    include 'Database.php';

//CRUD - Create Read Update Delete

function add_user($fname,$lname,$uname,$pword){        //create
    $connect = db_connect();  //create a variable that will hold the mysql object
    $sql = "INSERT INTO users(fname,lname,username,password)VALUES('$fname','$lname','$username','$password')";  //create a variable that will hold sql string
    $result = $connect->query($sql);  //make the sql string work

    if($result == TRUE){
        echo "user added successfully!";

    }else{
        die('ERROR; '.$connect->error);
    }

}

function get_users(){       //read
    $connect = db_connect();
    $sql = "SELECT * FROM users";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $array = array();  //this will hold all of the data inside the database
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }

        return $array;

    }else{
        return FALSE;
    }
}

function update_user($fname,$lname,$username,$password,$id){     //update
    $connect = db_connect();
    $sql ="UPDATE users 
            SET fname='$name',lname='$lname',username='$username',password='$password' 
            WHERE user_id='$id'";
    $result = $connect -> query($sql);

    if($result == TRUE){
        header('location: userlist.php');
        
    }else{
        die('ERROR '.$connect->errror);
    }

}

function delete_user($id){     //delete
    $connect = db_connect();
    $sql ="DELETE FROM users WHERE user_id = '$id'";
    $result = $connect -> query($sql);

    if($result == TRUE){
        header('location: userlist.php');
        
    }else{
        die('ERROR '.$connect->errror);
    }


}

function get_one_user($id){
    $connect = db_connect();
    $sql = "SELECT * FROM users WHERE user_id='$id'";
    $result = $connect->query($sql);

    if($result->num_rows == 1){
        return $result->fetch_assoc();
    }else{
        echo "No data detected";
    }

}


function add_item($iname,$iprice,$idesc){
    $connect = db_connect();
    $sql = "INSERT INTO items(item_name,item_price,item_desc) 
            VALUES('$iname','$iprice','$idesc')";
    $result = $connect->query($sql);

    if($result == TRUE){
        echo "item added successfully!";

    }else{
        die('ERROR: '.$connect->error);
    }
}

function get_items(){
    $connect = db_connect(); 
    $sql = "SELECT * FROM items";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $array = array();
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }

        return $array;

    }else{
        return FALSE;
    }

}

function update_item($iname,$iprice,$idesc,$item_id){
    $connect = db_connect();
    $sql = "UPDATE items 
            SET item_name='$iname',item_price='$iprice',item_desc='$idesc'
            WHERE item_id='$item_id'";
    $result = $connect->query($sql);
    if($result == TRUE){
        header('location: itemlist.php');

        // echo "new name is ".$iname.".  and new price is ".$iprice;
        // echo "<br>.$item_id";
        // echo "<br>So this function works good.";
        // echo "<br>But why it's not change? I don't know.";

    }else{
        die('ERROR: '.$connect->error);
    }

}

function delete_item($item_id){
    $connect = db_connect();
    $sql = "DELETE FROM items WHERE item_id = '$item_id'";
    $result = $connect->query($sql);

    if($result == TRUE){
        header('location: itemlist.php');

    }else{
        die('ERROR '.$connect->error);
    }
}

function get_one_item($item_id){
    $connect = db_connect();
    $sql = "SELECT * FROM items WHERE item_id='$item_id'";
    $result = $connect->query($sql);

    if($result->num_rows == 1){
        return $result->fetch_assoc();
    }else {
        echo "No item data detected";        
    }

}


function login($username,$password){
    $connect = db_connect();
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $connect->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['firstname'] = $row['fname'];
        $_SESSION['lastname'] = $row['lname'];




        header('location:item_list.php');
    }else{

    }
}

function item_list(){       //read
    $connect = db_connect();
    $sql = "SELECT * FROM items";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $array = array();  //this will hold all of the data inside the database
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }

        return $array;

    }else{
        return FALSE;
    }
}

function add_to_cart($item_id,$user_id){
    $connect = db_connect();
    $sql = "INSERT INTO cart(item_id,user_id) VALUES('$item_id','$user_id')";
    $result = $connect->query($sql);

    if($result == TRUE){
        echo "<div class ='alert alert-success mt-3'>item added to cart</div>";
    }else{
        die('ERROR '.$connect->error);
    }
}


function get_user_cart_items($id){
    $connect = db_connect();
    $sql ="SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE cart.user_id = '$id'";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $array = array(); // this will hold all of the data inside the database
        while($row = $result->fetch_assoc()){
            $array[] = $row;

        }

        return $array;

    }else{
        return FALSE;
    }

}


?>