<?php

/**
 * Trust icon list Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'trust-icon-list-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'trust-icon-list-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// Trust icon list
$trust_icon_list = get_field('trust_icon_list') ?: '';
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <?php if( !empty($trust_icon_list) ) { ?>
                <?php foreach( $trust_icon_list as $value ) { ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="icon-info">
                            <img src="<?php echo $value['icon']['url']; ?>" alt="">
                            <span><?php echo $value['intro_text']; ?></span>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
