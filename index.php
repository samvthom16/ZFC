<?php get_header();?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content('Read the rest of this entry »'); ?>
    <?php endwhile; ?>
    <?php else : ?>
    //Something that happens when a post isn’t found.
<?php endif; ?>
<?php get_footer();?>