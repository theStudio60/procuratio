<!-- preloader style -->
<style>
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logotype = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
?>
#load {
    display: block;
    height: 100%;
    overflow: hidden;
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    overflow:hidden;
    z-index: 9901;
    opacity: 1;
    background-color: #fff;
    visibility: visible;
    -webkit-transition: all .35s ease-out;
    transition: all .35s ease-out;
}
#load.loader-removed {
    opacity: 0;
    visibility: hidden;
}
.overlay-loader .load-wrap {
    background-image: url("<?php echo $logotype[0];?>");
    background-position: center center;
    background-repeat: no-repeat;
    text-align: center;
    width: 100%;
    height: 100%; 
}
</style>