<?php 
    // include 'classes/Users.php';
    include 'action.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Welcome</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="general.css">




  </head>
  <body class="home">
    <div class="contents">
  <header>
  <?php include 'header.php' ?>
  </header>
      <div class="container" class="mx-auto mt-5 mb-5">
        <div class="row mb-5 p-5"  >
          <!-- Register -->
          <div class="col-md-6 mt-5 bg-white text-center rounded-3">
            <h3 class="m-3">Register Your Account</h3>
            <form action="" method="post" class="row">
              <div class="col-md-6 form-floating mb-3">
                <input type="text" class="form-control" id="fname" name="fname" required>
                <label for="fname">Firstname</label>
              </div>
              <div class="col-md-6 form-floating mb-3">
                <input type="text" class="form-control" id="lname" name="lname" required>
                <label for="fname">Familyname</label>
              </div>
              
              <div class="col-md-12 form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="fname">E-mail</label>
              </div>

              <div class="col-md-6 form-floating mb-3">
                <input type="password" class="form-control" id="pw" name="pw" required>
                <label for="pw">Password</label>
              </div>
              <div class="col-md-6 form-floating mb-3">
                <input type="password" class="form-control" id="pw2" name="pw2" required>
                <label for="pw2">Enter Password Again</label>
              </div>

                <button type="submit" name="register" class="btn btn-primary mb-3 mx-auto" style="width:80%">Register</button>
            </form>
          </div>
          <!-- Login -->
          <div class="col-md-6 mt-5 bg-white text-center border-start rounded-3">
          <h3 class="m-3">You have Account?</h3>
            <form action="" method="post" class="row">
              <div class="col-md-12 form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" >
                <label for="loginemail">E-mail</label>
              </div>

              <div class="col-md-12 form-floating mb-3">
                <input type="pw" class="form-control" id="pw" name="pw">
                <label for="loginpw">Password</label>
              </div>
              <div class="mt-3"></div>
              <div class="mt-2"></div>
              <button type="submit" class="btn btn-success mt-5 mb-3 mx-auto" style="width:80%" name="login">Login</button>
          
          
          </form>
          </div>



        </div>


      </div>
  <footer>
    <?php include 'footer.php' ?>
  </footer>
  </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>