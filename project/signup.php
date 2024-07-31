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

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose a proper email</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords do not match</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up</p>";
            }
        }
        ?>
    </section>

<?php
    include_once 'footer.php'
?> 