<?php include 'includes/nav.inc.php' ?>

<?php 

if (isset($_POST['login'])) {
    /* User login process, checks if user exists and password is correct */

    // Escape email to protect against SQL injections
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ($result->num_rows == 0) { // User doesn't exist
        $_SESSION['message'] = "User with that email doesn't exist!";
    } else { // User exists
        $user = $result->fetch_assoc();

        if ($_POST['password'] == $user['password'] || password_verify($_POST['password'], $user['password'])) {
            
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['name'];
            $_SESSION['active'] = $user['active'];
            
            // This is how we'll know the user is logged in
            $_SESSION['logged_in'] = true;

            header("location: profile.php");
        } else {
            $_SESSION['wrong_data'] = "You have entered wrong username or password!";
        }
    }
}

?>

<div class="error-wrapper">
    <?php 
    if (!empty($_SESSION['wrong_data'])) {
        echo '<div class="error-box">';
        echo $_SESSION['wrong_data'];
        echo '</div>';
        unset($_SESSION['wrong_data']);
    }
    ?>
</div>
<div class="login-wrapper">
    <main class="login-box container">
        <h5>Login</h5>
        <form class="login-form" method="POST">
            <input type="email" name="email" placeholder="Email*" required>
            <input type="password" name="password" placeholder="Password*" required><br /><br /><br /><br />
            <a href="#">Forgot password?</a>
            <input type="submit" name="login" value="Login"><br /><br />
            <span class="recolor-2">or </span><a href="register.php">Create an account</a>
        </form>
    </main>
</div>

<?php include 'includes/footer.inc.php' ?>