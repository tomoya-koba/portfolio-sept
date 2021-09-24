<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $id = $_GET['user_id'] ?>
    <form action="action.php" method="post">
        <input type="text" name="fname">
        <input type="text" name="lname">
        <input type="text" name="id" value="<?php echo $id ?>">
        <button type="submit" name="update">update</button>


    </form>
</body>
</html>