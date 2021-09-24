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
    <h2 class="text-center mt-5 mb-5">Welcome!</h2>
      <div class="ads" id="ads">
        <!-- 1st ads item -->
        <div class="ads-items ads-item1">
          <div class="ads-text">
          <h3>Book Our Special Rooms</h3>
          <a href="bookrooms.php">
            <button class="btn btn-success">Check the rooms</button>
          </a>
          </div>
        </div>
        <!-- END -->

        <!-- 2nd ads item -->
        <div class="ads-items ads-item2">
          <div class="ads-text">
          <h3>A lot of free items</h3>
          <a href="bookitems.php">
            <button class="btn btn-primary">Check the items</button>
          </a>
          </div>
        </div>
        <!-- END -->
      </div>



      <!-- <a href="bookrooms.php"><button class="btn btn-primary" style="width:50%; height:60px">Book Rooms</button></a>
              </div>
              <div class="col-md-6 border text-center">
                    <a href="bookitems.php"><button class="btn btn-success" style="width:50%; height:60px">Book Items</button></a>
              </div> -->

          
      </div>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>


