<?php get_header(); ?>

<div class="container">


<h1>Search Result '<?php echo get_search_query();?>'</h1>
    <?php get_template_part('includes/section', 'archive'); ?>
    <div class="post-navigations">
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>


</div>


<?php get_footer(); ?>