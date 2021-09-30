<!doctype html>
<html lang="en">
  <head>
    <title>My PAGE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <?php include 'header.php' ?>
    <?php include 'action.php' ?>
    <?php $user_id = $_SESSION['user_id'] ?> 
  </head>
  <body>
  <div class="contents">
<h1 class="mx-auto text-center mt-5">Your Reservations</h1>
    
<div class="container mx-auto text-center mb-5"></div>     
<!-- Rooms -->
<h2 class="text-center">Room Booking</h2>
<div class="container mx-auto text-center">
<select  onChange="location.href=value;" class="form-select form-select-lg bg-white mx-auto mb-5" style="width: 20%;">
    <option value="mypage.php" class="text-center">Next Reservations</option>
    <option value="mypage_expired.php" class="text-center" selected>Expired</option>
    <option value="mypage_all.php" class="text-center">All Book History</option>
</select>
</div>



<table class="table table-hover caption-top mx-auto text-center align-middle border bg-white" style="width:65%">
<caption class="text-center">List of your booked rooms</caption>
<thead>
  <td>Room Name</td>
  <td>Booked Date</td>
  <td>Option</td>
</thead>
<tbody>
  <?php foreach($userobj->readroom_expired($user_id) as $row): ?>
    <tr>
      
      <td hidden><?php echo $row['rentalroom_id'] ?></td>
      <td style="width:33%"><?php echo $row['room_name'] ?></td>
      <td style="width:33%"><?php echo $row['reserved_date'] ?></td>
      <td style="width:33%"><a href="deleteroom.php?user_id=<?php echo $row['user_id']?>&rentalroom_id=<?php echo $row['rentalroom_id'] ?>" class="btn btn-warning">Cancel</a></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>

<!-- Items -->
<h2 class="text-center">Item Booking</h2>
<table class="table table-hover caption-top mx-auto text-center align-middle border bg-white" style="width:65%">
<caption class="text-center">List of your booked items</caption>
<thead>
  <td>Item Name</td>
  <td>Rental Start</td>
  <td>Rental End</td>
  <td>Option</td>
</thead>
<tbody>
  <?php foreach($userobj->readitem_expired($user_id) as $row): ?>
    <tr>
      
      <td hidden><?php echo $row['rentalitem_id'] ?></td>
      <td><?php echo $row['item_name'] ?></td>
      <td><?php echo $row['rental_start'] ?></td>
      <td><?php echo $row['rental_end'] ?></td>
      <td><a href="deleteitem.php?user_id=<?php echo $row['user_id']?>&rentalitem_id=<?php echo $row['rentalitem_id'] ?>" class="btn btn-warning">Cancel</a></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>





  <footer>
    <?php include 'footer.php' ?>
  </footer>
  </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>