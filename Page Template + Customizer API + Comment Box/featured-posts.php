<h1 style="background-color: black; color: white; font-style: italic; text-align:center; padding: 20px;">
    <?php echo get_theme_mod('my_theme_featured_title') ?>
</h1>

<div class="featured-posts">
    <?php
    // Define the category slug or ID
    $category_slug = 'Nature Posts'; // Replace with your category slug
    $category_id = get_cat_ID($category_slug); // Get the category ID from the slug
    
    // WP_Query arguments
    $args = array(
        'cat' => $category_id, // Category ID
        'posts_per_page' => 5, // Number of posts to display (change as needed)
        'orderby' => 'date',   // Order by date
        'order' => 'DESC',     // Most recent first
    );

    // Custom query
    $custom_query = new WP_Query($args);

    // Check if there are posts
    if ($custom_query->have_posts()):
        echo '<div class="custom-post-list">'; // Container for styling
    
        // Loop through posts
        while ($custom_query->have_posts()):
            $custom_query->the_post(); ?>
            <div class="post-item">
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="post-meta">
                    <span>Posted on: <?php echo get_the_date(); ?></span>
                </div>
                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php endwhile;

        echo '</div>'; // End container
    else:
        // If no posts are found
        echo '<p>No posts found in this category.</p>';
    endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>