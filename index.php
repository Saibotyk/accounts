<?php

setlocale(LC_TIME, 'french');
require "includes/_database.php";
$query = $dbCo->prepare('SELECT SUM(amount) AS total FROM transaction');
$query->execute();
$total = $query->fetch();
$totalSold = $total['total'];
$date = strftime('%B %Y', time());

require "includes/_functions.php";
$_SESSION['myToken'] = md5(uniqid(mt_rand(), true));


$query = $dbCo->prepare('SELECT id_transaction, name, amount, date_transaction, id_category, icon_class FROM transaction LEFT JOIN category USING(id_category) WHERE MONTH(date_transaction) = MONTH(NOW()) AND YEAR(date_transaction) = YEAR(NOW()) ORDER BY date_transaction DESC');
$query->execute();
$payments = $query->fetchAll();

$title = "Mois en cours - Mes Comptes";
require "includes/_head.php";
require "includes/_headerandnav.php";
echo getPopupText($popupMsg);
require "includes/_sold.php";
echo getList($payments);


require "includes/_navbar.php";
require "includes/_footer.php";
?>
