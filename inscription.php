<?php require_once 'include/init.php';

require_once 'include/haut.php'; ?>

<?php
if (isset($_GET['inscrit']) && $_GET['inscrit']) { ?>

    <p>Vous êtes inscrit</p>

<?php } else { ?>

    <p>Renseignez le formulaire</p>
<?php } ?>


<form method="post" action="./traitement.php">


    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" value="<?php echo $_POST['nom'] ?? ''; ?>" <br><br>

    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" <?php echo $_POST['prenom'] ?? ''; ?>" <br><br>

    <label for="mdp">Mot de passe</label>
    <input type="password" id="mdp" name="mdp" <?php echo $_POST['mdp'] ?? ''; ?>" <br><br>

    <label for="civilite">Civilité</label>
    <input type="radio" name="civilite" value="m" checked> Homme
    <input type="radio" name="civilite" value="f" <?php if (isset($_POST['civilite']) && $_POST['civilite'] == 'f') echo 'checked'; ?>> Femme <br><br>

    <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville" value="<?php echo $_POST['mdp'] ?? ''; ?>" <br><br>

    <label for="code_postal">Code postal</label>
    <input type="text" id="code_postal" name="code_postal" value="<?php echo $_POST['mdp'] ?? ''; ?>" <br><br>

    <label for="adresse">Adresse</label>
    <textarea name="adresse" id="adresse"> <?php echo $_POST['adresse'] ?? ''; ?></textarea> <br><br>

    <label for="statut"></label>
    <input type="text"> <br><br>

</form>

<?php require_once 'include/bas.php'; ?>