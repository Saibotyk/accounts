<?php
require "includes/_database.php";
require "includes/_functions.php";
$query = $dbCo->prepare('SELECT name, amount, date_transaction FROM transaction ORDER BY amount DESC');
$query->execute();
$payments = $query->fetchAll();

$title = "Juillet";
require "includes/_head.php";
require "includes/_headerandnav.php";
require "includes/_sold.php";
echo getList($payments);





require "includes/_footer.php";
?>