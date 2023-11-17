<section id="section3" class="container-fluid py-5 team section-bg2">
        <div class="row">
        <?php
// Define the category ID or slug
$category_id = 4; // Replace with your category ID
//$category_slug = 'category-slug'; // Or use category slug

// Set up the query arguments
$args = array(
    'category__in'   => array($category_id), // Use this line if you have a category ID
    //'category_name' => $category_slug, // Use this line if you have a category slug
    'posts_per_page' => 4, // Number of posts to show
);

// Create a new instance of WP_Query
$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                      <div class="member">
                        <div class="member-img">
                          <?php if ( has_post_thumbnail() ) : ?>
                            <?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
                            <img src="<?php echo esc_url($thumbnail_url); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                          <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                          </div>
                        </div>
                        <div class="member-info">
                          <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                      </div>
                    </div>

        <?php endwhile; ?>
<?php else : ?>
    <p>No posts found in this category.</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>









    </div>
    </section>