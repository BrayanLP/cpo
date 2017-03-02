<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
 
	  $("#fotos").owlCarousel({
	 
	      autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
	      items : 1,
	      itemsDesktop : [1199,1],
	      itemsDesktopSmall : [979,1]
	 
	  });
	  $('.fancybox').fancybox();
	 
	});
</script>	