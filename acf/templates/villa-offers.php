<?php

/**
 * Villa Offers Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'villa-offers-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'villa-offers-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// villa_offers
$villa_offers = get_field('villa_offers') ?: ''; ?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <?php if( !empty($villa_offers) ) { ?>
                <?php foreach( $villa_offers as $value ) {
                    $button_url         = $value['links'] ? $value['links']['url'] : '';
                    $button_text        = $value['links'] ? $value['links']['title'] : '';
                    $button_target      = $value['links'] ? $value['links']['target'] : ''; ?>

                    <div class="col-md-6 col-sm-6">
                        <div class="offers-item">
                            <a href="<?= esc_url($button_url); ?>" target="<?= $button_target ?>">
                                <img src="<?php echo $value['image']['url']; ?>" alt="" width="604" height="400">

                                <h2>
                                    <?php echo $value['title']; ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.568" height="12.707" viewBox="0 0 17.568 12.707">
                                        <g id="Arrow" transform="translate(-120 -557.353)">
                                            <path id="Path_1031" data-name="Path 1031" d="M10.861.707l6,6-6,6" transform="translate(120 557)" fill="none" stroke="#fff" stroke-width="1"/>
                                            <line id="Line_26" data-name="Line 26" x1="16.861" transform="translate(120 563.707)" fill="none" stroke="#fff" stroke-width="1"/>
                                        </g>
                                    </svg>
                                </h2>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
