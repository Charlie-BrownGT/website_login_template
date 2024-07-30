<?php
    include_once 'header.php'
?>
            <section class="signup-form">
                <h1>Login</h1>
                <form action="includes/login.inc.php" method="post"><ul>
                    <li><input type="text" name="name" placeholder="Username/email"></li>
                    <li><input type="password" name="pwd" placeholder="Password"></li>
                    <li><button type="submit" name="submit">Login</button></li>
                </form></ul>
            </section>

<?php
    include_once 'footer.php'
?> 