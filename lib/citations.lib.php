<?php
    function citationAleatoire($page, $langue){
    $citationChaineJson = file_get_contents('data/citations-'.$page.'.json');
    $citationsToutes = json_decode($citationChaineJson, true);
    if(isset($citationsToutes[$langue])){
        $citationsLangueChoisie = $citationsToutes[$langue];
    }
    else{
        $citationsLangueChoisie = $citationsToutes['fr'];
    }
    $positionAleatoire = rand(0, count($citationsLangueChoisie)-1);
    
    
    return $citationsLangueChoisie[$positionAleatoire];
    }
?>