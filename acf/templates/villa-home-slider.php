<?php

/**
 * Home Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'villa-home-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'villa-search-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// search_title
$slider_heading = get_field('slider_heading') ?: '';
$slider_items = get_field('slider_items') ?: '';
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> aligncenter">
    <div class="villa-home-slider" >
        <?php if( !empty($slider_items) ) {
            foreach($slider_items as $item) { ?>
                <div class="slider-item" style="background-image: url(<?php echo $item['image']['url']; ?>)"></div>
            <?php } ?>
        <?php } ?>
    </div>

    <!-- Search Item -->
    <div class="search-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if( !empty($slider_heading) ) { ?>
                        <h1 class="search-title"><?php echo $slider_heading; ?></h1>
                    <?php } ?>

                    <form class="villa-search" action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
                        <div class="nav-search-inner">
                            <input type="search" class="search" id="searchword" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_html_e('Search for Villas or Destination', 'ct'); ?>" />
                            <input type="submit" class="btn btn-primary" value="SEARCH">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
