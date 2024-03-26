<?php
/**
 * Block Name: Block Carousel
 *
 * This is the template that displays the testimonial block.
 */
 
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

<div id="<?php echo esc_attr($id); ?>" class="test <?php echo esc_attr($className); ?>">
    <?php if (have_rows('repeater')) : ?>
        <div class="image-gallery">
            <div id="intro" class="slider glide glide--ltr glide--carousel glide--swipeable">
                
                <div data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--prev" data-glide-dir="<">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16.1486" cy="15.9245" r="15.7993" fill="#636364"/><path d="M18.3707 20.3687L13.9266 15.9246L18.3707 11.4805" stroke="white" stroke-width="1.5"/></svg>
                    </button>
                </div>
                
                <div class="slider__track glide__track" data-glide-el="track">
                    <ul class="slider__slides glide__slides">
                        <?php while (have_rows('repeater')) : the_row(); ?>
                            <li class="slider__frame glide__slide">
                                <?php
                                    $image = get_sub_field('image');
                                    $image_url = $image['url'];
                                    $image_alt = $image['alt'];
                                ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                
                <div data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--next" data-glide-dir="&gt;">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="16.2477" cy="15.9245" r="15.7993" fill="#636364"/><path d="M14.0257 20.3687L18.4698 15.9246L14.0257 11.4805" stroke="white" stroke-width="1.5"/></svg>
                    </button>
                </div>
                
            </div>
        </div>
    <?php endif; ?>
</div>

<script src="./block-carousel/block-carousel.js"></script>
<script>
        var glide = new Glide('.glide', {
            type: 'carousel',
            focusAt: 'center',
            perView: 1,
            animationDuration: 300,
            autoplay: false,
            hoverpause: true,
        })
        glide.mount()
</script>