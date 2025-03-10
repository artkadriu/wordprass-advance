<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, nam.</p>
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="logo">
                    Logo
                </div>
                <div class="search-box">
                    Search
                </div>
            </section>
            <section class="menu-area">
                <nav class="main-menu">
                    Menu
                </nav>
            </section>
        </header>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        Services
                    </section>
                    <section class="home-blog">
                        Blog
                    </section>
                </main>
            </div>
        </div>

        <footer class="site-footer">
            Footer
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
