<?php
    $conn = mysqli_connect("localhost", "root", "", "project");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = stripcslashes($username);
    $password = stripcslashes($password);



    $sql = "SELECT * FROM registration WHERE r_username = '$username' and r_password = '$password'";
    $result = $conn->query($sql);

    //$result = mysqli_query($conn, "SELECT * FROM registration WHERE r_username = '$username' and r_password = '$password'");
    //die("Failed to query Database" . mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    if ($row['r_username'] == $username && $row['r_password'] == $password) {
        header("Location: home.php");
        exit();
    } else {
        echo "Failed to login!";
    }
    ?>