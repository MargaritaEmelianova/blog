<?php

session_start();
if (isset($_POST['send'])) {
    //sjekk om brukernavn og passord er riktig
    if ($_POST['login'] == "dayaana" && $_POST['password'] == "test123") {
        $_SESSION['firstname'] = ucfirst($_POST['user']);
        $_SESSION['innlogget'] = true;
        include "intern.php";
    } else {
        //kaller opp siden p� nytt igjen, dvs tvinger ny innlogging
        header("Location: {$_SERVER['PHP_SELF']}");
        exit; //hindrer at koden under utf�res p� tross av redirect
    }
}//slutt if, knapp trykket
else {
    //skal vise skjemaet
    ?>
    <h3>You have to sign in</h3>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td>Login:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" size="5"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="send"></td>
            </tr>
        </table>
    </form>
    <?php
}//slutt else
?>