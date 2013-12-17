<div class="serviceheader plier">
<table cellspacing="0">
<tr><td colspan="2" class="texthead">
<h3 class="head-service">Solution Web</h3></td></tr>
<tr><td>
Nous vous offrons un site web sur mesure, qui correspond à votre image. Un site dynamique à la pointe de la technologie.
</td><td>
<img class="image-service" src="./images/1.png" height="200" width="200"/>
</td></tr></table>
<p class="texttohide">
Un site web pour votre entreprise, pour augmenter votre visibilité

Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
</p>
</div>
<div class="serviceheader plier">
<table cellspacing="0">
<tr><td colspan="2" class="texthead">
<h3 class="head-service">Design</h3></td></tr>
<tr><td>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer 
balababa abbababbab babsbabsa bsabsab
</td><td >
<img class="image-service" src="./images/2.jpg" height="200" width="200"/>
</td></tr></table>
<p class="texttohide">
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<div class="serviceheader plier">
<table cellspacing="0">
<tr><td colspan="2" class="texthead">
<h3 class="head-service">Application de gestion</h3></td></tr>
<tr><td>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer 
balababa abbababbab babsbabsa bsabsab
</td><td>
<img class="image-service" src="./images/3.jpg" height="200" width="200"/>
</td></tr></table>
<p class="texttohide">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.

</p>
</div>
<div class="serviceheader plier">
<table cellspacing="0">
<tr><td colspan="2" class="texthead">
<h3 class="head-service">Maintenance</h3></td></tr>
<tr><td>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer 
balababa abbababbab babsbabsa bsabsab
</td><td>
<img class="image-service" src="./images/4.jpg" height="200" width="200"/>
</td></tr></table>
<p class="texttohide">
Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
</p>
</div>



<div class="serviceheader plier">
<table cellspacing="0">
<tr><td colspan="2" class="texthead">
<h3 class="head-service">Montage Video</h3></td></tr>
<tr><td>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer 
balababa abbababbab babsbabsa bsabsab
</td><td >
<img class="image-service" src="./images/2.jpg" height="200" width="200"/>
</td></tr></table>
<p class="texttohide">
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<div class="serviceheader plier">
<table cellspacing="0">
<tr><td colspan="2" class="texthead">
<h3 class="head-service">Intelligence d'affaire</h3></td></tr>
<tr><td>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer 
balababa abbababbab babsbabsa bsabsab
</td><td>
<img class="image-service" src="./images/3.jpg" height="200" width="200"/>
</td></tr></table>
<p class="texttohide">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.

</p>
</div>
<script>
// Using multiple unit types within one animation.
$( "div.serviceheader" ).hover(
function() {
		$( this ).addClass( "hover" );
}, function() {
	$( this ).removeClass( "hover" );
}
);
$( "div.serviceheader" ).click(function() {
	$( this ).removeClass( "hover" );
	$(this).removeClass("serviceheader");
	$( ".deplier" ).addClass("plier").removeClass("deplier");
  $( "div.plier p" ).css({
  height: "0px",
  });
  $(this).parent().prepend( $(this) );
  $( ".deplier" ).css({
  width:"346px"
  });
    
  $( this).animate({
  width:"720px",
  }, 1000, function(){
	  $(this).addClass("deplier");
	  $(this).removeClass( "plier" );
	  $(this).children("p").animate({
		  height: "100px",
	  }, 3000);
  });
  $(this).addClass("serviceheader");
});


</script>