<?php get_header(); ?>

<header
    class="relative h-screen min-h-[700px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <video
            class="w-full h-full object-cover"
            autoplay
            muted
            loop
            playsinline
            preload="auto">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/hero.mp4" type="video/mp4">

            Your browser does not support the video tag.
        </video>
    </div>
    <div
        class="relative z-20 text-center px-margin-mobile md:px-margin-desktop max-w-5xl mx-auto">
        <h1
            class="font-display-lg text-display-lg-mobile md:text-display-lg text-white mb-6 text-shadow-premium leading-tight">
            Defining the New Standard of Living.
        </h1>
        <p
            class="font-body-lg text-body-lg text-white/90 mb-12 max-w-2xl mx-auto font-light tracking-wide">
            Exquisite residences for those who value architectural brilliance and
            unparalleled coastal serenity.
        </p>
        <!-- Luxury Search Bar -->
        <div
            class="bg-white p-2 md:p-4 rounded-lg shadow-2xl flex flex-col md:flex-row items-center gap-2 max-w-4xl mx-auto">
            <div
                class="flex-1 w-full px-4 border-b md:border-b-0 md:border-r border-outline-variant py-3 md:py-0 text-left">
                <span
                    class="block font-label-caps text-[10px] text-on-surface-variant mb-1 uppercase tracking-widest">Location</span>
                <input
                    class="w-full bg-transparent border-none focus:ring-0 font-body-md text-on-surface p-0 placeholder:text-outline"
                    placeholder="Monaco, French Riviera..."
                    type="text" />
            </div>
            <div
                class="flex-1 w-full px-4 border-b md:border-b-0 md:border-r border-outline-variant py-3 md:py-0 text-left">
                <span
                    class="block font-label-caps text-[10px] text-on-surface-variant mb-1 uppercase tracking-widest">Property Type</span>
                <select
                    class="w-full bg-transparent border-none focus:ring-0 font-body-md text-on-surface p-0 appearance-none">
                    <option>Waterfront Villa</option>
                    <option>Luxury Penthouse</option>
                    <option>Private Island</option>
                </select>
            </div>
            <div class="flex-1 w-full px-4 py-3 md:py-0 text-left">
                <span
                    class="block font-label-caps text-[10px] text-on-surface-variant mb-1 uppercase tracking-widest">Price Range</span>
                <select
                    class="w-full bg-transparent border-none focus:ring-0 font-body-md text-on-surface p-0 appearance-none">
                    <option>$5M - $10M</option>
                    <option>$10M - $25M</option>
                    <option>$25M+</option>
                </select>
            </div>
            <button
                class="w-full md:w-auto bg-primary text-white px-10 py-4 font-label-caps uppercase tracking-widest hover:bg-on-surface-variant transition-all duration-300 flex items-center justify-center gap-2">
                Search
                <span class="material-symbols-outlined text-[18px]">search</span>
            </button>
        </div>
    </div>
    <!-- Scroll Indicator -->
    <div
        class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2">
        <span
            class="font-label-caps text-[10px] text-white/60 tracking-[0.3em] uppercase">Scroll</span>
        <div
            class="w-[1px] h-12 bg-gradient-to-b from-white/60 to-transparent"></div>
    </div>
