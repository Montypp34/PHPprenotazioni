<?php
/**
 * Created by PhpStorm.
 * User: Filippo
 * Date: 1/13/2019
 * Time: 2:34 PM
 */
    session_start();
    echo $_SESSION['nome'];
    echo $_SESSION['prenotazioni'];
?>
<html>
    <body>
        <br>
        <a href="form1.html">form</a>
        <a href="azzera.php">azzera</a>
    </body>
</html>
