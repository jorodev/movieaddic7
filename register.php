<?php include 'includes/nav.inc.php' ?>

<?php 
    if (isset($_POST['register'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['username'] = $_POST['username'];

        $name = $mysqli->escape_string($_POST['username']);
        $email = $mysqli->escape_string($_POST['email']);
        $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
        $hash = $mysqli->escape_string(md5( rand(0, 1000)));

        $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error);

        if ($result->num_rows > 0) {
            $_SESSION['message'] = 'User with this email already exists!';
        } else {
            $sql = "INSERT INTO users (name, email, password, hash)" 
                    . "VALUES ('$name','$email','$password', '$hash')";

            if ($mysqli->query($sql)){
                $_SESSION['active'] = 0;
                $_SESSION['logged_in'] = true;
                $_SESSION['message'] = "You're now logged in!";

                header("location: profile.php"); 
            }

            else {
                $_SESSION['message'] = 'Registration failed!';
            }
        }
    }
?>

<div class="error-wrapper">
    <?php 
        if (!empty($_SESSION['message'])) {
            echo '<div class="error-box">';
            echo '<p>' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
            echo '</div>';
        }
    ?>
</div>
<div class="register-wrapper">
    <main class="register-box container">
        <h5>Register</h5>
        <form class="register-form" method="POST">
            <input type="text" name="username" placeholder="Username*" required>
            <input type="email" name="email" placeholder="Email*" required>
            <input type="password" name="password" placeholder="Password*" required>
            <input type="submit" name="register" value="Register"><br /><br />
            <span class="recolor-2">or </span><a href="login.php">Login</a>
        </form>
    </main>
</div>

<?php include 'includes/footer.inc.php' ?>