</header>
<!-- Section 1: Featured Luxury Properties -->
<section
    class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div
        class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
        <div class="max-w-2xl">
            <span
                class="font-label-caps text-on-tertiary-container mb-4 block uppercase tracking-[0.2em]">Curated Selection</span>
            <h2
                class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary">
                Featured Estates
            </h2>
        </div>
        <button
            class="font-label-caps text-secondary-fixed-dim border-b border-secondary-fixed-dim pb-1 hover:text-on-secondary-container hover:border-on-secondary-container transition-all">
            View All Properties
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <!-- Property Card 1 -->
        <div class="group cursor-pointer">
            <div
                class="relative aspect-[3/4] overflow-hidden mb-6 bg-surface-container">
                <img
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" />
                <div
                    class=" absolute top-6 left-6 bg-white/90 backdrop-blur-md px-4 py-2 font-display-lg text-body-lg text-on-surface luxury-card-shadow">
                    $14,500,000
                </div>
            </div>
            <div class="px-2">
                <p
                    class="font-label-caps text-on-tertiary-container text-[11px] uppercase tracking-widest mb-2">
                    Saint-Jean-Cap-Ferrat, France
                </p>
                <h3 class="font-headline-md text-headline-md mb-4">
                    The Azure Horizon Estate
                </h3>
                <div class="flex items-center gap-6 text-on-surface-variant">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">bed</span>
                        <span class="font-body-md text-label-md">6 Beds</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">bathtub</span>
                        <span class="font-body-md text-label-md">8 Baths</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">square_foot</span>
                        <span class="font-body-md text-label-md">1,200 m²</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property Card 2 -->
        <div class="group cursor-pointer md:mt-12">
            <div
                class="relative aspect-[3/4] overflow-hidden mb-6 bg-surface-container">
                <img
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"

                    src="<?php echo get_template_directory_uri(); ?>/assets/images/2.jpg" />
                <div
                    class="absolute top-6 left-6 bg-white/90 backdrop-blur-md px-4 py-2 font-display-lg text-body-lg text-on-surface luxury-card-shadow">
                    $28,000,000
                </div>
                <div
                    class="absolute top-6 right-6 bg-on-tertiary-container text-white px-3 py-1 font-label-caps text-[10px] tracking-widest uppercase">
                    New Release
                </div>
            </div>
            <div class="px-2">
                <p
                    class="font-label-caps text-on-tertiary-container text-[11px] uppercase tracking-widest mb-2">
                    Miami Beach, Florida
                </p>
                <h3 class="font-headline-md text-headline-md mb-4">
                    Lumina Sky Penthouse
                </h3>
                <div class="flex items-center gap-6 text-on-surface-variant">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">bed</span>
                        <span class="font-body-md text-label-md">4 Beds</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">bathtub</span>
                        <span class="font-body-md text-label-md">5 Baths</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">square_foot</span>
                        <span class="font-body-md text-label-md">850 m²</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property Card 3 -->
        <div class="group cursor-pointer">
            <div
                class="relative aspect-[3/4] overflow-hidden mb-6 bg-surface-container">
                <img
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" />
                <div
                    class="absolute top-6 left-6 bg-white/90 backdrop-blur-md px-4 py-2 font-display-lg text-body-lg text-on-surface luxury-card-shadow">
                    $42,000,000
                </div>
            </div>
            <div class="px-2">
                <p
                    class="font-label-caps text-on-tertiary-container text-[11px] uppercase tracking-widest mb-2">
                    Maldives, Indian Ocean
                </p>
                <h3 class="font-headline-md text-headline-md mb-4">
                    The Zenith Atoll
                </h3>
                <div class="flex items-center gap-6 text-on-surface-variant">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">bed</span>
                        <span class="font-body-md text-label-md">12 Beds</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">bathtub</span>
                        <span class="font-body-md text-label-md">15 Baths</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">square_foot</span>
                        <span class="font-body-md text-label-md">3,500 m²</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 2: Luxury Collections -->
<section class="bg-surface-container-low py-section-gap overflow-hidden">
    <div
        class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
        <div class="text-center mb-20">
            <span
                class="font-label-caps text-on-tertiary-container mb-4 block uppercase tracking-[0.3em]">Exclusive Portfolios</span>
            <h2
                class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary">
                Luxury Collections
            </h2>
        </div>
        <div
            class="grid grid-cols-1 md:grid-cols-12 gap-gutter h-auto md:h-[800px]">
            <!-- Collection 1: Penthouses -->
            <div
                class="md:col-span-8 relative group overflow-hidden cursor-pointer h-[400px] md:h-full">
                <img
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/4.jpg" />
                <div
                    class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-500"></div>
                <div class="absolute bottom-12 left-12">
                    <h3 class="font-display-lg text-headline-lg text-white mb-4">
                        The Penthouse Series
                    </h3>
                    <p class="font-body-md text-white/80 max-w-md mb-8">
                        Unrivaled elevations and panoramic cityscapes in the world's
                        most vibrant capitals.
                    </p>
                    <button
                        class="bg-white/10 hover:bg-white text-white hover:text-primary backdrop-blur-md px-8 py-3 font-label-caps uppercase tracking-widest transition-all">
                        Explore Collection
                    </button>
                </div>
            </div>
            <!-- Collection 2: Waterfront & Islands -->
            <div
                class="md:col-span-4 grid grid-rows-2 gap-gutter h-[800px] md:h-full">
                <div class="relative group overflow-hidden cursor-pointer">
                    <img
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/5.jpg" />
                    <div
                        class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition-colors duration-500">
                    </div>
                    <div class="absolute bottom-8 left-8">
                        <h3 class="font-headline-md text-white">Waterfront</h3>
                        <button
                            class="font-label-caps text-white text-[10px] uppercase tracking-widest mt-2 flex items-center gap-2">
                            View Portfolio
                            <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <div class="relative group overflow-hidden cursor-pointer">
                    <img
                        class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"

                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGPoRSMRZsPdiXYpwZU-U-NhReFD75w82i0iVErp95sCzFA-Be_J8mz30R6Slc6AAiaiSJDXz7haLc5tYJQelQd3wKZsGyShGV1P76Rqpecpj0mi-hmVBp9JfzG7VyuOgf9AjGKtvrIKmd3GcbvFv_9iHfSp79_BBmXZPv0R264YuSyhq5djQwE82QM3bvs0BKGNAp_vygygvFAc1dx3ZsQgoOr1_EzXmSaiqKW0LP008yFv6aH2WL" />
                    <div
                        class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition-colors duration-500"></div>
                    <div class="absolute bottom-8 left-8">
                        <h3 class="font-headline-md text-white">Private Islands</h3>
                        <button
                            class="font-label-caps text-white text-[10px] uppercase tracking-widest mt-2 flex items-center gap-2">
                            View Portfolio
                            <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 3: Lifestyle Experiences -->
