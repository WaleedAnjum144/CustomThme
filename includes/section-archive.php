<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <div class="post-container">

            <div class="featured-image">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('custom-size'); ?>
                <?php endif; ?>
            </div>
            <div class="post">
                <h1 class="post-title">
                    <?php the_title(); ?>
                </h1>

                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>

                <a href="<?php the_permalink(); ?>" class="read-more-link">Read More</a>
            </div>
        </div>


    <?php endwhile; else: endif; ?>