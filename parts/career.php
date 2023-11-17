<!-- Section 5 -->

<?php
$page_id = 27; 

$page_data = get_post($page_id); 

// Check if the page exists
if ($page_data) {
    // Get the page title
    $page_title = get_the_title($page_data);

    // Get the content
    $page_content = apply_filters('the_content', $page_data->post_content);

    // Get the featured image URL
    $featured_img_url = '';
    if (has_post_thumbnail($page_data->ID)) {
        $featured_img_url = get_the_post_thumbnail_url($page_data->ID, 'full');


    }

} else {
    echo 'Page not found.';
}
?>
<section id="section5" class="contact container-fluid py-5 section-bg" >
        <div class="container text-center">
            <div class="section-title">
                <h2><?php echo $page_title; ?></h2>
                <p><?php echo $page_content; ?></p>
              </div>

        </div>
    </section>