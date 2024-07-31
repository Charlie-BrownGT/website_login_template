<?php
    include_once 'header.php'
?>
    <br><h1>This is my example blog<br>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
            ?>
        </h1>

<?php
    include_once 'footer.php'
?> 