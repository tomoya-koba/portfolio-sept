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
<div class="container mx-auto mt-5">
    <div class="row">
        <table class="table table-bordered admintable align-middle bg-white">
            <thead class="thead-light text-center">
                <th>Room id</th>
                <th>Room Name</th>
                <th>Room Img</th>
                <th>Desc</th>
                <th>Delete</th>
                <th>Update</th>
            </thead>
            <tbody class="text-center"> 
                <?php foreach($userobj->get_room() as $row): ?>
                    <?php $img = $row['room_img'] ?> 
                        <tr>
                            <td><?php echo $row['room_id'] ?></td>
                            <td><?php echo $row['room_name'] ?></td>
                            <td><img src="img/<?php echo $img ?>" alt="" class="adminroomimg"></td>
                            <td><?php echo $row['room_desc'] ?></td>
                            <td><a href="admindeleteroom.php?room_id=<?php echo$row['room_id']?>" class="btn btn-danger">DELETE</a></td>
                            <td><a href="adminupdateroom.php?room_id=<?php echo$row['room_id']?>" class="btn btn-warning">UPDATE</a></td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
  <script type="text/javascript" src="general.js"></script>
</html>


