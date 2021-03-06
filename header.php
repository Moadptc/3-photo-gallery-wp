<!doctype html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name') ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/w3.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">

	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<header class="w3-container w3-teal">
	<div class="w3-row">
		<div class="w3-col m9 l9">
			<h1>
				<?php bloginfo('name') ?>
			</h1>
		</div>
		<div class="w3-col m3 l3">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <input type="text" class="w3-input
            w3-margin-top w3-margin-bottom" name="s" placeholder="Search...">
            </form>

		</div>
	</div>
</header>

<div class="w3-row">
	<div class="w3-col m3 l3">
		<?php if(is_active_sidebar('sidebar')): ?>
			<?php dynamic_sidebar('sidebar') ?>
		<?php endif; ?>
	</div>

	<div class="w3-col m9 l9">
		<div class="w3-row">