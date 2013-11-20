
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf=8">
	<title>Site Title</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php the_content(); ?>

<?php endwhile; else: ?>

		OH NOES!!!!

<?php endif; ?>
</body>
</html>