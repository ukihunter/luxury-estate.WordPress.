 </html>
 </body>
 <footer
     class="bg-surface-container-lowest dark:bg-tertiary-container w-full pt-section-gap pb-margin-desktop border-t border-outline-variant dark:border-outline">
     <div
         class="grid grid-cols-12 gap-gutter px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto font-body-md text-body-md">
         <div class="col-span-12 lg:col-span-4 mb-12 lg:mb-0">
             <a
                 href="<?php echo esc_url(home_url('/')); ?>"
                 class="font-display-lg text-headline-md text-primary dark:text-on-background mb-8 inline-block">
                 ESTATE
             </a>
             <p class="text-on-surface-variant dark:text-outline max-w-xs mb-8">
                 Crafting extraordinary living experiences through architectural
                 excellence and unparalleled service for the global elite.
             </p>
             <div class="flex gap-6">
                 <a
                     class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                     href="#">Instagram</a>
                 <a
                     class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                     href="#">LinkedIn</a>
                 <a
                     class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                     href="#">YouTube</a>
             </div>
         </div>
         <div class="col-span-6 md:col-span-3 lg:col-span-2">
             <h5
                 class="font-label-caps text-[10px] text-on-tertiary-container mb-6 uppercase tracking-widest">
                 Portfolio
             </h5>
             <ul class="space-y-4">
                 <li>
                     <a
                         class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                         href="#">Residential</a>
                 </li>
                 <li>
                     <a
                         class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                         href="#">Commercial</a>
                 </li>
                 <li>
                     <a
                         class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                         href="#">Off-Market</a>
                 </li>
                 <li>
                     <a
                         class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                         href="#">Development</a>
                 </li>
             </ul>
         </div>
         <div class="col-span-6 md:col-span-3 lg:col-span-2">
             <h5
                 class="font-label-caps text-[10px] text-on-tertiary-container mb-6 uppercase tracking-widest">
                 Company
             </h5>
             <ul class="space-y-4">
                 <li>
                     <a
                         class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                         href="<?php echo esc_url(home_url('/about')); ?>">Our Story</a>
                 </li>
                 <li>
                     <a
                         class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                         href="<?php echo esc_url(home_url('/advisors')); ?>">Advisors</a>
                 </li>
                 <li>
                     <a
                         class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                         href="<?php echo esc_url(home_url('/media-kit')); ?>">Media Kit</a>
                 </li>
                 <li>
                     <a
                         class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors duration-200"
                         href="<?php echo esc_url(home_url('/careers')); ?>">Careers</a>
                 </li>
             </ul>
         </div>
         <div class="col-span-12 md:col-span-6 lg:col-span-4 mt-12 lg:mt-0">
             <h5
                 class="font-label-caps text-[10px] text-on-tertiary-container mb-6 uppercase tracking-widest">
                 Newsletter
             </h5>
             <p class="text-on-surface-variant dark:text-outline-variant mb-6">
                 Receive curated insights into the world's most exclusive real estate
                 markets.
             </p>
             <form class="flex gap-2">
                 <input
                     class="flex-1 bg-transparent border-0 border-b border-outline-variant focus:border-primary focus:ring-0 px-0 py-2 font-body-md text-on-surface outline-none"
                     placeholder="Email Address"
                     type="email" />
                 <button
                     class="font-label-caps text-[10px] text-primary uppercase tracking-widest border border-primary px-6 py-2 hover:bg-primary hover:text-white transition-all"
                     type="submit">
                     Join
                 </button>
             </form>
         </div>
         <div
             class="col-span-12 border-t border-outline-variant dark:border-outline mt-16 pt-12 flex flex-col md:flex-row justify-between items-center gap-6">
             <div
                 class="text-[11px] text-on-surface-variant dark:text-outline tracking-widest">
                 © <?php echo date('Y'); ?> ESTATE LUXURY REAL ESTATE. ALL RIGHTS RESERVED.
             </div>
             <div class="flex gap-8 text-[11px] uppercase tracking-widest">
                 <a
                     class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors"
                     href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a>
                 <a
                     class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors"
                     href="<?php echo esc_url(home_url('/terms-of-service')); ?>">Terms of Service</a>
                 <a
                     class="text-on-surface-variant dark:text-outline-variant hover:text-primary transition-colors"
                     href="<?php echo esc_url(home_url('/cookies')); ?>">Cookies</a>
             </div>
         </div>
     </div>
 </footer>

 <?php wp_footer(); ?>
 </body>

 </html>