<?php
    include_once 'header.php'
?>
            <section class="signup-form">
                <h1>Sign Up</h1>
                <form action="includes/signup.inc.php" method="post"><ul>
                    <li><input type="text" name="name" placeholder="Full name"></li>
                    <li><input type="text" name="email" placeholder="Email"></li>
                    <li><input type="text" name="uid" placeholder="User name"></li>
                    <li><input type="password" name="pwd" placeholder="Password"></li>
                    <li><input type="password" name="pwdrepeat" placeholder="Repeat Password"></li>
                    <li><button type="submit" name="submit">Sign Up</button></li>
                </form></ul>
            </section>

<?php
    include_once 'footer.php'
?> 