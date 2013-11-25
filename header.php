Códigos que estão no arquivo header.php

<script src="<?php bloginfo('template_url')?>/js/cycle.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery-ui-1.8.18.custom.min.js"></script>	
<script src="<?php bloginfo('template_url')?>/js/jquery.smooth-scroll.min.js"></script>	
	<script>
		  jQuery(document).ready(function($) {
			  $('a').smoothScroll({
				speed: 1000,
				easing: 'easeInOutCubic'
			  });

			  $('.showOlderChanges').on('click', function(e){
				$('.changelog .old').slideDown('slow');
				$(this).fadeOut();
				e.preventDefault();
			  })
		  });
		  </script>	
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/cycle.js"></script>
<script>
	var sliderLargura = '940';
	var sliderTotal = '5';
	var sliderInterval;	
	var sliderAtivo = true;
	
</script>

<script>
	$("#homeSliderConteudo").scrollLeft('0');
	
	$(document).ready(function()
	{
		$('#homeSliderConteudo').cycle({ 
			activePagerClass: 'homeSliderImgAtivo',
			timeout: 6000, 
			speed: 500, 
			startingSlide: 0,
			fx: 'fade',
			after: function(currSlideElement, nextSlideElement, options, forwardFlag) {
				$('.homeSliderInd').each(function() { $(this).removeClass('homeSliderIndAtivo'); });
				$('#homeSliderInd'+options.currSlide).addClass('homeSliderIndAtivo');
			}
		});
					
		$("#homeSliderRolagemEsq").click(function(e)
		{			
			$('#homeSliderConteudo').cycle('prev');
		});
		$("#homeSliderRolagemDir").click(function(e)
		{
			$('#homeSliderConteudo').cycle('next');
		});		
		$(".homeSliderInd").click(function(e)
		{
			$('#homeSliderConteudo').cycle(parseInt($(this).attr('indice')));
		});
		
		$("#homeSliderConteudo").swipe({
			swipe:function(event, direction, distance, duration, fingerCount) {
				if (direction == 'left')
					$('#homeSliderConteudo').cycle('next');
				else if (direction == 'right')
					$('#homeSliderConteudo').cycle('prev');
			}
		});

		
	
	});
</script>
