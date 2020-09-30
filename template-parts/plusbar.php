<button id="plusbar-open-button">+</button>

<div class="plusbar">
    
    <nav class="nav">
        <?php   
            wp_nav_menu(
                array (
                    'theme_location' => 'general',
                )   
            ); 
        ?>
    </nav>
    
    <div class="sidebar">
        <?php dynamic_sidebar( 'general' ) ?>
    </div>

    <footer class="footer">
        <p>Footer/Copyright text</p>
    </footer>

</div>

<button id="plusbar-close-button">-</button>

<span class="plusbar-overlay"></span