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

$sql = "SELECT * FROM DureAuto ORDER BY Prijs desc";

$statement = $pdo->prepare($sql);
$statement->execute();

$result = $statement->FetchAll(PDO::FETCH_OBJ);

$rows = "";
foreach ($result as $info) {
  $rows .= "<tr>
              <td>$info->Merk</td>
              <td>$info->Model</td>
              <td>$info->Topsnelheid</td>
              <td>$info->Prijs</td>
              <td>
                  <a href='delete.php?Id=$info->Id'>
                      <img src='img/b_drop.png' alt='kruis'>
                  </a>
              </td>
            </tr>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
    
body {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: rgb(0, 5, 35);
}

table {
    background-color: rgb(25, 0, 63);
    border-collapse: collapse;
    width: 40rem;
}

thead {
    font-size: 1.4rem;
}

th {
    padding: .6rem;
    color: rgb(161, 161, 144);
    font-weight: bold;
}

td {
    padding: .6rem;
    color: rgb(161, 161, 144);
    font-size: 1rem;
}

h3 {
    color: white;
}
</style>
<body>
    <h3>Dure Autos</h3>
    <table border = 1>
        <thead>
            <th>Merk</th>
            <th>Model</th>
            <th>Topsnelheid</th>
            <th>Prijs</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?= $rows; ?>
        </tbody>
    </table>
</body>
</html>