<?php
    include 'action.php';

    
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php include 'header.php' ?>
    <?php $user_id = $_SESSION['user_id'] ?> 
    <?php $room_id = $_GET['room_id'] ?>
    <?php $reserved_date = $_GET['reserved_date'] ?>

</head>
  <body>
  <h2 class="text-center mt-5 mb-5">Check your reservation</h2>
    <div class="container mx-auto">
        <div class="row mx-auto">
            <form action="" method="post" class="text-center">
                <div class="col-md-12 mx-auto" style="width:40%">room_id:<input type="" name="room_id" value="<?php echo $room_id ?>" class="form-control form-control-lg text-center" readonly></div>
                <div class="col-md-12 mx-auto" style="width:40%">user_id:<input type="" name="user_id" value="<?php echo $user_id ?>" class="form-control form-control-lg text-center" readonly></div>
                <div class="col-md-12 mx-auto" style="width:40%">Reserve Date:<input type="" name="reserved_date" value="<?php echo $reserved_date ?>" class="form-control form-control-lg text-center" readonly></div>
                <p>Display Room name Here (Later...)</p>
                <button type="submit" name="reserve_room" class="btn btn-outline-primary mt-5 mb-5" style="width:40%">Reserve Now!</button>
            </form>
        </div>
    </div>

          
      </div>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

