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
    <?php $room_id = $_GET['room_id'] ?>
<div class="container">
<form action="" method="post">
    <div class="form-floating mb-3 mt-5">
        <input type="text" class="form-control" id="room_id" name="room_id" value="<?php $room_id ?>" hidden>
        <label for="room_id"><?php echo $room_id ?></label>
    </div>
    <div class="form-floating mb-3 mt-5">
        <input type="text" class="form-control" id="room_name" name="room_name"  required>
        <label for="room_name">Room name</label>
    </div>
    <div class="form-floating mb-3 mt-5">
        <input type="file" class="form-control" id="room_img" name="room_img"  required>
        <label for="room_img">Room IMG</label>
    </div>
    <div class="form-floating mb-3 mt-5">
        <input type="text" class="form-control" id="room_desc" name="room_desc"  required>
        <label for="room_desc">Room Desc</label>
    </div>
    <button type="submit" name="adminupdateroom" class="btn btn-success">UPDATE</button>
</form>
</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
  <script type="text/javascript" src="general.js"></script>
</html>


