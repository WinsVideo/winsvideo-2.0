<?php 
    // WE ARE SWITCHING TO PDO! NO MORE MYSQLI_ AND ALL THAT
    $host = '';
    $db   = '';
    $user = '';
    $pass = '';
    
    $dsn = "mysql:host=$host;dbname=$db;";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
         $conn = new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
         throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
?>