<?php include_once('config.php'); ?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="login-section">
    <form id="login-form" method="post">
        <h2 id="login-title">Login</h2>

        <?php
        if(isset($_SESSION['register_success'])){
            echo "<p class='form-success'>".$_SESSION['register_success']."</p>";
            unset($_SESSION['register_success']);
        }
        ?>

        <div class="form-group">
            <input type="email" id="login-email" name="email" class="form-input" placeholder="Email" required>
        </div>

        <div class="form-group">
            <input type="password" id="login-password" name="password" class="form-input" placeholder="Password" required>
        </div>

        <button type="submit" name="login" id="login-btn">Login</button>

        <p id="register-link">New user? <a href="register.php">Register</a></p>

        <?php
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $pass  = $_POST['password'];

            $q = mysqli_query($conn,
                "SELECT * FROM user WHERE Email='$email' AND password='$pass'"
            );

            if(mysqli_num_rows($q) == 1){
                $row = mysqli_fetch_assoc($q);
                $_SESSION['user'] = $row['name'];
                header("Location: dashboard.php");
                exit();
            } else {
                echo "<p class='form-error'>Invalid Email or Password</p>";
            }
        }
        ?>
    </form>
</div>

</body>
</html>
