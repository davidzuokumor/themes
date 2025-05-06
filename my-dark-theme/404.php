<?php get_header(); ?>

<div class="content-wrapper">
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>

    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Lines -->
    <div class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </div>

    <!-- 404 Section -->
    <section class="notfound section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 text-center">
                    <div class="number animate-box" data-animate-effect="fadeInUp">404</div>
                    <div class="title animate-box" data-animate-effect="fadeInUp">
                        <?php esc_html_e("Sorry, we can't find that page!", 'your-text-domain'); ?>
                    </div>
                    <p class="animate-box" data-animate-effect="fadeInUp">
                        <?php esc_html_e("The page you are looking for was moved, removed, renamed or never existed.", 'your-text-domain'); ?>
                    </p>
                    <div class="error-form mb-4 animate-box" data-animate-effect="fadeInUp">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
