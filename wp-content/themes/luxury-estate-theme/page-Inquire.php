<?php get_header(); ?>

<!-- Hero Section -->
<section class="relative min-h-screen md:h-[972px] w-full overflow-hidden">
    <div class="absolute inset-0 bg-black/20 z-10"></div>
    <div class="absolute inset-0 hero-zoom">
        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" />
    </div>
    <div class="absolute bottom-margin-desktop left-margin-desktop z-20 max-w-2xl text-white">
        <p class="font-label-caps text-label-caps tracking-[0.2em] mb-4 uppercase">New York • Upper East Side</p>
        <h1 class="font-display-lg text-display-lg md:text-[80px] leading-none mb-6">The Obsidian Penthouse</h1>
        <div class="flex gap-8">
            <div class="flex flex-col">
                <span class="font-label-caps text-[10px] opacity-70 uppercase tracking-widest">Square Ft</span>
                <span class="font-headline-md text-headline-md">8,450</span>
            </div>
            <div class="flex flex-col">
                <span class="font-label-caps text-[10px] opacity-70 uppercase tracking-widest">Bedrooms</span>
                <span class="font-headline-md text-headline-md">5</span>
            </div>
            <div class="flex flex-col">
                <span class="font-label-caps text-[10px] opacity-70 uppercase tracking-widest">Bathrooms</span>
                <span class="font-headline-md text-headline-md">6.5</span>
            </div>
        </div>
    </div>
</section>
<!-- Sticky Summary Bar -->
<div class="relative md:sticky top-16 md:top-[88px] z-40 w-full glass-panel shadow-sm">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-3 md:py-5 flex flex-col md:flex-row md:items-center md:justify-between gap-4">

        <div>
            <p class="font-label-caps text-[10px] uppercase text-on-surface-variant">
                Current Listing
            </p>

            <p class="text-2xl md:text-headline-md font-headline-md">
                $42,500,000
            </p>


        </div>

        <div class="hidden md:flex gap-6 border-l border-outline-variant pl-8">
            <!-- Desktop stats -->
        </div>

        <button class="w-full md:w-auto bg-primary text-on-primary px-6 md:px-10 py-3 md:py-4 font-label-caps text-label-caps uppercase">
            Inquire
        </button>

    </div>
