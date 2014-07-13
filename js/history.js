(function($){
	var isHistoryAvailable = (window.history && history.pushState && history.state !== undefined) ? true : false;
	isHistoryAvailable = true;
	var homePage = './services.php';
	ajaxLoad(homePage);
	$('.ajax').live('click', function(event){
		event.preventDefault();
		var lien = $(this);
		if(isHistoryAvailable)
			history.pushState({key:$(lien).attr("href")}, '', basename($(lien).attr("href")));
		ajaxLoad($(lien).attr("href"));
		return false;
	});
	function ajaxLoad(lien){
		$.ajax({
			   url:lien,
			   success: function(retour){
				  $("div.content").empty().append(retour);
				  console.log($(lien).attr("href"));
			   }
		});
	}
	/*$(window).load(function (){
		alert(window.location.pathname.replace(/\\/g, '/').replace(/\/[^\/]*\/?$/, ''));
		//window.location.pathname = "/bSolutionWeb/";
		ajaxLoad(homePage);
	});*/
	function basename(str)
	{
	   var base = new String(str).substring(str.lastIndexOf('/') + 1); 
		if(base.lastIndexOf(".") != -1)       
		   base = base.substring(0, base.lastIndexOf("."));
	   return base;
	}
	
		 window.onpopstate = function(event){
		 	if(event.state != null){
		 		 console.log('key = '+event.state['key']);
		 		ajaxLoad(event.state['key']);
		 	}else{
		 		ajaxLoad(homePage);
		 	}
		 }

})(jQuery);