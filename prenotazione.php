<?php
/**
 * Created by PhpStorm.
 * User: Filippo
 * Date: 1/13/2019
 * Time: 2:05 PM
 */
    session_start();
    if(isset($_SESSION['prenotazioni']))
    {
        $_SESSION['nome'] = $_POST['evento'];
        $_SESSION['prenotazioni'] = $_SESSION['prenotazioni']+$_POST['num'];
    }else{
        $_SESSION['prenotazioni'] = $_POST['num'];
    }
?>
<html>
<body>
<a href="form1.html">Torna indietro</a>
<a href="listaprenotazioni.php">Lista prenotazioni</a>
</body>
</html>
