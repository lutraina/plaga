<!doctype html>
	<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title>No Cambuí</title>
	    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon" />
	    <link rel="stylesheet" href="/css/gumby.css">
	    <link rel="stylesheet" href="http://dev.nocambui.com.br/css/style.css">	
	    <link rel="stylesheet" href="/css/style_suplementar.css">	
	    <link rel="stylesheet" href="/css/global.css"> 
		<link rel="stylesheet" href="/css/categorias.css"> 
		<link rel="stylesheet" href="/css/county.css">

		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

			
		<script src="/js/jquery-2.0.2.js"></script>
		<!--script api facebook-->
	    <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=424842944276281";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!--script botão share google+-->
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
		<!--script share twitter-->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
		<!--seguir google+-->
		<!-- Place this tag after the last widget tag. -->
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
	<script src="/js/libs/modernizr-2.6.2.min.js"></script>
	<script src="/js/libs/gumby.min.js"></script>
	<script src="/js/slides.min.jquery.js"></script>
	<script src="/js/jquery-2.0.2.js"></script>
	
	<!-- <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
	<script src="/js/jcarousellite.js"></script>
	<script src="/js/jquery.form.min.js"></script>
	<!-- PAGINAÇÃO -->
	  <script type="text/javascript" src="/jPages/js/highlight.pack.js"></script>
	  <script type="text/javascript" src="/jPages/js/tabifier.js"></script>
	  <script src="/jPages/js/js.js"></script>
	  <script src="/jPages/js/jPages.js"></script>
	<!--script da galeria da home-->		
	
	<!--script table-->
	<link rel="stylesheet" href="/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" href="/DataTables/media/css/jquery.dataTables_themeroller.css">
	<script src="/DataTables/media/js/jquery.dataTables.min.js"></script>
	<!--script jquery ui-->
	<script src="/js/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
	<!--
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="/js/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
	-->
	<script src="/js/clicks.js"></script>
	<script src="/js/nav.js"></script>
	
<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("0cdb451bdbcb9c83f5a924e36a7f72b6");</script><!-- end Mixpanel -->

	
	</head>
	<body>	
		<div id="banner-popup">
			<?php 
			
			if(isset($banner_popup)):?>
				<?php if(count($banner_popup) >=1 ):?>
					<?php foreach($banner_popup as $banner_pop): ?> 
						<?php if($banner_pop['Banner']['tipo'] == 'image'): ?>
							
							<a target="<?= $banner_pop['Banner']['target'] ?>" href="<?= $banner_pop['Banner']['link'] ?>" class='click' data-click="<?= $banner_pop['Banner']['id'] ?>">
								<img class="img-poupup" src="<?= $_URL_FILE; ?>banners/fotos/<?= $banner_pop['Banner']['image'] ?>" />
							</a>
							
						<?php else: ?>	
							<?= $banner_popup['Banner']['cod'] ?>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			<?php endif; ?>
			
		</div>
		<script language="javascript">
			$(document).ready(function(){
			    var y_fixo = $("#banner-popup").offset().top;
			    $(window).scroll(function () {
			        $("#banner-popup").animate({
			            top: (y_fixo-80) +$(document).scrollTop()+"px"
			            },{duration:500,queue:false}
			        );
			    });

			});
		</script>
<?php if(isset($banner_dhtml)):?>
				<?php if(count($banner_dhtml) >=1 ):?>
					<div class="banner-dhtml">
						<div class="relative">
							<span class="fechar-popup">X</span>
							<?php foreach($banner_dhtml as $banner_dhtml): ?> 
								<?php if($banner_dhtml['Banner']['tipo'] == 'image'): ?>
									
									<a target="<?= $banner_dhtml['Banner']['target'] ?>" href="<?= $banner_dhtml['Banner']['link'] ?>" class='click' data-click="<?= $banner_dhtml['Banner']['id'] ?>">
										<img  src="<?= $_URL_FILE; ?>banners/fotos/<?= $banner_dhtml['Banner']['image'] ?>" />
									</a>
									
								<?php else: ?>	
									<?= $banner_dhtml['Banner']['cod'] ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>	
		
		
				
		<div class="container">
			<div class="sub-container">
				<div class="header" style="height:300px;">
					<div class="row">
						<!--Header : topo.ctp-->
						<?php echo $this->element('topo'); ?>
					</div>
				</div>
				<div class="content">
					<div class="row">
						<?php echo $this->fetch('content'); ?>
					</div>
				</div>
				<div class="footer">
					<div class="row">
						<?php echo $this->element('footer'); ?>
					</div>
					<div class="sub-footer">
						<span class="sub-footer-texto">Copyright © 2013 . No-Cambuí - Todos os direitos reservados.</span>
					</div>
				</div>
			</div>
		</div>	
		
		<?php echo $this->element('bloco_form_avaliacao'); ?>
		<?php echo $this->element('bloco_assine'); ?>
	</body>
</html>
<script>
	$(function() {
		$( "#tabs10" ).tabs();		
		//$( "#tabs10" ).tabs();
		
		 $( "#tabs_business" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
		$( "#tabs_business li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
	});

</script>
 <style>
.ui-tabs-vertical { width: 55em; }
.ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
.ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
.ui-tabs-vertical .ui-tabs-nav li a { display:block; }
.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
.ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
</style>
<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	 $(function() {
		$( "#accordion" ).accordion();
	});
</script>
<script>
	$(function() {
		$( "#tabs2" ).tabs();
	});
</script>
<script>
	$(function() {
		$( "#tabs3" ).tabs();
	});
</script>
<!--tab form classificados autos-->
<script>
	$(function() {
		$( "#tabs4" ).tabs();
	});
</script>
<!--tab informações gastronomia aberta-->
<script>
	$(function() {
		$( "#tabs5" ).tabs();
	});
</script>
<script>
	$(function(){
		$('#slides1').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 7000,
			pause: 2500,
			container: 'slides_container1',
			generateNextPrev: false,
			next: 'next1',
	    	prev: 'prev1',
			hoverPause: true
		});
	});
