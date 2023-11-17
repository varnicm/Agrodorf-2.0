<?php
$page_id = 36; 

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
    <section id="section1">
        <div class="fullscreen-image p-5" style="background-image: url('<?php echo $featured_img_url; ?>');">
            <div class="mt-5">
                <div data-aos="fade-up" class="text-center"><h1 class="text-dark"><?php echo $page_title; ?></h1></div>
                <div data-aos="fade-right" class="text-center"><?php echo $page_content; ?></div>
            </div>
        </div>
    </section>

