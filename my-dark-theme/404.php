<?php get_header(); ?>
        <!-- 404 Section  -->
        <section class="notfound section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-12 text-center">
                        <div class="number animate-box" data-animate-effect="fadeInUp">404</div>
                        <div class="title animate-box" data-animate-effect="fadeInUp">Sorry We Can't Find That Page!</div>
                        <p class="animate-box" data-animate-effect="fadeInUp">The page you are looking for was moved, removed, renamed or never existed.</p>
                        <div class="error-form mb-4 animate-box" data-animate-effect="fadeInUp">
                            <form method="post" action="index.html">
                                <div class="form-group clearfix">
                                    <input type="search" name="text" value="" placeholder="Search here" required="" class="mb-3">
                                    <input name="submit" type="submit" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>