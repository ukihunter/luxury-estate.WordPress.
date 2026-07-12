<?php get_header(); ?>
<main class="pt-32 pb-section-gap px-margin-desktop max-w-container-max mx-auto">
    <header class="mb-20">
        <h1 class="font-display-lg text-display-lg mb-4">Curated Residences</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">A selective portfolio of the world's most exceptional properties, defined by architectural integrity and unparalleled craftsmanship.</p>
    </header>
    <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-start">
        <!-- Sidebar / Refined Filter -->
        <aside class="md:col-span-3 md:sticky md:top-32 space-y-8">
            <div>
                <h3 class="font-label-caps text-label-caps mb-6 text-primary">Location</h3>
                <input class="ghost-input w-full text-body-md py-2 focus:ring-0" placeholder="Search Global Regions" type="text" />
            </div>
            <div>
                <h3 class="font-label-caps text-label-caps mb-6 text-primary">Beds &amp; Baths</h3>
                <div class="flex flex-wrap gap-3">
                    <button class="px-4 py-2 border border-outline hover:border-primary transition-colors font-label-md text-label-md">1+</button>
                    <button class="px-4 py-2 border border-primary bg-primary text-on-primary font-label-md text-label-md">3+</button>
                    <button class="px-4 py-2 border border-outline hover:border-primary transition-colors font-label-md text-label-md">5+</button>
                </div>
            </div>
            <div>
                <h3 class="font-label-caps text-label-caps mb-6 text-primary">Refinements</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between group cursor-pointer">
                        <span class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Coastal Views</span>
                        <span class="material-symbols-outlined text-outline group-hover:text-primary text-[20px]" data-icon="water_drop">water_drop</span>
                    </li>
                    <li class="flex items-center justify-between group cursor-pointer">
                        <span class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Private Estate</span>
                        <span class="material-symbols-outlined text-outline group-hover:text-primary text-[20px]" data-icon="landscape">landscape</span>
                    </li>
                    <li class="flex items-center justify-between group cursor-pointer">
                        <span class="font-body-md text-body-md text-on-surface-variant group-hover:text-primary transition-colors">Penthouse</span>
                        <span class="material-symbols-outlined text-outline group-hover:text-primary text-[20px]" data-icon="apartment">apartment</span>
                    </li>
                </ul>
            </div>
            <div class="pt-8">
                <button class="w-full py-4 bg-primary text-on-primary font-label-caps text-label-caps hover:opacity-90 transition-opacity">Reset Filters</button>
            </div>
        </aside>
        <!-- Property Grid -->
        <div class="md:col-span-9 grid grid-cols-1 lg:grid-cols-2 gap-y-24 gap-x-gutter">
            <!-- Property Card 1 -->
            <article class="group property-card transition-all duration-700 ease-out">
                <div class="relative overflow-hidden luxury-shadow aspect-[4/5] mb-8">
                    <div class="absolute top-6 left-6 z-10 bg-white/90 backdrop-blur-md px-4 py-1 font-label-caps text-[10px] tracking-widest text-primary uppercase">Exclusive Listing</div>
                    <img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" />
                    <div class="absolute bottom-6 right-6 z-10 bg-primary text-on-primary px-5 py-2 font-headline-md text-headline-md tracking-tight luxury-shadow">$18,400,000</div>
                </div>
                <div class="space-y-3 px-2">
                    <div class="flex items-center gap-4 text-outline font-label-caps text-label-caps">
                        <span>5 BEDS</span>
                        <span class="w-1 h-1 bg-outline rounded-full"></span>
                        <span>6 BATHS</span>
                        <span class="w-1 h-1 bg-outline rounded-full"></span>
                        <span>9,200 SQFT</span>
                    </div>
                    <h2 class="font-headline-md text-headline-md leading-tight group-hover:text-on-tertiary-container transition-colors">The Obsidian Pavilion</h2>
                    <p class="font-body-md text-on-surface-variant flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]" data-icon="location_on">location_on</span>
                        Monte Vista Heights, California
                    </p>
                </div>
            </article>
            <!-- Property Card 2 -->
            <article class="group property-card transition-all duration-700 ease-out lg:translate-y-16">
                <div class="relative overflow-hidden luxury-shadow aspect-[4/5] mb-8">
                    <div class="absolute top-6 left-6 z-10 bg-white/90 backdrop-blur-md px-4 py-1 font-label-caps text-[10px] tracking-widest text-primary uppercase">New Arrival</div>
                    <img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" src="<?php echo get_template_directory_uri(); ?>/assets/images/2.jpg" />
                    <div class="absolute bottom-6 right-6 z-10 bg-primary text-on-primary px-5 py-2 font-headline-md text-headline-md tracking-tight luxury-shadow">$12,950,000</div>
                </div>
                <div class="space-y-3 px-2">
                    <div class="flex items-center gap-4 text-outline font-label-caps text-label-caps">
                        <span>4 BEDS</span>
                        <span class="w-1 h-1 bg-outline rounded-full"></span>
                        <span>4 BATHS</span>
                        <span class="w-1 h-1 bg-outline rounded-full"></span>
                        <span>6,800 SQFT</span>
                    </div>
                    <h2 class="font-headline-md text-headline-md leading-tight group-hover:text-on-tertiary-container transition-colors">Forest Sanctuary</h2>
                    <p class="font-body-md text-on-surface-variant flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]" data-icon="location_on">location_on</span>
                        Aspen, Colorado
                    </p>
                </div>
            </article>
            <!-- Property Card 3 -->
            <article class="group property-card transition-all duration-700 ease-out">
                <div class="relative overflow-hidden luxury-shadow aspect-[4/5] mb-8">
                    <div class="absolute top-6 left-6 z-10 bg-white/90 backdrop-blur-md px-4 py-1 font-label-caps text-[10px] tracking-widest text-primary uppercase">Off-Market</div>
                    <img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" />
                    <div class="absolute bottom-6 right-6 z-10 bg-primary text-on-primary px-5 py-2 font-headline-md text-headline-md tracking-tight luxury-shadow">$24,000,000</div>
                </div>
                <div class="space-y-3 px-2">
                    <div class="flex items-center gap-4 text-outline font-label-caps text-label-caps">
                        <span>3 BEDS</span>
                        <span class="w-1 h-1 bg-outline rounded-full"></span>
                        <span>4 BATHS</span>
                        <span class="w-1 h-1 bg-outline rounded-full"></span>
                        <span>4,500 SQFT</span>
                    </div>
                    <h2 class="font-headline-md text-headline-md leading-tight group-hover:text-on-tertiary-container transition-colors">The Aurora Penthouse</h2>
                    <p class="font-body-md text-on-surface-variant flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]" data-icon="location_on">location_on</span>
                        Tribeca, New York
                    </p>
                </div>
            </article>
            <!-- Property Card 4 -->
            <article class="group property-card transition-all duration-700 ease-out lg:translate-y-16">
                <div class="relative overflow-hidden luxury-shadow aspect-[4/5] mb-8">
                    <div class="absolute top-6 left-6 z-10 bg-white/90 backdrop-blur-md px-4 py-1 font-label-caps text-[10px] tracking-widest text-primary uppercase">Investment</div>
                    <img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" src="<?php echo get_template_directory_uri(); ?>/assets/images/4.jpg" />
                    <div class="absolute bottom-6 right-6 z-10 bg-primary text-on-primary px-5 py-2 font-headline-md text-headline-md tracking-tight luxury-shadow">£32,000,000</div>
                </div>
                <div class="space-y-3 px-2">
                    <div class="flex items-center gap-4 text-outline font-label-caps text-label-caps">
                        <span>7 BEDS</span>
                        <span class="w-1 h-1 bg-outline rounded-full"></span>
                        <span>9 BATHS</span>
                        <span class="w-1 h-1 bg-outline rounded-full"></span>
                        <span>15,000 SQFT</span>
                    </div>
                    <h2 class="font-headline-md text-headline-md leading-tight group-hover:text-on-tertiary-container transition-colors">The Mayfair Heritage</h2>
                    <p class="font-body-md text-on-surface-variant flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]" data-icon="location_on">location_on</span>
                        Mayfair, London
                    </p>
                </div>
            </article>
        </div>
    </div>
</main>

<?php get_footer(); ?>