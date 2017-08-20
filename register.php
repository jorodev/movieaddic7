<?php include 'includes/nav.inc.php' ?>

    <div class="register-wrapper">
        <main class="register-box container">
            <h5>Register</h5>
            <form class="register-form" method="POST">
                <input type="text" name="username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password" placeholder="Repeat Password">
                <input type="submit" name="register" value="Register"><br /><br />
            </form>
        </main>
    </div>

<?php include 'includes/footer.inc.php' ?>