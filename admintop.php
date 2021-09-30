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
<div class="container mx-auto">
  <div class="row">
    <div class="col-md-6 text-center mx-auto mt-5">
      <button class="btn"><a href="adminroom.php">Room Manager</a></button>
    </div>
    <div class="col-md-6 text-center mx-auto mt-5">
      <button class="btn"><a href="adminitem.php">Item Manager</a></button>
    </div>
  </div>
  <table class="table mt-5 text-center">
    <thead class="thead-dark">
      <th>User_id</th>
      <th>First Name</th>
      <th>Family Name</th>
      <th>E-mail</th>
      <th>Option</th>
    </thead>
    <tbody>
      <?php foreach($userobj->get_user() as $row): ?>
        <tr>
        <td><?php echo $row['user_id'] ?></td>
        <td><?php echo $row['fname'] ?></td>
        <td><?php echo $row['lname'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><a href="deleteuser.php?user_id=<?php echo $row['user_id']?>" class="btn btn-outline-dark">DELETE</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>

  </table>
</div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
  <script type="text/javascript" src="general.js"></script>
</html>


