<?php
    $contenuDossier = scandir('textes');

    for($i = 2; $i < count($contenuDossier); $i++){
        if($contenuDossier[$i] != '.' && $contenuDossier[$i] !='..'){
       echo $contenuDossier[$i];
       echo '<br>';
        }
    }
?>