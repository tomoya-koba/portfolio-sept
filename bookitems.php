<?php
    include 'action.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Select Items</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php include 'header.php' ?>

</head>
  <body>
  <h2 class="text-center mt-5">Select Items</h2>
    <div class="container mx-auto">
    <div class="row">
        <?php foreach($userobj->itemlist() as $row):
            $item_id = $row['item_id'];
        ?>
 
            <div class="col-md-4">
                <div class="card mt-4">
                    <h2 class="card-header bg-light text-dark">
                        <?php echo $row['item_name'] ?>
                    </h2>
                    <h3 class="card-body">
                        <img src="img/<php echo $row['item_img'].jpg" alt=""> 
                    </h3>
                    <p>
                        <?php echo $row['item_desc'] ?>
                    </p>
                        <a href="item_reserve.php?item_id=<?php echo $row['item_id'] ?>" class="btn btn-info">Reserve Now</a>
                        <img src="img/<php echo $row['item_img'].jpg" alt="">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
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


