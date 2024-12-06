<?php
/**
 *  Template Name: Contact Us Template
*/

?>

<?php get_header(); ?>

<h1 style="background-color: black; color: white; text-align:center;">Specific to Contact Us Page Design</h1>
<div id="post-content" class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span>Published on: <?php the_date(); ?></span> |
                    <span>Author: <?php the_author(); ?></span>
                </div>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else : ?>
        <p>No content found for this post.</p>
    <?php endif; ?>
</div>

<?php get_footer() ?>