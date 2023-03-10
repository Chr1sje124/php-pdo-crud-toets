<?php

$dsn = "mysql:host=localhost;dbname=php-pdo-crud-toets;charset=UTF8";

try {
    $pdo = new PDO($dsn, 'root', '');
    if ($pdo) {
        // return $pdo;
    } else {
        echo "Interne server-error";
    }
} catch(PDOException $e) {
    $e->getMessage();
}

$sql = "DELETE FROM DureAuto WHERE Id = :Id";

$statement = $pdo->prepare($sql);

$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

$result = $statement->execute();

if ($result) {
    echo "<body style='background-color:rgb(0, 5, 35)'>";
    echo "<h1 style='color: white'>";
    echo "Het record is succesvol verwijderd";
    header('Refresh:1; url=read.php');
} else {
    echo "<body style='background-color:rgb(0, 5, 35)'>";
    echo "<h1 style='color: white'>";
    echo "Het record is niet verwijderd";
    header('Refresh:1; url=read.php');
}
