<?php get_header(); ?>
<main class="min-h-screen flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-8xl font-display-lg mb-6">
            404
        </h1>
        <h2 class="text-3xl mb-4">
            Page Not Found
        </h2>
        <p class="text-body-lg text-gray-500 mb-8">
            The page you're looking for doesn't exist or has been moved.
        </p>
        <a
            href="<?php echo esc_url(home_url('/')); ?>"
            class="inline-flex px-8 py-4 border border-black hover:bg-black hover:text-white transition">
            Return Home
        </a>

    </div>

</main>

<?php get_footer(); ?>