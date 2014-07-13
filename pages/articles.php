<?php
require('Article.class.php'); // J'inclus la classe.
$listArticles = array();
$document_xml = new DomDocument(); // Instanciation de la classe DomDocument : création d'un nouvel objet
$indice = 0; // Initialisation de l'indice du tableau
$document_xml->load('../ressources/articles.xml'); // Chargement à partir de articles.xml
$elements = $document_xml->getElementsByTagName('article');
//$element = $elements->item(0); // On obtient le nœud articles
//$enfants = $elements->childNodes; // On récupère les nœuds enfants de zcode avec childNodes
              
foreach($elements as $enfant) // On prend chaque nœud enfant séparément
{
	
			$titre = $enfant->getElementsByTagName('titre')->item(0)->nodeValue;
			$auteur = $enfant->getElementsByTagName('auteur')->item(0)->nodeValue;
			$description = $enfant->getElementsByTagName('description')->item(0)->nodeValue;
			$date = $enfant->getElementsByTagName('date')->item(0)->nodeValue;
			$contenu = $enfant->getElementsByTagName('contenu')->item(0)->nodeValue;
			$image = $enfant->getElementsByTagName('image')->item(0)->nodeValue;
			$unArticle = new Article($titre,$auteur,$description,$date, $contenu, $image);
			$listArticles[$indice]=$unArticle;
			$indice = $indice + 1;
      }
?>