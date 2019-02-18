<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:49 AM
 */

if (isset($_POST['btnsubmit'])) {
    $name = $_POST['x'];
    $email = $_POST['y'];
    $password = $_POST['z'];
    $encrpassword = md5($password);

    $conn = mysqli_connect("localhost", "root", "", "safari");
    if (!$conn) {
        echo "Failed to connect to the DB";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null ,'$name','$email','$encrpassword')");
        if (!$insert) {
            echo "Failed to save";
        } else {
            echo " $name Saved successfully";
            echo "<a href='userSave.php'>Add User</a>";
        }
    }
}
?>