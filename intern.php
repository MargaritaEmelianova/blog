<?php

@session_start();
//@session_start(); //@ gj�r at evt. feilmelding ikke vises
if (isset($_SESSION['innlogget'])) {
    echo "Du er logget inn " . $_SESSION['navn'];
} else {
    include "login.php"; //viser skjema for innlogging
}
?>