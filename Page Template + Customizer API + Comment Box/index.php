<?php get_header(); ?>

<div>

    <!-- Through Plugin -->
    <?php
    // echo do_shortcode('[smartslider3 slider="1"]');
    ?>

</div>

<?php include_once('slider.php') ?>

<?php include_once('featured-posts.php') ?>

<!-- Main Content Section -->
<div id="content" class="content-wrapper">

    <!-- The Loop -->
    <div class="main-content">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <article>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_post_thumbnail(); ?>
                    <div><?php the_excerpt(); ?></div>
                    <h4>Created By: <?php the_author(); ?></h4>
                    <h4>Date: <?php the_date(); ?> Time:<?php the_time(); ?></h4>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No content found.</p>
        <?php endif; ?>
    </div>

    <!-- Widgets SideBar -->
    <?php get_sidebar() ?>

</div>

<div class="pagination">
    <ul>
        <?php
        echo paginate_links(array(
            'type' => 'list',
            'prev_text' => __('&laquo; Previous', 'textdomain'),
            'next_text' => __('Next &raquo;', 'textdomain'),
        ));
        ?>
    </ul>
</div>

<?php get_footer(); ?>
