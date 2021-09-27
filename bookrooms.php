<?php
    include 'action.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Select Room & Date</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php include 'header.php' ?>
    <?php
            $day0 = date("y-m-d");
            $daymd0 = date("m/d");
        $d1 = strtotime("+1 day");
            $day1 = date("y-m-d",$d1);
            $daymd1 = date("m/d",$d1);
        $d2 = strtotime("+2 days");
            $day2 = date("y-m-d",$d2);
            $daymd2 = date("m/d",$d2);
        $d3 = strtotime("+3 days");
            $day3 = date("y-m-d",$d3);
            $daymd3 = date("m/d",$d3);
        $d4 = strtotime("+4 days");
            $day4 = date("y-m-d",$d4);
            $daymd4 = date("m/d",$d4);
        $d5 = strtotime("+5 days");
            $day5 = date("y-m-d",$d5);
            $daymd5 = date("m/d",$d5);
        $d6 = strtotime("+6 days");
            $day6 = date("y-m-d",$d6);
            $daymd6 = date("m/d",$d6);
    ?>
</head>
<body>
    <h2 class="text-center mt-5">Select Room & Date</h2>
    <h3 class="text-center mt-5">You can make a reservation 7Days in advance</h3>
<?php $user_id = $_SESSION['user_id'] ?> 
<?php $room_id = $_GET['room_id'] ?>
    <div class="container">
  <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                <table class="table mx-auto mt-5 text-center align-middle table-hover bg-white">
                    <thead class="thead-dark">
                        <th>No.</th>
                        <th>Room Name</th>
                        <th>Images</th>
                        <!-- <th class="room_image">Image</th> -->
                        <th><?php echo $daymd0 ?></th>
                        <th><?php echo $daymd1 ?></th> 
                        <th><?php echo $daymd2 ?></th>
                        <th><?php echo $daymd3 ?></th>
                        <th><?php echo $daymd4 ?></th>
                        <th><?php echo $daymd5 ?></th>
                        <th><?php echo $daymd6 ?></th>
                        <th class="text-start">Description</th>
                    </thead>
                    <tbody>
                        <?php foreach($userobj->get_room() as $row): ?>
                        <form action="" method="post">
                            <tr>
                                <td><?php echo $row['room_id'] ?></td>
                                <td><?php echo $row['room_name'] ?></td>
                                
                                <!-- MODAL -->
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalid_<?php echo $row['room_id']?>">
                                     VIEW
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalid_<?php echo $row['room_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" style="width:100%">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="text-center"><?php echo $row['room_name']?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <img src="img/<?php echo $row['room_img'] ?>" alt="" class="img-responsive" style="max-width:100%">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </td>
                                <!-- END of MODAL -->
                                <td><?php echo $userobj->get_vacantroom0($row['room_id'],$day0) ?></td>
                                <td><?php echo $userobj->get_vacantroom1($row['room_id'],$day1) ?></td>
                                <td><?php echo $userobj->get_vacantroom2($row['room_id'],$day2) ?></td>
                                <td><?php echo $userobj->get_vacantroom3($row['room_id'],$day3) ?></td>
                                <td><?php echo $userobj->get_vacantroom4($row['room_id'],$day4) ?></td>
                                <td><?php echo $userobj->get_vacantroom5($row['room_id'],$day5) ?></td>
                                <td><?php echo $userobj->get_vacantroom6($row['room_id'],$day6) ?></td>
                                
                                <td hidden>user_id:<input type="" name="user_id" value="<?php echo $user_id ?>"></td>
                                <td hidden>room_id:<input type="" name="room_id" value="<?php echo $row['room_id'] ?>"></td>
                                <td class="text-start"><?php echo $row['room_desc'] ?></td>
                            </tr>
                        </form>
                        <?php endforeach; ?>
                            <tr>
                            </tr>
                    </tbody>
                    </form>


                </table>
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
  <script type="text/javascript" src="general.js"></script>
</html>


