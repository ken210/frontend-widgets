<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><? if ($template->title) echo $template->title . ' - '; ?>Widgets</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<? bloginfo( 'stylesheet_url' ); ?>">
    <script src="<?= bloginfo( 'stylesheet_directory' ); ?>/js/libs/modernizr-2.5.3.min.js"></script>
    <? wp_head(); ?>
</head>
<body>
	<nav id="slimHeader">
		<div class="wrapper">
			<a class="bt newWidget">Novo Widget</a>
			<select class="jumpMenu">
				
			<? // ordering posts alphabetically
			$posts = query_posts($query_string . '&orderby=title&order=asc&posts_per_page=-1'); ?>
			
			<? if(have_posts()) : while (have_posts()) : the_post(); ?>
				<option value="#widget-<? the_ID(); ?>"><? the_title(); ?></option>
			<? endwhile; endif; ?>
			</select>
		</div>
	</nav>
	<div id="container">
		<header id="header">
		    <div class="content">
    			<h1 class="ir">
    				Widgets
    			</h1>
		    </div>
			<nav>
				<a class="bt newWidget">Novo Widget</a>
				<select class="jumpMenu">
				<? rewind_posts(); if(have_posts()) : while (have_posts()) : the_post(); ?>
					<option value="#widget-<? the_ID(); ?>"><? the_title(); ?></option>
				<? endwhile; endif; ?>
				</select>
			</nav>
		</header>