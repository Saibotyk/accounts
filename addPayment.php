<?php
require "includes/_database.php";
$query = $dbCo->prepare("INSERT INTO transaction (name, date_transaction, amount, id_category) VALUES (:name, :date, :amount, :category)");
$isOK = $query->execute([
    'name' => strip_tags($_POST['name']),
    'date' => strip_tags($_POST['date']),
    'amount' => strip_tags($_POST['amount']),
    'category' => strip_tags($_POST['category'])
]);

header("location: index.php");
exit;
?>