</script>
<script>
	$(function(){
		$('#slides2').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			container: 'slides_container2',
			generateNextPrev: false,
			next: 'next2',
	    	prev: 'prev2',
			hoverPause: true
		});
	});
</script>
<script>
	$(function(){
		$('#slides3').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			container: 'slides_container3',
			next: 'next3',
	    	prev: 'prev3',
			hoverPause: true
		});
	});
</script>
<script>
	$(function(){
		$('#slides4').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			container: 'slides_container3',
			generateNextPrev: false,
			next: 'next3',
	    	prev: 'prev3',
			hoverPause: true
		});
	});
</script>
<script>
	$(function(){
		$('#slides5').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			container: 'slides_container3',
			generateNextPrev: false,
			next: 'next3',
	    	prev: 'prev3',
			hoverPause: true
		});
	});
</script>
<script>
	$(function(){
		$('#slides6').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			container: 'slides_container3',
			generateNextPrev: false,
			next: 'next3',
	    	prev: 'prev3',
			hoverPause: true
		});
	});
</script>
<script>
	$(function(){
		$('#slides7').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			container: 'slides_container3',
			generateNextPrev: false,
			next: 'next3',
	    	prev: 'prev3',
			hoverPause: true
		});
	});
</script>
<script>
	$(function(){
		$('#slides8').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			container: 'slides_container3',
			generateNextPrev: false,
			next: 'next3',
	    	prev: 'prev3',
			hoverPause: true
		});
	});
</script>




<script>
	$(function(){
		$('#slides10').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			generateNextPrev: false,
			next: 'next5',
	    	prev: 'prev5',
			hoverPause: true
		});
	});
</script>




<script type="text/javascript">
	$(function(){
		$('.box-painel-do-usuario-top').hide();
		$('.texto-login-top').click(function(){
			if($('.box-painel-do-usuario-top').is(":visible")){
				$('.box-painel-do-usuario-top').hide('slow')
			}else{
				$('.box-painel-do-usuario-top').show('slow');
				$('.box-painel-do-usuario-top').show('slow')
				
			}
		})
		$('.texto-login-top2').click(function(){
			$('.box-painel-do-usuario-top').hide('slow')
		});
	});
	
</script>
<script type="text/javascript" src="/js/county.js"></script>
<?php $data = isset($vantagens['Advantage']['date_end']) ? date('Y/m/d H:i:s', strtotime($vantagens['Advantage']['date_end'])) : ''  ?>
<script type="text/javascript">
    $(document).ready(function () {
    	var dataVantagens = '';
        //set width of wrapper;
        $('.no-reflection').county({ endDateTime: new Date('<?= $data ?>'), reflection: false, animation: 'scroll', theme: 'none' });
    });
</script>

<!--slider interno-->
<script>
	$(function(){
		$('#slides15').slides({
			preload: true,
			preloadImage: '/img/loading.gif',
			play: 5000,
			pause: 2500,
			container: 'slides_container15',
			generateNextPrev: false,
			next: 'next15',
	    	prev: 'prev15',
			hoverPause: true
		});
	});
</script>


<!--personalização dos selects-->
<link rel="stylesheet" href="/js/custom-select/jquery.customselect.css">
<script type="text/javascript" src="/js/custom-select/jquery.customselect.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.customselect').customselect();
		//slider
    	$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
      
	});  
</script>



<!--jquery colorbox - usando nas galerias dos posts(modal)-->
<link rel="stylesheet" href="/js/jquery-colorbox/example1/colorbox.css">
<script type="text/javascript" src="/js/jquery-colorbox/jquery.colorbox.js"></script>

<script>
	$(document).ready(function(){
		//Examples of how to assign the Colorbox event to elements
		$(".janela-modal").colorbox({rel:'group1'});
	});
</script>

<!--slide agenda home-->
<script type="text/javascript">
	$(".carousel-menu").jCarouselLite({
	    btnNext: ".next",
	    btnPrev: ".prev",
	    start: 7,
	});
</script>

<!--slide agenda home-->
<script type="text/javascript">
	$(".carousel-lateral").jCarouselLite({
	    btnNext: ".next",
	    btnPrev: ".prev",
	    start: 1,
	});
</script>

<!-- google maps -->
<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzkjLzXudUf5P8M7I-VObhp3HWxyDw5vI">
</script>

<script type="text/javascript">


  
	
</script>


<script type="text/javascript">

window.mapa_ouvert = false;
	$("#").click(function(){
	     
      if(!mapa_ouvert){
	     $("#map-canvas").slideDown('slow');
	     
			    var mapOptions = {
			      center: { lat: -22.9013804, lng: -47.0534772},
			      zoom: 8
			    };
			    var map = new google.maps.Map(document.getElementById('map-canvas'),
			        mapOptions);
	     
				mapa_ouvert = true;
      } else {
      	
      	$("#map-canvas").slideUp('slow');
      	mapa_ouvert = false;
      	
      }

				
	});
	
	
			  
</script>
<!--slides-->
<script type="text/javascript" src="/js/slides.min.jquery.js"></script>