<?php
$host = "kark.uit.no";
$dbname = "stud_v17_emelianova";
$username = "v17_emelianova";
$password = "Cx7HKZnvVDD8Jqkj";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException $e) {
    //throw new Exception($e->getMessage(), $e->getCode);
    print($e->getMessage());
}
?>