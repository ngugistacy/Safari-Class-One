<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<form action="updateProcess.php"method="POST">
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 2/13/19
     * Time: 9:41 AM
     */
    extract($_GET);
    $conn = mysqli_connect("localhost", "root", "", "safari");
    $fetch = mysqli_query($conn,"SELECT * FROM majina WHERE id=$y");
    if (!$fetch){
        echo "Fetching failed";
    }else {
        while ($row = mysqli_fetch_assoc($fetch)) {
            extract($row);
        }
    }
    ?>
    <input type="hidden"name="id"value="<?php echo $id;?>"><br>
    <input type="text"name="name"value="<?php echo $jina;?>"><br>
    <input type="email"name="email"value="<?php echo $arafa;?>"><br>
    <input type="password"name="pass"value="<?php echo $siri;?>"><br>
    <input type="submit"name="btnsubmit"value="Update">
</form>
</body>
</html>