</div>
<main class="max-w-container-max mx-auto px-margin-desktop mt-section-gap">
    <!-- Overview & Description -->
    <div class="grid grid-cols-12 gap-gutter">
        <div class="col-span-12 lg:col-span-7">
            <p class="font-label-caps text-label-caps text-on-tertiary-container mb-4 uppercase tracking-[0.3em]">The Vision</p>
            <h2 class="font-headline-lg text-headline-lg mb-8">An architectural masterpiece suspended above the city.</h2>
            <div class="space-y-6 font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                <p>Designed by renowned architect Elena Valli, The Obsidian Penthouse represents the pinnacle of Manhattan living. Occupying the entire top two floors of the iconic Crown Tower, this residence offers 360-degree views of Central Park and the skyline.</p>
                <p>The interior palette is a study in texture and light—honed Nero Marquina marble, wire-brushed oak, and hand-applied plaster walls that catch the changing light of the day.</p>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-4 lg:col-start-9 space-y-12">
            <div>
                <h4 class="font-label-caps text-label-caps mb-6 border-b border-outline-variant pb-2">PROPERTY HIGHLIGHTS</h4>
                <ul class="space-y-4 font-body-md text-body-md">
                    <li class="flex justify-between"><span>Private Elevator</span><span class="font-semibold text-primary">Direct Entry</span></li>
                    <li class="flex justify-between"><span>Ceiling Height</span><span class="font-semibold text-primary">14 ft</span></li>
                    <li class="flex justify-between"><span>Outdoor Space</span><span class="font-semibold text-primary">1,200 sq ft Terrace</span></li>
                    <li class="flex justify-between"><span>Storage</span><span class="font-semibold text-primary">Private Vault</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Amenities Section (Bento Grid) -->
    <section class="mt-section-gap">
        <h3 class="font-headline-lg text-headline-lg text-center mb-16">Curated Amenities</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-gutter h-auto md:h-[800px]">
            <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden bg-surface-container">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="A private, minimal home spa with a dark stone infinity pool and atmospheric cove lighting. The space is quiet and moody, featuring sleek black marble surfaces and a single bronze sculpture by the water. High-end architectural photography style with a focus on reflection and texture." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDz7yBWA-lQ9c4WoljWgCykzhbUCXKWkP1ImjG3d4ZZtJcX8GiYpUWQZBpindYxqzUkjO7SnBF8NaA7uvHC_EsXrF2mlsomiYFvQJG1UDcKSVf2p6tPWR9vZdENG8nkxTvO0CEeQ8v7sh2E0IWSAtarHM9wnzRjtW-pQVRfLi3jrNlBW5RjjA041kUD0Tqi_YVSeRDV0lrFLMPtT3jVbntbynXTgh_GuxYHbaJP9XWK7ewo0-Vax8pX" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-10">
                    <span class="material-symbols-outlined text-white text-4xl mb-4" data-icon="pool">pool</span>
                    <h4 class="font-headline-md text-headline-md text-white">Private Wellness Spa</h4>
                </div>
            </div>
            <div class="relative group overflow-hidden bg-surface-container">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="A temperature-controlled luxury wine cellar with glass walls and custom walnut shelving holding hundreds of bottles. The lighting is warm and recessed, creating a sophisticated amber glow. Minimalist and modern aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAotDWKMEaFxgeROsRT9m4zBALdD0gWFMrRC6_zpHkw8hdpBwCCDOTiWSACxv7gIqlUeQzysb40s33Bseju4b7AT4CVP1X-byG2c0BUi4WJyXgK6Np3gljtvpTlESAc86OkotjvjlFqksYMSQPMKJbjtFl-3g5jAmMo-TL8PgnFWbDGFXNSXCq2U6BFg865F9gz6NDpQbMdT9IDcD9ZWYvZ-XfEo202iolda0hnZjyuUoqwDQ-iFnNv" />
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <p class="text-white font-label-caps tracking-widest">WINE GALLERY</p>
                </div>
            </div>
            <div class="relative group overflow-hidden bg-surface-container">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="A state-of-the-art private screening room with tiered velvet seating, professional acoustic panels, and a large projection screen. The lighting is deep indigo and moody, reflecting a high-end luxury cinema experience." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKPGpOdrsg01ghXhxtV6Ms0ceDv7Nwl0ITONc6kWSUAz5K47Y5_lsccn4ahKeoAliv30P4BP0qiPT_vsVdQ-ioulAFapmyL5ecKyhrlanXvr5Cp5QNkXS_bEsYoUVGOMBmTDBPMrUG-gSI2JCJY47v8shy3fRTQXZPQKHvwRtkCTgOwDFV0K7-I0dC6ScINExlHYCUVKeyvmCtXt-fN94dN5X65Pqb4z-2N6LiQY4XVY_MQOHqwT2G" />
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <p class="text-white font-label-caps tracking-widest">PRIVATE CINEMA</p>
                </div>
            </div>
            <div class="md:col-span-2 relative group overflow-hidden bg-surface-container">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="A spacious private terrace with white limestone flooring, designer outdoor furniture, and lush green landscaping. The background shows an iconic city skyline under a clear blue sky. Luxury rooftop living aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXXv4nsLQKOnyyYiwVIrETRqWGpZC4PiXfdfUTvLq3ALX_zmbzGVoxTsLz6o0lS7XATXP5qjcC_V0aike3apFZOJV4ydLyNzb8Iom-R6QmdDOupyOgO2fofxdQMNrbKp2Px8uvBl49d5d3YtpemJ2UVa1XRIQy3PSFVRQ-v8X40YpEf2QHAD8_8arhAL3ny3Uvcrl3EMTfXj7rqnEaxA0IAYqvA_nnnpgypBAlp6Fd8LvLKQy6g5pm" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-10">
                    <span class="material-symbols-outlined text-white text-4xl mb-4" data-icon="deck">deck</span>
                    <h4 class="font-headline-md text-headline-md text-white">Sky Terrace</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Tour / Immersive Section -->
    <section class="mt-section-gap relative h-[716px] w-full bg-primary flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 opacity-60">
            <img class="w-full h-full object-cover" data-alt="A wide cinematic shot of a luxury penthouse dining room at dusk. The long dark wood table is set for a formal dinner with crystal glasses and thin black candles. The city lights of New York shimmer through the windows in the background. High-contrast, moody architectural photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBKWFzuUOtSi6aF_EnJx0nEMnpkHH6sbNBcoEUlTEHMQ6p-I2e8kGf-d0gRrZAcYMtkKM_NftFcIMqg19xWlHHa3KyvHxzqnSMkbTGrJGXWU_d0ExekdEAev_vpRSA9jtJqKHBavAYIjhqJ7KzdwEfmG1FeSlj1gD_OsTNur5DiJHOX03L_3wIvODQSrIM20Fn7tPXMLqrFpLx618_dIrdJNNT_PdMETSBXMYDlO7IMBIvkUX3-5k8" />
        </div>
        <div class="relative z-10 text-center text-white">
            <button class="w-24 h-24 rounded-full border border-white flex items-center justify-center group hover:bg-white transition-colors duration-500">
                <span class="material-symbols-outlined text-4xl group-hover:text-primary transition-colors" data-icon="play_arrow" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
            </button>
            <p class="mt-8 font-label-caps tracking-[0.4em] uppercase">The Immersive Film</p>
        </div>
    </section>
    <!-- Floor Plan -->
    <section class="mt-section-gap py-section-gap border-y border-outline-variant">
        <div class="grid grid-cols-12 gap-gutter items-center">
            <div class="col-span-12 lg:col-span-5 mb-12 lg:mb-0">
                <h3 class="font-headline-lg text-headline-lg mb-6">Meticulous Spatial Design</h3>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10">A fluid open-concept layout that prioritizes privacy for the master wing while celebrating the expansive social core.</p>
                <div class="space-y-4">
                    <button class="w-full text-left p-6 border border-primary flex justify-between items-center group hover:bg-primary hover:text-white transition-all">
                        <span class="font-label-caps text-label-caps uppercase tracking-widest">Main Living Level</span>
                        <span class="material-symbols-outlined" data-icon="download">download</span>
                    </button>
                    <button class="w-full text-left p-6 border border-outline-variant flex justify-between items-center group hover:border-primary transition-all">
                        <span class="font-label-caps text-label-caps uppercase tracking-widest">Guest & Entertainment Wing</span>
                        <span class="material-symbols-outlined" data-icon="download">download</span>
                    </button>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 lg:col-start-7">
                <div class="p-12 bg-white shadow-2xl shadow-black/5 border border-surface-container-highest">
                    <img class="w-full h-auto opacity-80" data-alt="A professional architectural floor plan of a luxury penthouse. Clean black lines on a white background showing a sophisticated layout with a master suite, chef's kitchen, and expansive terrace. Minimalist drawing style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeBda3H3alUCHbzJE1Xp8bKB_SnzqZQJgP3T2ddoF26tcPUsodABKXDfOOZTOjv_Db6wtmj18fercFG9e1EglSTsOV-tRxRDf7x6L8Pl4Nr9GozdB9tzgf6fecSeBq5d0WOjCekejQBje7ZnyjzRK37hxMfbXSlyrXqEjgpgdxrvA8I1IpVU8KgTzBlxIKig4Wo7zeMx72MeNh9N-izxF98kiF9p-nnVyogg0d7B1kHHHjHHPMn6OW" />
                </div>
            </div>
        </div>
    </section>
    <!-- Interactive Map / Location -->
    <section class="mt-section-gap">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <p class="font-label-caps text-label-caps text-on-tertiary-container mb-4 uppercase tracking-[0.3em]">Neighborhood</p>
                <h3 class="font-headline-lg text-headline-lg">Upper East Side, NY</h3>
            </div>
            <p class="max-w-md font-body-md text-body-md text-on-surface-variant">Steps from the Metropolitan Museum of Art and the emerald expanse of Central Park.</p>
        </div>
        <div class="h-[600px] w-full bg-surface-container relative overflow-hidden">
            <img class="w-full h-full object-cover grayscale opacity-60" data-alt="A stylized, minimal map of the Upper East Side in New York City. The map is rendered in tones of soft beige and charcoal grey, highlighting Central Park and major cultural landmarks. A single gold pin marks the location of the property. Professional editorial cartography style." data-location="Manhattan, New York" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxzey_jyxzQEsbrXCedPSgi4v7WUPoBRz00s8LDn6AlT1hl8csWjvJ2TpzGy1wuao8BTjbhpPgXFRhNwuox-HSUpLVRkk6Bou2q0iIItI49p3WWpfQq2BTaKmg5auPMUuhUydqPAF_mKKzFmb4oR_Xps-vFTaT1cW80qoVUOP0Oaabc3ISpemNPfHuvyGieZ8t7xbEDcziA5ETJsBMslU6b9UO9XsDqeq-faJmq8ADluIbRHVGTExz" />
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <div class="w-4 h-4 bg-primary rounded-full animate-ping"></div>
                <div class="w-4 h-4 bg-primary rounded-full absolute"></div>
            </div>
            <!-- Map UI Overlays -->
            <div class="absolute top-8 left-8 flex flex-col gap-2">
                <div class="bg-white p-4 shadow-lg flex items-center gap-4 border border-outline-variant/30">
                    <div class="w-10 h-10 bg-surface-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-tertiary-container" data-icon="park">park</span>
                    </div>
                    <div>
                        <p class="font-label-caps text-[10px] opacity-50 uppercase">Nearest Landmark</p>
                        <p class="font-body-md font-bold">Central Park • 2 min</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Advisor Section -->
    <section class="mt-section-gap mb-section-gap">
        <div class="grid grid-cols-12 gap-gutter items-stretch">
            <div class="col-span-12 lg:col-span-5 bg-tertiary p-margin-desktop text-white">
                <p class="font-label-caps text-label-caps text-on-tertiary-container mb-12 uppercase tracking-[0.3em]">Private Advisory</p>
                <div class="flex items-center gap-8 mb-12">
                    <img class="w-24 h-24 rounded-full object-cover border-2 border-on-tertiary-container" data-alt="A professional headshot of a luxury real estate advisor, a middle-aged man with sharp features, wearing a tailored charcoal suit and a crisp white shirt. The background is a blurred high-end office. The lighting is dramatic and cinematic, following a premium branding style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8I0ejdaFzHk7WGssizje3cdbMl48d9PhroN8Q59NaBKeH-tbRd6QkOGoxc78U8VgFMQ0n9nJZCyzcHGM1TrzxyZZFAf3nhG2dcw25p-ZoMUabdLyCV1ca9skAwTtRM0C5AeUVZ8AAg73pI461ifSgvohNDbzRAE9YXWfJhWTOynZfwFGU_cfaWcQiP90mjtxpDD_3eReKwskibwclsGrCF1HsceH-jR0SydmLRThq6B7YlrX5MZiV" />
                    <div>
                        <h4 class="font-headline-md text-headline-md leading-none mb-2">Julian Vance</h4>
                        <p class="font-label-caps text-label-caps opacity-60">Global Luxury Partner</p>
                    </div>
                </div>
                <p class="font-body-lg text-body-lg mb-12 leading-relaxed opacity-80 italic">"This property is one of the few truly legacy assets currently available in New York. I'm available for private showings at your convenience."</p>
                <div class="space-y-4">
                    <a class="flex items-center gap-4 hover:text-on-tertiary-container transition-colors" href="tel:+12125550198">
                        <span class="material-symbols-outlined" data-icon="call">call</span>
                        <span class="font-body-md text-body-md">+1 (212) 555-0198</span>
                    </a>
                    <a class="flex items-center gap-4 hover:text-on-tertiary-container transition-colors" href="mailto:vance@estate.com">
                        <span class="material-symbols-outlined" data-icon="mail">mail</span>
                        <span class="font-body-md text-body-md">vance@estate.com</span>
                    </a>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-7 bg-white p-margin-desktop shadow-2xl shadow-black/5 flex flex-col justify-center">
                <h3 class="font-headline-md text-headline-md mb-10">Request a Private Showing</h3>
                <form class="space-y-8">
                    <div class="grid grid-cols-2 gap-8">
                        <div class="col-span-2 md:col-span-1">
                            <label class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest block mb-2">Full Name</label>
                            <input class="w-full bg-transparent border-0 border-b border-on-background focus:ring-0 focus:border-on-tertiary-container p-0 pb-2 placeholder-outline-variant font-body-md" placeholder="Enter your name" type="text" />
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest block mb-2">Email Address</label>
                            <input class="w-full bg-transparent border-0 border-b border-on-background focus:ring-0 focus:border-on-tertiary-container p-0 pb-2 placeholder-outline-variant font-body-md" placeholder="email@address.com" type="email" />
                        </div>
                    </div>
                    <div>
                        <label class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest block mb-2">Inquiry Type</label>
                        <select class="w-full bg-transparent border-0 border-b border-on-background focus:ring-0 focus:border-on-tertiary-container p-0 pb-2 font-body-md">
                            <option>Private Tour</option>
                            <option>Request Brochure</option>
                            <option>Financial Inquiry</option>
                            <option>Virtual Consultation</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest block mb-2">Additional Requests</label>
                        <textarea class="w-full bg-transparent border-0 border-b border-on-background focus:ring-0 focus:border-on-tertiary-container p-0 pb-2 placeholder-outline-variant font-body-md resize-none" placeholder="Your message..." rows="3"></textarea>
                    </div>
                    <button class="bg-primary text-on-primary w-full py-5 font-label-caps text-label-caps tracking-widest uppercase transition-all hover:bg-opacity-90">
                        Submit Inquiry
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>