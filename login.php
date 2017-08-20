<?php include 'includes/nav.inc.php' ?>

<div class="login-wrapper">
        <main class="login-box container">
            <h5>Login</h5>
            <form class="login-form" method="POST">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password" placeholder="Repeat Password"><br /><br />
                <a href="#">Forgot password?</a>
                <input type="submit" name="login" value="Login"><br /><br />
                <span class="recolor-2">or </span><a href="register.php">Create an account</a>
            </form>
        </main>
    </div>

<?php include 'includes/footer.inc.php' ?>