<?php // Ovaj include mijenja izgled logout widgeta na svakoj stranici. ?>
<li class="login-button  <?php if($_SESSION['location'] == 'login') {echo 'active-link';} ?>"><a href="login.php" onmouseover="mouseOverMenu.playclip()">Login</a>
    <div class="login-widget">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <p>Username:</p>
            <p><input type="text" name="username" placeholder="Username"/></p>
            <p>Password:</p>
            <p><input type="password" name="password" placeholder="Password"/></p>
            <p><input type="submit" value="Log in"/></p>
        </form>
    </div>
</li>