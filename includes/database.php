<?php
    $user = 'web';
    $pass = 'web';

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=web;charset=utf8', $user, $pass);
    } catch (PDOException $e) {
        // attempt to retry the connection after some timeout for example
        echo $e;
    }
?>