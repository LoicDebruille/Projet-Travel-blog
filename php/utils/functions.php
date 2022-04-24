<?php
//* on définit ici les fonctions qui seront utiles pour tout notre site web


/**
 * permet de récupérer les données d'un article
 * 
 * exemple d'utilisation : 
 * pour récupérer l'article 1, 
 * $article1 = getArticle(0);
 *
 * @param [integer] $index index de l'article
 * @return [array]
 */
function getArticle($index) {

    require(__DIR__ . '/../../data/data.php');
    return $data[$index];
}