<?php get_header() ?>
<main>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h1><a href="<?php the_permalink()?>"><?php the_title() ?></a></h1>
        <?php the_content()?>
<?php endwhile;

else:
    echo "Tidak ada kontent apapun";
endif;
?>
</main>

<?php get_footer() ?>