<section class="py-section-gap relative overflow-hidden">
    <div
        class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
        <div class="order-2 lg:order-1">
            <div class="relative">
                <img
                    class="w-full aspect-square object-cover shadow-2xl"
                    data-alt="A close-up high-fidelity lifestyle shot of a bespoke luxury wine cellar. It features dark oak cabinetry, integrated soft warm lighting illuminating premium wine bottles, and a central marble tasting table with two crystal wine glasses. The atmosphere is sophisticated, dark, and intimate, showcasing the highest level of craftsmanship and lifestyle luxury."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxzpyRfp8v_7Lu59sRmk-jFXY0vF7U6gY9q8kPl-uX0PF03kC_9pGGyIUa7NbYe9rf7XXcYz0GXJzbTGFi9Rn0dW5HB6hQ1xBTnSpBdZv7dkwIE51BF3KLGWUWqQuZjdSF_T0IIYb99HJSPUrBXAuJPqBoMX6kkIki-8XY8I2RLDvVzAsTNdaFSrahkHGYYvje35vBfwW1Kr_Ve5gklhuAinanKGfWzAnhuPFGjkLaQ7-ZZ4ukz8Hh" />
                <div
                    class="absolute -bottom-12 -right-12 hidden lg:block w-72 h-72 border border-outline-variant p-4 bg-surface-bright">
                    <img
                        class="w-full h-full object-cover"
                        data-alt="A luxurious home spa interior featuring a minimalist stone steam room with soft ambient lighting and a small indoor waterfall. The space is filled with a gentle mist, and the walls are made of textured slate. The aesthetic is extremely calm and tranquil, representing high-end wellness amenities."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIWtPunKyGaiN1VQPTDJ0yvVD80HSDxhc4eaAQK3CU4tPxXKuXiRweYu3YgGFQmQfjzx5AWOWcOub4iuZo6SvGM7hBQC2khjTmpw1n4Q5-Iot3kTKsQavuEyY8_3l3JW35e5THyS84OK5Qet7s9KrPWdHOisrYPX3c-hIZYJY-bkSCT_XqlEgboDTsKLa5w-hiik-PaYF0oZjKBeMIFlQPgzBjC95k2jChkjuut2iqU3p1jK6XAbIj" />
                </div>
            </div>
        </div>
        <div class="order-1 lg:order-2">
            <span
                class="font-label-caps text-on-tertiary-container mb-6 block uppercase tracking-[0.2em]">The Experience</span>
            <h2
                class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-8 leading-tight">
                Beyond Four Walls.
            </h2>
            <p class="font-body-lg text-on-surface-variant mb-12 max-w-xl">
                We believe luxury is found in the details—the way the light hits
                your morning terrace, the curated amenities that anticipate your
                every need, and the vibrant neighborhoods that define your
                lifestyle.
            </p>
            <div class="space-y-8">
                <div class="flex items-start gap-6">
                    <div
                        class="w-12 h-12 flex-shrink-0 bg-surface-container rounded-full flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">concierge</span>
                    </div>
                    <div>
                        <h4 class="font-label-md text-on-surface font-semibold mb-2">
                            Bespoke Concierge
                        </h4>
                        <p class="font-body-md text-on-surface-variant">
                            Personalized property management and lifestyle services
                            tailored to your unique requirements.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div
                        class="w-12 h-12 flex-shrink-0 bg-surface-container rounded-full flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">architecture</span>
                    </div>
                    <div>
                        <h4 class="font-label-md text-on-surface font-semibold mb-2">
                            Architectural Curation
                        </h4>
                        <p class="font-body-md text-on-surface-variant">
                            We only represent properties that meet our stringent criteria
                            for design, heritage, and innovation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>