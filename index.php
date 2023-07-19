<?php
setlocale(LC_TIME, 'french');
require "includes/_database.php";
$query = $dbCo->prepare('SELECT SUM(amount) AS total FROM transaction');
$query->execute();
$total = $query->fetch();
$totalSold = $total['total'];
$date = strftime('%B %Y', time());

require "includes/_functions.php";
$query = $dbCo->prepare('SELECT name, amount, date_transaction, id_category, icon_class FROM transaction JOIN category USING(id_category) WHERE MONTH(date_transaction) = MONTH(NOW()) AND YEAR(date_transaction) = YEAR(NOW()) ORDER BY date_transaction DESC');
$query->execute();
$payments = $query->fetchAll();

$title = "Mois en cours - Mes Comptes";
require "includes/_head.php";
require "includes/_headerandnav.php";
require "includes/_sold.php";
echo getList($payments);





require "includes/_footer.php";
?>
