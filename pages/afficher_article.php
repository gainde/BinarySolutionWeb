<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="./js/pagination.js"></script>
<!-- the input fields that will hold the variables we will use -->  
<input type='hidden' id='current_page' />  
<input type='hidden' id='show_per_page' />  
<div class="contentArticle">
<?php
require 'articles.php'; // J'inclus la classe.
$nbr_articles = count($listArticles);
foreach($listArticles as $data_article)
{
	echo'<div class="articlePreview"><span class="texte_preview"><img src='.$data_article->getImage().' class="imagePosition"/>'.$data_article->getTitre().'<br/>'.$data_article->getDescription().'</span><a href="'.$data_article->getContenu(). '" class=" ajax bouton_article">Voir l\'article</a>
</div>';
}
?>
</div>
<div id='page_navigation'></div> 