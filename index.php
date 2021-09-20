<?php
  // Définir une variable pour indiquer l'identifiant de la page
  $page = 'accueil';

  // Inclure le haut de page commun ici
  include('inclusions/entete.php');
?>
    <div class="contenu-principal">
      <h2><?= $acc_titrePage; ?></h2>
      <p><img src="images/accueil-cuisine.jpg" alt="<?= $acc_introImgAlt; ?>"><?= $acc_introP1; ?></p>
      <p><?= $acc_introP2; ?></p>
    </div>
<?php
  // Inclure le pied de page commun ici
  include('inclusions/pied2page.php');
?>