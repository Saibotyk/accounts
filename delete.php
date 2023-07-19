<?php
require "includes/_database.php";
require "includes/_functions.php";

verifyToken();

$query = $dbCo->prepare("DELETE FROM transaction WHERE id_transaction = :id;");
$isOk = $query->execute([
    "id" => $_GET['id']
]);

header("location: index.php?msg=okDelete");
exit;


?>