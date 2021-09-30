<?php 

    include 'action.php';
    echo "<div class = 'alert alert-success text-center deleteAlert'>DELETE</div>";
    $userobj->deleteitem($_GET['user_id'],$_GET['rentalitem_id']);

?>