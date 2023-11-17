<?php
$page_id = 25; 

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
<section id="section4" class="container-fluid py-5" style="background-color: #81c784;">
        <div class="container text-center px-4 overflow-hidden" >
            <div class="row gx-5">
                <div class="col-md-6" id="about-bg"  data-aos="fade-right" style="background-image: url(<?php echo $featured_img_url; ?>);"></div>
                <div  data-aos="fade-left" class="col-md-6" style="height:95vh;background:rgba(0,0,0,0.5)"> <div><h1 class=" text-light pt-4"><?php echo $page_title; ?></h1>
                    <div class="text-start p-5 text-light">
                    <?php echo $page_content; ?>
                </div></div></div>
            </div>
        </div>
    </section>