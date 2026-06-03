<?php
include_once('config.php');

if (isset($_POST['register'])) {

    $username = $_POST['name'];
    $password = $_POST['mail'];
    $password = $_POST['number'];
    $password = $_POST['password'];
  

    $sql = "INSERT INTO user (name,Email,phone_no password)
            VALUES ('$name',$mail,$number'$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful <br>";
        echo "<a href='login.php'>Go to Login </a>";
    } else {
        echo "Username already exists in system";
    }
}


if (isset($_POST['login'])) {

    $username = $_POST['name'];
    $password = $_POST['mail'];

    $sql = "SELECT * FROM user
            WHERE name='$name' AND Email='$mail'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['name'] = $name;
        $_SESSION['Email'] = $mail;

        setcookie("name", $name, time()+3600, "/");
        setcookie("Email", $mail, time()+3600, "/");

        header("Location: dashboard.php");
    } else {
        echo "Invalid Username or Password";
    }
}
?>
