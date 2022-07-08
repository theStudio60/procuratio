<?php
    $thisImage = get_sub_field('image');

if( $thisImage ):
//echo "image exists";
// Image variables.
$thisImage_url = $thisImage['url'];
$thisImage_title = $thisImage['title'];
$thisImage_alt = $thisImage['alt'];
$thisImage_caption = $thisImage['caption'];
// Size attributes.
$thisImage_size = 'full';
$thisImage_thumb = $thisImage['sizes'][ $thisImage_size ];
$thisImage_width = $thisImage['sizes'][ $thisImage_size . '-width' ];
$thisImage_height = $thisImage['sizes'][ $thisImage_size . '-height' ];
//
?>
  <img width="360px" src="<?php echo esc_url($thisImage_url); ?>" alt="<?php echo esc_attr($thisImage_alt); ?>" class=" " data-aos="fade-right" data-aos-duration="800"/>
<?php endif; ?>