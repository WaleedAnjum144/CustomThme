<?php get_header(); ?>

<div class="container">

<h1><?php single_cat_title();?></h1>

    <?php get_template_part('includes/section', 'archive'); ?>
    <div class="post-navigations">
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>


</div>


<?php get_footer(); ?>