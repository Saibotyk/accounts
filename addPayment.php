<?php
require "includes/_database.php";
require "includes/_functions.php";
verifyToken();
$query = $dbCo->prepare("INSERT INTO transaction (name, date_transaction, amount, id_category) VALUES (:name, :date, :amount, :category)");
$isOK = $query->execute([
    'name' => strip_tags($_POST['name']),
    'date' => strip_tags($_POST['date']),
    'amount' => floatval(strip_tags($_POST['amount'])),
    'category' => strip_tags($_POST['category'])
]);

if($isOK){
    header("location: index.php?msg=okAdd");
    exit;
    } else {
        header("location: index.php?msg=koAdd");
        exit;
    }
?>