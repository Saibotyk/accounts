<?php 
require "includes/_head.php";
require "includes/_headerandnav.php"; 
require "includes/_functions.php";
verifyToken();
?>

<div class="container">
        <section class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h1 class="my-0 fw-normal fs-4">Ajouter une opération</h1>
            </div>
            <div class="card-body">

                <form action="addPayment.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom de l'opération *</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Facture d'électricité" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date *</label>
                        <input type="date" class="form-control" name="date" id="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Montant *</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="amount" id="amount" required>
                            <span class="input-group-text">€</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Catégorie</label>
                        <select class="form-select" name="category" id="category">
                            <option value="" selected>Aucune catégorie</option>
                            <option value="1">Habitation</option>
                            <option value="2">Travail</option>
                            <option value="3">Cadeau</option>
                            <option value="4">Numérique</option>
                            <option value="5">Alimentation</option>
                            <option value="6">Voyage</option>
                            <option value="7">Loisir</option>
                            <option value="8">Voiture</option>
                            <option value="9">Santé</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <input type="hidden" name="token" value="<?= $_SESSION['myToken'] ?>">
                        <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
                    </div>
                </form>

            </div>
        </section>
    </div>

    <?php require "includes/_footer.php"; ?>