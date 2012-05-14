<?php
	get_header();
	$externals = array('site', 'github', 'googleCode', 'jsfiddle', 'jsperf');
?>
<div id="torso">
	<div class="content clearfix">
		<aside>
			<nav>
				<ul>
				<? rewind_posts(); if(have_posts()) : while (have_posts()) : the_post(); ?>
					<li><a href="#widget-<? the_ID(); ?>"><? the_title(); ?></a></li>
				<? endwhile; endif; ?>
				</ul>
			</nav>
		</aside>
		<div class="main">
			<? rewind_posts(); if(have_posts()) : while (have_posts()) : the_post(); $custom_fields = get_post_custom(); ?>
			<div class="widget" id="widget-<? the_ID(); ?>">
				<div class="content">
					<h3><? the_title(); ?></h3>
					<? the_content();?>
					<? edit_post_link(); ?> 
				</div>
				<footer>
					<? if($custom_fields['demo']) : ?>
						<a href="<?= $custom_fields['demo'][0]; ?>" class="demo" target="_blank">&raquo; ver o demo</a>
					<? endif; ?>
					<nav class="externals">
						<ul>
							<?
							foreach ($externals as $field) :
								if($custom_fields[$field]) :
							?>
								<li><a href="<?= $custom_fields[$field][0]; ?>" target="_blank" class="<?= $field ?>"><?= $field ?></a></li>
							<?
								endif;
							endforeach;
							?>
						</ul>
					</nav>
				</footer>
			</div>
			<? endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>