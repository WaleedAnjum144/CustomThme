<?php if (have_posts()) : while (have_posts()) : the_post();?>

<?php the_content();?>


<div class="post-meta">
    <span class="author">By 
        <?php 
        the_author();
        ?>
    </span>
    <span class="date"><?php echo get_the_date(); ?></span>
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

<?php
$categories = get_categories();
if ($categories) {
    echo '<ul class="all-categories">';
    foreach ($categories as $category) {
        echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
    }
    echo '</ul>';
}
?>






<?php endwhile; else:  endif; ?>
