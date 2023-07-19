<?php
require "includes/_head.php";
require "includes/_headerandnav.php";
require "includes/_functions.php";
verifyToken();

$name = $_GET['name'] ?? '';
$date = $_GET['date'] ?? '';
$amount = $_GET['amount'] ?? '';
$category = intval($_GET['category'] ?? '');
?>

<div class="container">
    <section class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h1 class="my-0 fw-normal fs-4">Modifier une opération</h1>
        </div>
        <div class="card-body">

            <form action="modifyTransaction.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom de l'opération *</label>
                    <input type="text" value="<?= $name ?>" class="form-control" name="name" id="name" placeholder="Facture d'électricité" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date *</label>
                    <input type="date" value="<?= $date ?>" class="form-control" name="date" id="date" required>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Montant *</label>
                    <div class="input-group">
                        <input type="text" value="<?= $amount ?>" class="form-control" name="amount" id="amount" required>
                        <span class="input-group-text">€</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Catégorie</label>
                    <select class="form-select" name="category" id="category">
                        <option value="" selected>Aucune catégorie</option>
                        <option value="1" <?= ($category == 1) ? 'selected' : ''; ?>>Habitation</option>
                        <option value="2" <?= ($category == 2) ? 'selected' : ''; ?>>Travail</option>
                        <option value="3" <?= ($category == 3) ? 'selected' : ''; ?>>Cadeau</option>
                        <option value="4" <?= ($category == 4) ? 'selected' : ''; ?>>Numérique</option>
                        <option value="5" <?= ($category == 5) ? 'selected' : ''; ?>>Alimentation</option>
                        <option value="6" <?= ($category == 6) ? 'selected' : ''; ?>>Voyage</option>
                        <option value="7" <?= ($category == 7) ? 'selected' : ''; ?>>Loisir</option>
                        <option value="8" <?= ($category == 8) ? 'selected' : ''; ?>>Voiture</option>
                        <option value="9" <?= ($category == 9) ? 'selected' : ''; ?>>Santé</option>
                    </select>
                </div>
                <div class="text-center">
                    <input type="hidden" name="token" value="<?= $_REQUEST['token'] ?>">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
                </div>
            </form>

        </div>
    </section>
</div>

<?php require "includes/_footer.php"; ?>