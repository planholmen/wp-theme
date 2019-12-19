<div class="header-container">
    <header class="header my-4 mx-auto px-6">
        <a href="/">
            <div class="logo h-full ml-4 float-left flex items-center">
                <img class="h-full" src="/wp-content/themes/planholmen/assets/images/Plan-Holmen-Logo.png" alt="PLan Holmen Logo">
                <p class="ml-4">PLan Holmen</p>
            </div>
        </a>
        <div class="nav block h-full float-right">
            <?php
                wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'menu_class' => 'h-full flex justify-end items-center',
                    'fallback_cb' => false,
                    'container_class' => 'h-full',
                    'depth' => 2
                ]);
            ?>
        </div>
    </header>
</div>
<div class="spacer my-4 mx-auto"></div>