<?php
    // Create ID attribute for custom "anchor" value
    $id = 'alt-rows-' . $block['id'];
    if (!empty($block['anchor'])) {
        $id = $block['anchor'];
    }
 
    // Create class attribute for custom "className"
    $className = 'alt-rows';
    if (!empty($block['className'])) {
        $className .= ' ' . $block['className'];
    }
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if (have_rows('images')) : ?>
        <div class="image-gallery">
            <?php while (have_rows('images')) : the_row(); ?>
                <?php
                $image = get_sub_field('image');
                $image_url = $image['url'];
                $image_alt = $image['alt'];
                ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>
