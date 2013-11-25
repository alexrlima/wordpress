//Arquivo php que recebe as imagens e seus links que vêm do custom field

﻿<div class="grid_12" style="margin:10px 0 20px 0;">
		<!-- SLIDER -->				
				<div id="homeSlider">
	<div id="homeSliderConteudo">
		
		<?php
		 $argNoticias = array(
		 'post_type' => 'Banners',
		 'posts_per_page' =>5
		 );
		
		 $loopNoticias = new WP_Query($argNoticias); 
		 if($loopNoticias->have_posts()): while($loopNoticias->have_posts()) : $loopNoticias->the_post();
		 $id = $post->ID;		
		 ?>
		
		 <li>
		 	<a href="<?php the_field('link'); ?>" title="<?php the_title();?>" target="_self">
		 	<img src="<?php the_field('slide'); ?>" alt="<?php the_title();?>" /></a>
		 </li>
		
		<?php
		  endwhile; 
		  endif;
		?>
			   
	</div>
	
	<div id="homeSliderRolagemEsq" class="homeSliderRolagem" style="z-index:50;"></div>
	<div id="homeSliderRolagemDir" class="homeSliderRolagem" style="z-index:50;"></div>
        
</div>
				<!-- ENDS SLIDER -->
	</div>
