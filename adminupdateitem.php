<?php
    include 'action.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php include 'adminheader.php' ?>
</head>
<body>
<?php $item_id = $_GET['item_id'] ?>
<h2 class="text-center">Old Setting</h2>
<div class="text-center mx-auto">
<?php foreach($userobj->get_itemlist($item_id) as $row): ?>
    <div class="col-md-2 mx-auto text-center">
        <div class="card mt-4 mx-auto text-center">
            <h2 class="card-header bg-light text-dark">
            Item Name:<?php echo $row['item_name'] ?>
            </h2>
            <h3 class="card-body">
            <img src="img/<?php echo $row['item_img']?>" alt="" class="card-img card-img-top"> 
            </h3>
            <p>
            DESC:<?php echo $row['item_desc'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>
</div>

<h2 class="text-center mt-5">New Setting</h2>
<div class="container">
<form action="" method="post">
    <div class="form-floating mb-3 mt-5">
        <input type="text" class="form-control" id="item_id" name="item_id" value="<?php $item_id ?>" hidden>
        <label for="item_id"><?php echo $item_id ?></label>
    </div>
    <div class="form-floating mb-3 mt-5">
        <input type="text" class="form-control" id="item_name" name="item_name"  required>
        <label for="item_name">Item name</label>
    </div>
    <div class="form-floating mb-3 mt-5">
        <input type="file" class="form-control" id="item_img" name="item_img"  required>
        <label for="item_img">Item IMG</label>
    </div>
    <div class="form-floating mb-3 mt-5">
        <input type="text" class="form-control" id="item_desc" name="item_desc"  required>
        <label for="item_desc">Item Desc</label>
    </div>
    <button type="submit" name="adminupdateitem" class="btn btn-success">UPDATE</button>
</form>
</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
  <script type="text/javascript" src="general.js"></script>
</html>


