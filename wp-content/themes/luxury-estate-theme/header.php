<?php
$current_class = 'border-b border-primary pb-1';
$default_class = 'hover:text-primary transition-colors';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!-- Top Navigation -->
    <nav
        id="main-nav"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out glass-header">

        <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-6 max-w-container-max mx-auto">

            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="font-display-lg text-headline-md tracking-tighter text-primary">
                ESTATE
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-10">
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="font-label-caps text-label-caps <?php echo is_front_page() ? $current_class : $default_class; ?>">
                    Home
                </a>

                <a href="<?php echo esc_url(home_url('/Collections')); ?>"
                    class="font-label-caps text-label-caps hover:text-primary transition-colors <?php echo is_page('Collections') ? $current_class : $default_class; ?>">
                    Collections
                </a>

                <a href="<?php echo esc_url(home_url('/insights')); ?>"
                    class="font-label-caps text-label-caps hover:text-primary transition-colors <?php echo is_page('insights') ? $current_class : $default_class; ?>">
                    Insights
                </a>

                <a href="<?php echo esc_url(home_url('/advisors')); ?>"
                    class="font-label-caps text-label-caps hover:text-primary transition-colors <?php echo is_page('advisors') ? $current_class : $default_class; ?>">
                    Advisors
                </a>

                <a href="<?php echo esc_url(home_url('/Inquire')); ?>"
                    class="font-label-caps text-label-caps hover:text-primary transition-colors <?php echo is_page('Inquire') ? $current_class : $default_class; ?>">
                    Inquire
                </a>

            </div>

            <!-- Icons -->
            <div class="flex items-center gap-6">

                <button class="hover:opacity-70 transition-opacity">
                    <span class="material-symbols-outlined">
                        favorite
                    </span>
                </button>

                <button class="hover:opacity-70 transition-opacity">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </button>

                <button
                    id="mobile-menu-btn"
                    class="md:hidden z-[60] relative">

                    <span id="menu-icon" class="material-symbols-outlined text-3xl">
                        menu
                    </span>

                </button>

            </div>

        </div>

    </nav>

    <!-- Mobile Menu Overlay -->
    <div
        id="mobile-menu"
        class="fixed inset-0 z-50 translate-x-full transition-transform duration-500 ease-in-out md:hidden">

        <!-- Dark Overlay -->
        <div
            id="mobile-overlay"
            class="absolute inset-0 bg-black/60 backdrop-blur-sm">
        </div>

        <!-- Side Panel -->
        <div
            class="absolute right-0 top-0 h-full w-[85%] max-w-sm bg-white shadow-2xl flex flex-col">

            <!-- Header -->
            <div class="flex items-center justify-between p-8 border-b">

                <span class="font-display-lg text-2xl">
                    ESTATE
                </span>

                <button id="close-menu">

                    <span class="material-symbols-outlined text-3xl">
                        close
                    </span>

                </button>

            </div>

            <!-- Navigation -->

            <nav class="flex flex-col px-8 py-12 gap-8">

                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="text-2xl font-display-lg hover:text-gray-500 transition">
                    Home
                </a>

                <a href="<?php echo esc_url(home_url('/collections')); ?>"
                    class="text-2xl font-display-lg hover:text-gray-500 transition">
                    Collections
                </a>

                <a href="<?php echo esc_url(home_url('/insights')); ?>"
                    class="text-2xl font-display-lg hover:text-gray-500 transition">
                    Insights
                </a>

                <a href="<?php echo esc_url(home_url('/advisors')); ?>"
                    class="text-2xl font-display-lg hover:text-gray-500 transition">
                    Advisors
                </a>

                <a href="<?php echo esc_url(home_url('/inquire')); ?>"
                    class="text-2xl font-display-lg hover:text-gray-500 transition">
                    Inquire
                </a>

            </nav>

        </div>

    </div>