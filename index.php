<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
    <?php
      if (!empty($_POST['civility']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname'])) {
        echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
      } else {
        ?>
        <form action="index.php" method="post">
          <label for="civility">Civilité</label>
          <select name="civility">
              <option selected disabled>Sélectionnez</option>
            <option value="M">M</option>
            <option value="Mme">Mme</option>
          </select>
          <label for="lastname">Nom</label><input type="text" name="lastname">
          <label for="firstname">Prénom</label><input type="text" name="firstname">
          <input type="submit" name="button" value="Valider">
        </form>
        <?php 
      }
     ?>
   </p>
  </body>
</html>
