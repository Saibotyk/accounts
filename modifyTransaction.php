<?php
require "includes/_database.php";
require "includes/_functions.php";
verifyToken();


$query = $dbCo->prepare("UPDATE transaction SET name = :name, date_transaction = :date, amount = :amount, id_category = :category WHERE id_transaction = :id");
$isOK = $query->execute([
    'name' => strip_tags($_POST['name']),
    'date' => strip_tags($_POST['date']),
    'amount' => floatval(strip_tags($_POST['amount'])),
    'category' => strip_tags($_POST['category']),
    'id' => intval(strip_tags($_POST['id']))
]);

if($isOK){
header("location: index.php?msg=okModify");
exit;
} else {
    header("location: index.php?msg=koModify");
    exit;
}
