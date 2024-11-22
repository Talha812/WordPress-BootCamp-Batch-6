<?php // include('header.php') ?>

<?php get_header(); ?>

<!-- Main Content Section -->
<div id="content">

    <!-- The Loop Working -->
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
            <?php

        }
    }

    ?>

</div>

<?php get_footer(); ?>

<?php // include('footer.php') ?>
