<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-6">
                    <!-- create form -->
                        <form action="action.php" method="post" class="mt-5 w-50 mx-auto">
                            <input type="text" name="fname" id="" class="form-control">
                            <input type="text" name="lname" id="" class="form-control mt-3">
                            <button type="submit" name="create" class="btn btn-info mt-3">Submit</button>
                           
                        </form>
              </div>
              <div class="col-6">
                     <!-- display table -->
                     <?php
                     include 'action.php';
                    //  print_r($userobj->read()); ?>
                        <table class="table table-info table-hover mt-5">
                            <thead>
                                <td>Firstname</td>
                                <td>Lastname</td>
                                <td>User Image</td>
                                <td colspan="3">Options</td>
                            </thead>
                            <tbody>
                              <?php foreach($userobj->read() as $row): ?>
                                <tr>
                                  <td><?php echo $row['fname'] ?></td>
                                  <td><?php echo $row['lname'] ?></td>
                                  <td><?php echo $row['img'] ?></td>
                                  <td><a href="delete.php?user_id=<?php echo $row['user_id']?>" class="btn btn-danger">Delete</a></td>
                                  <td><a href="update.php?user_id=<?php echo $row['user_id']?>" class="btn btn-info">update</a></td>
                                  <td><a href="upload.php?user_id=<?php echo $row['user_id']?>" class="btn btn-info">Upload</a></td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>
              </div>
          </div>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>