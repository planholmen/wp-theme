<div class="header-container">
    <header class="header my-4 mx-auto px-6">
        <a href="/">
            <div class="logo h-full ml-4 float-left flex items-center">
                <img class="h-full" src="/wp-content/themes/planholmen/assets/images/Plan-Holmen-Logo.png" alt="PLan Holmen Logo">
                <p class="ml-4">PLan Holmen</p>
            </div>
        </a>
        <div class="nav block h-full float-right">
            <div class="burger-menu h-full block flex items-center text-4xl md:hidden">
                <ion-icon id="menu-icon" name="menu" class="block"></ion-icon>
                <ion-icon id="close-icon" name="close" class="hidden"></ion-icon>
            </div>
            <?php
                wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'menu_class' => 'h-full flex justify-end items-center',
                    'fallback_cb' => false,
                    'container_class' => 'h-full hidden md:block',
                    'depth' => 2
                ]);
            ?>
        </div>
    </header>
    <div class="small-menu" style="display: none;">
        <?php
            wp_nav_menu([
                'theme_location' => 'header-menu',
                'menu_class' => 'flex flex-col',
                'fallback_cb' => false,
                'depth' => 2
            ]);
        ?>
    </div>
</div>
<div class="spacer my-4 mx-auto"></div>