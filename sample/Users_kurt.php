<?php 
include 'Database.php';
// inheretance 
class Users extends Database{

    function create($fname,$lname){ //i will do this
        $sql = "INSERT INTO users(fname,lname)VALUES('$fname','$lname')";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('location:dashboard.php');
        }else{
            // echo "error adding new data";
            die("ERROR: ".$this->conn->error);
        }
    }

    function read(){ // i will do this
        $sql ="SELECT * FROM users";
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

    function update($fname,$lname,$id){ // you will do this
        $sql = "UPDATE users SET fname = '$fname', lname='$lname' WHERE user_id='$id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('location:dashboard.php');
        }else{
            // echo "error adding new data";
            die("ERROR: ".$this->conn->error);
        }

    }

    function delete($id){ // i will do this
        $sql = "DELETE FROM users WHERE user_id = '$id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('location:dashboard.php');
        }else{
            // echo "error adding new data";
            die("ERROR: ".$this->conn->error);
        }
    }

    function upload(){ // i will do this

    }

}


?>
