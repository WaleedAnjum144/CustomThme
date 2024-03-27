<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <div class="container">

        <div class="featured-image">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('custom-size'); ?>
                <?php endif; ?>
            </div>

            <h1>
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>

            <div class="post-meta">
                <span class="author">By
                    <?php
                    the_author();
                    ?>
                </span>
                <span class="date">
                    <?php echo get_the_date(); ?>
                </span>
            </div>

            <div class="post-tags">
                <?php
                $tags = get_the_tags();
                if ($tags) {
                    echo '<ul>';
                    foreach ($tags as $tag) {
                        echo '<li><a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . $tag->name . '</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>

            <div class="col-6">
                Color:
                <?php echo get_post_meta(get_the_ID(), 'color', true); ?>
            </div>

            <?php if (get_post_meta(get_the_ID(), 'registration', true)): ?>
                <div class="col-6">

                    Registration:
                    <?php echo get_post_meta(get_the_ID(), 'registration', true); ?>
                </div>

            <?php endif; ?>

          







        </div>

    <?php endwhile; endif; ?>




<?php get_footer(); ?>