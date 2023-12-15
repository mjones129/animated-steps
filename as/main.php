<?php
include '../animated-steps.php';

function as_custom_shortcode($atts = []) {
    //normalize attribute keys, lowercase
    $atts = array_change_key_case((array) $atts, CASE_LOWER);

    //override default attributes with user attributes
    $as_atts = shortcode_atts(
        array(
            'img1' => '#',
            'img2' => '#',
            'img3' => '#',
            'btn1' => 'Button 1',
            'btn2' => 'Button 2',
            'btn3' => 'Button 3'
        ), $atts);
?>
<div class="as-container">
    <div class="glide">
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"><?php echo $as_atts['btn1'] ?></button>
            <button class="glide__bullet" data-glide-dir="=1">Slide 2</button>
            <button class="glide__bullet" data-glide-dir="=2">Slide 3</button>
        </div>
        <div class="glide_track" data-glide-el="track">
            <ul class="glide__slides">
                <li>
                    <img class="glide__slide" src="https://www.milesit.com/wp-content/uploads/Consult-Infographic-recolored.svg" />
                </li>
                <li>
                    <img class="glide__slide" src="https://www.milesit.com/wp-content/uploads/Consult-Infographic-recolored.svg" />
                </li>
                <li>
                    <img class="glide__slide" src="https://www.milesit.com/wp-content/uploads/Consult-Infographic-recolored.svg" />
                </li>
            </ul>
        </div>
    </div>
</div>
<?php }

add_shortcode( 'as_custom', 'as_custom_shortcode');