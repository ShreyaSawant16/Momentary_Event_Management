<?php include_once('config.php'); ?>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="register-section">
    <form id="register-form" method="post">
        <h2 id="register-title">Register</h2>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-input" placeholder="Name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="Email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone No:</label>
            <input type="text" id="phone" name="phone" class="form-input" placeholder="Phone Number" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-input" placeholder="Password" required>
        </div>

        <button type="submit" name="register" id="register-btn">Register</button>

        <p id="login-link">Already registered? <a href="login.php">Login</a></p>
    </form>

    <?php
    if(isset($_POST['register'])){
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass  = $_POST['password'];

        $check = mysqli_query($conn,"SELECT * FROM user WHERE Email='$email'");
        if(mysqli_num_rows($check) > 0){
            echo "<p class='form-error'>Email already registered</p>";
        } else {

            $insert = mysqli_query($conn,
                "INSERT INTO user (name, Email, phone_no, password)
                 VALUES ('$name','$email','$phone','$pass')"
            );

            if($insert){
                $_SESSION['register_success'] = "Registration successful";
                header("Location: login.php");
                exit();
            } else {
                echo "<p class='form-error'>Registration failed</p>";
            }
        }
    }
    ?>
</div>

</body>
</html>
