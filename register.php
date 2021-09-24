<?php 
    include 'classes/Users.php';
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

  <div class="container-fluid text-light bg-dark" style="height:80px">
    TEST Header
  </div>

  </head>
  <body>
    <div class="container mt-5">
      <form action="action.php" method="post">
        <input type="text" name="fname" class="form-control" placeholder="Your First name">
        <input type="text" name="lname" class="form-control" placeholder="Your Last name">
        <input type="password" name="pw" class="form-control" placeholder="Password">
        <input type="password" name="pw" class="form-control" placeholder="Confirm Password">
        <input type="text" name="email" class="form-control" placeholder="Your E-mail">
        <button type="submit" name="register" class="btn btn-primary">Register</button>
      </form>
</div>



<footer>
    <?php include 'footer.php' ?>
  </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>