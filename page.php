<?php get_header(); ?>

<div class="container">

    <h1>
        <?php the_title(); ?>
    </h1>

    <?php get_template_part('includes/section', 'content'); ?>

    <?php if(is_active_sidebar('page-sidebar')): ?>

<?php dynamic_sidebar('page-sidebar');?>

<?php endif;?>


</div>


   



<?php get_footer(); ?>