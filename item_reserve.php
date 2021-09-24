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
  </head>
  <body>
    <?php $user_id = $_SESSION['user_id'] ?> 
    <?php $item_id = $_GET['item_id'] ?>

    <div class="container mx-auto mt-5">
        <div class="row mx-auto">
            <form action="" method="post" class="text-center">
            <h2>Rental Start</h2>
                <div class="col-md-12 mx-auto" style="width:40%">
                  <input type="date" name="rental_start" class="form-control form-control-lg text-center">
                </div>
            <h2>Rental End</h2>
                <div class="col-md-12 mx-auto" style="width:40%">
                  <input type="date" name="rental_end" class="form-control form-control-lg text-center">
                </div>
                <p>For Debug:</p>
                item_id:
                <input type="" name="item_id" value="<?php echo $item_id ?>" style="width:30%" class="text-center">
                <br>
                user_id:
                <input type="" name="user_id" value="<?php echo $user_id ?>" style="width:30%"class="text-center">
                <br>
                <button type="submit" name="reserve_item" class="btn btn-outline-primary mt-5 mb-5" style="width:40%">
                  Reserve Now!
                </button>
            </form>
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