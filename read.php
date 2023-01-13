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
                      <img src='b_drop.png' alt='kruis'>
                  </a>
              </td>
            </tr>";
}
?>