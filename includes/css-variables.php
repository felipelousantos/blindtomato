<?php

function blindtomato_css_variables() {

    $color_primary = "red";
    $color_secondary = "blue";
    $color_links = "var(--color-primary)";

    ?>   
        <style>    
            :root {
                --color-primary: <?php echo $color_primary; ?>;
                --color-secondary: <?php echo $color_secondary ?>;
                --color-links: <?php echo $color_links ?>;                
            }
        </style> 
    <?php ;
}

add_action('wp_footer', 'blindtomato_css_variables');