<?php
  // Définir une variable pour indiquer l'identifiant de la page
  $page = 'menu';

  // Inclure le haut de page commun ici
  include('inclusions/entete.php');

  include('lib/citations.lib.php');

  $citationAleatoire = citationAleatoire($page, $langueChoisie);

  $menuTexte = file_get_contents("data/menu-$langueChoisie.json");

  $menuTableau = json_decode($menuTexte, true);
?>
    <div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
        <blockquote>
         <?= $citationAleatoire['texte']; ?>
          <cite>- <?= $citationAleatoire['auteur']; ?></cite>
        </blockquote>
      </div>
      <div class="carte">
        <?php foreach($menuTableau as $titreSection => $platsSection){ ?>
        <section>
          <h2><?= $titreSection; ?></h2>
          <ul>
            <?php foreach($platsSection as $plat){ ?>
            <li>
              <span><?= $plat["nom"]; ?><br><i><?= $plat["des"]; ?></i></span>
              <span class="prix"><i class="article-menu-portion">(<?= $mnu_portion; ?> <?= $plat["portion"]; ?>)</i><?= $plat["prix"]; ?></span>
            </li>
            <?php } ?>
          </ul>
        </section>
        <?php } ?>
        
        
       
        <section>
          <h2>Desserts</h2>
          <ul>
            <li>
              <span>Poire Louise Bonne pochée au citron doux<br><i>parfait glacé à la Nepeta, crumble de petit épeautre</i></span>
              <span class="prix">13</span>
            </li>
            <li>
              <span>Fleur de cassis de Bourgogne<br><i>chiboust à la vanille et chocolat grand cru de Madagascar</i></span>
              <span class="prix">13</span>
            </li>
            <li>
              <span>Tarte fine aux pommes de Bernard Loiseau<br><i>sorbet pomme verte</i></span>
              <span class="prix">12</span>
            </li>
          </ul>
        </section>
      </div>
    </div>
<?php
  // Inclure le pied de page commun ici
  include('inclusions/pied2page.php');
?>