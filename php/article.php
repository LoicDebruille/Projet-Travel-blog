<?php


// Pour utiliser getArticle()
// j'ai besoin d'inclure le code du fichier functions.php
require('utils/functions.php');


// En venant de la page index, on aura un lien : 
//! /article.php?index=2
// Alors, on aura $_GET['index'] qui contiendra la valeur '2'
// et on ira chercher les données de l'article 3

//$article = getArticle(0);

$article = getArticle($_GET['index']);

//* strtotime() est une fonction PHP qui retourne un timestamp, c'est-à-dire un nombre de secondes écoulées depuis le 1er janvier 1970
// Cette fonction presque magique, sait comprendre une date en anglais pour retourner le  timestamp correspondant

$createdTS = strtotime($article['date-robot']);
  //var_dump($createdTS); // 1518220800

$createdHumanReading = date('d F Y', $createdTS);
  //var_dump($createdHumanReading); //'10 February 2018'


include 'inc/header.tpl.php';
include 'inc/article.tpl.php';
include 'inc/footer.tpl.php';
?>