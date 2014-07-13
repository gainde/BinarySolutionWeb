
<div class="contentArticle">
<div class="articlePreview"><span class="texte_preview"><img src="images/web_cab.jpg" class="imagePosition"/>Pour réaliser le dégradé du bouton « Voir l'article », j'ai utilisé une image de fond représentant le dégradé et j'ai répété cette image horizontalement. Sachez qu'il existe une propriété CSS3 linear-gradient qui permet de réaliser des dégradés sans avoir à recourir à une image de fond. Son usage étant un peu complexe actuellement, j'ai choisi de ne pas l'utiliser dans cet exemple, mais vous pouvez vous documenter à son sujet si vous le souhaitez ! </span><a href="pages/testArticle.php" class="bouton_article ajax">Voir l'article</a>
</div>
<div class="articlePreview"><span class="texte_preview"><img src="images/web_cab.jpg" class="imagePosition"/>Pour réaliser le dégradé du bouton « Voir l'article », j'ai utilisé une image de fond représentant le dégradé et j'ai répété cette image horizontalement. Sachez qu'il existe une propriété CSS3 linear-gradient qui permet de réaliser des dégradés sans avoir à recourir à une image de fond. Son usage étant un peu complexe actuellement, j'ai choisi de ne pas l'utiliser dans cet exemple, mais vous pouvez vous documenter à son sujet si vous le souhaitez ! </span ><a href="#" class="bouton_article">Voir l'article</a>
</div>
<div class="articlePreview"><span  class="texte_preview"><img src="images/web_cab.jpg" class="imagePosition"/>Pour réaliser le dégradé du bouton « Voir l'article », j'ai utilisé une image de fond représentant le dégradé et j'ai répété cette image horizontalement. Sachez qu'il existe une propriété CSS3 linear-gradient qui permet de réaliser des dégradés sans avoir à recourir à une image de fond. Son usage étant un peu complexe actuellement, j'ai choisi de ne pas l'utiliser dans cet exemple, mais vous pouvez vous documenter à son sujet si vous le souhaitez ! </span ><a href="#" class="bouton_article">Voir l'article</a>
</div>
<div class="articlePreview"><span class="texte_preview"><img src="images/web_cab.jpg" class="imagePosition"/>Pour réaliser le dégradé du bouton « Voir l'article », j'ai utilisé une image de fond représentant le dégradé et j'ai répété cette image horizontalement. Sachez qu'il existe une propriété CSS3 linear-gradient qui permet de réaliser des dégradés sans avoir à recourir à une image de fond. Son usage étant un peu complexe actuellement, j'ai choisi de ne pas l'utiliser dans cet exemple, mais vous pouvez vous documenter à son sujet si vous le souhaitez ! </span ><a href="#" class="bouton_article">Voir l'article</a>
</div>
<div class="articlePreview"><span  class="texte_preview"><img src="images/web_cab.jpg" class="imagePosition"/>Pour réaliser le dégradé du bouton « Voir l'article », j'ai utilisé une image de fond représentant le dégradé et j'ai répété cette image horizontalement. Sachez qu'il existe une propriété CSS3 linear-gradient qui permet de réaliser des dégradés sans avoir à recourir à une image de fond. Son usage étant un peu complexe actuellement, j'ai choisi de ne pas l'utiliser dans cet exemple, mais vous pouvez vous documenter à son sujet si vous le souhaitez ! </span ><a href="#" class="bouton_article">Voir l'article</a>
</div>
<div class="articlePreview"><span  class="texte_preview"><img src="images/web_cab.jpg" class="imagePosition"/>Pour réaliser le dégradé du bouton « Voir l'article », j'ai utilisé une image de fond représentant le dégradé et j'ai répété cette image horizontalement. Sachez qu'il existe une propriété CSS3 linear-gradient qui permet de réaliser des dégradés sans avoir à recourir à une image de fond. Son usage étant un peu complexe actuellement, j'ai choisi de ne pas l'utiliser dans cet exemple, mais vous pouvez vous documenter à son sujet si vous le souhaitez ! </span > <a href="#" class="bouton_article">Voir l'article</a>
</div>
</div>
<script>
$(document).ready(function(){
$("a.ajax").click(function() {
$.ajax({
url:$(this).attr("href"),
success: function(retour){
$("div.content").empty().append(retour);
}
});
return false;
});
});		
</script>