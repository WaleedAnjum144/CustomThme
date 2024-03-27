<?php get_header(); ?>

<div class="container">

<div class="featured-image">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('custom-size'); ?>
                <?php endif; ?>
            </div>


    <h1>
        <?php the_title(); ?>
    </h1>

    <?php get_template_part('includes/section', 'blogcontent'); ?>

</div>


<?php get_footer(); ?>