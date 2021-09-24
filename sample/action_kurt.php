<?php 
include 'classes/Users.php';
$userobj = new Users;

if(isset($_POST['create'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $userobj->create($fname,$lname);

}elseif(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $userobj->update($fname,$lname,$id);
}


?>