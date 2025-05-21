<?php get_header(); ?>

<!-- Slider -->
<header id="slider-area" class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <div class="text-left item bg-img" data-overlay-dark="4" data-background="<?php echo esc_url(get_template_directory_uri() . '/assets/images/slider/1.jpg'); ?>">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <h4>Project P.01</h4>
                            <h1>Ultra-Modern House Design</h1>
                            <p>Seamlessly built, Giving you superior living.</p> 
                            <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="button-light">View Project</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-left item bg-img" data-overlay-dark="3" data-background="<?php echo esc_url(get_template_directory_uri() . '/assets/images/slider/2.jpg'); ?>">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <h4>Project P.02</h4>
                            <h1>Ultra-Luxurious Villa</h1>
                            <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artine aringianu the miss finibus viverra lacus fermen.</p> 
                            <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="button-light">View Project</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-left item bg-img" data-overlay-dark="4" data-background="<?php echo esc_url(get_template_directory_uri() . '/assets/images/slider/3.jpg'); ?>">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <h4>Project P.03</h4>
                            <h1>Modernity In Nature</h1>
                            <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artine aringianu the miss finibus viverra lacus fermen.</p>
                            <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="button-light">View Project</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</header>

<!-- About -->
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="sub-title border-bot-light">Who are we?</div>
            </div>
            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                <div class="section-title"><span>About</span> ArchSan</div>
                <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artine aringianu the ateliten finibus viverra nec in the nedana. Design nila iman the finise viverra nec a lacus themo the seneoice misuscipit drana miss non sagie the fermen.</p>
                <p>Planner inilla duiman at elit finibus viverra a lacus themo the drudea seneoice misuscipit nonie the fermen miverration tristique jusio the ivite dianne onen nivami acsestion augue artine.</p><br>
                <div class="row">
                    <div class="col col-md-4">
                        <div class="about-box">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-1.png'); ?>" class="icon" alt="">
                            <h5>Architecture</h5>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="about-box">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-2.png'); ?>" class="icon" alt="">
                            <h5>Interior</h5>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="about-box">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-3.png'); ?>" class="icon" alt="">
                            <h5>Planing</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Me -->
<section class="section-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                <h3 class="mb-3">Find out more about me and my projects</h3>
                <a href="<?php echo esc_url(home_url('/about-me')); ?>" class="button-light">About Me</a>
            </div>
        </div>
    </div>
</section>
<!-- Projects -->
<div class="projects2 section-padding">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <div class="sub-title border-bot-light">Discover</div>
            </div>
            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                <div class="section-title">Creative <span>Projects</span></div>
                <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino. Design nila iman the finise viverra nec a lacus miss viventa in the setlien suscipe no curabit tristue the seneoice misuscipit non sagie the fermen.</p>
            </div>
        </div>
        <div class="row text-center animate-box" data-animate-effect="fadeInUp">
            <ul class="projects2-filter">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".ongoing">Ongoing Projects</li>
                <li data-filter=".completed">Completed Projects</li>
            </ul>
        </div>
        <div class="row projects2-items animate-box" data-animate-effect="fadeInUp">
            <div class="col-md-6 single-item ongoing">
                <div class="projects2-wrap">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/06.jpg'); ?>" alt=""></a>
                    <div class="projects2-con">
                        <p>Project P.01</p>
                        <h3><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Modern Houses</a></h3>
                        <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="project2-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item completed">
                <div class="projects2-wrap">
                    <a href="<?php echo esc_url(home_url('/project-page')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/02.jpg'); ?>" alt=""></a>
                    <div class="projects2-con">
                        <p>Project P.02</p>
                        <h3><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Luxurious Villa</a></h3>
                        <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="project2-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item ongoing">
                <div class="projects2-wrap">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/03.jpg'); ?>" alt=""></a>
                    <div class="projects2-con">
                        <p>Project P.03</p>
                        <h3><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Ultra BlackHome</a></h3>
                        <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="project2-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item ongoing">
                <div class="projects2-wrap">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/04.jpg'); ?>" alt=""></a>
                    <div class="projects2-con">
                        <p>Project P.04</p>
                        <h3><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Modern Bedrooom</a></h3>
                        <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="project2-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item completed">
                <div class="projects2-wrap">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/01.jpg'); ?>" alt=""></a>
                    <div class="projects2-con">
                        <p>Project P.05</p>
                        <h3><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Mountain House</a></h3>
                        <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="project2-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-item completed">
                <div class="projects2-wrap">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/05.jpg'); ?>" alt=""></a>
                    <div class="projects2-con">
                        <p>Project P.06</p>
                        <h3><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Modern Food Table</a></h3>
                        <a href="<?php echo esc_url(home_url('/projects-page')); ?>" class="project2-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding" data-background="<?php echo esc_url(get_template_directory_uri() . '/assets/images/slider/a.jpg'); ?>" data-overlay-dark="6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <h3 class="sub-title border-bot-dark">Testiominals</h3>
                </div>
                <div class="col-md-8">
                    <div class="section-title">What Client's Say?</div>
                    <div class="wrap">
                        <div class="owl-carousel owl-theme">
                            <div class="item"> <span class="quote"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/quot.png'); ?>" alt=""></span>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique. Design nila iman the finise viverra nec a lacus themo the seneoice misuscipit non sagie the fermen.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team/1.jpg'); ?>" alt=""> </div>
                                    <div class="cont">
                                        <h6>Jason Brown</h6> <span>Crowne Plaza Owner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <span class="quote">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/quot.png'); ?>" alt="">
                                </span>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique. Design nila iman the finise viverra nec a lacus themo the seneoice misuscipit non sagie the fermen.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team/2.jpg'); ?>" alt=""> </div>
                                    <div class="cont">
                                        <h6>Emily White</h6> <span>Armada Owner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> <span class="quote">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/quot.png'); ?>" alt="">
                                </span>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique. Design nila iman the finise viverra nec a lacus themo the seneoice misuscipit non sagie the fermen.</p>
                                <div class="info">
                                    <div class="author-img"> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team/4.jpg'); ?>" alt=""> </div>
                                    <div class="cont">
                                        <h6>Jesica Smith</h6> <span>Alsa Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="blog-home section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="sub-title border-bot-light">Blog</div>
            </div>
            <div class="col-md-8">
                <div class="section-title"><span>Latest</span> News</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="item">
                    <div class="post-img">
                        <a href="<?php echo esc_url(home_url('/home')); ?>"><div class="img"> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog/1.jpg'); ?>" alt=""> </div></a>
                    </div>
                    <div class="cont">
                        <h4><a href="<?php echo esc_url(home_url('/post')); ?>">5 Best Villa ideas in 2025</a></h4>
                        <div class="info"> <a href="<?php echo esc_url(home_url('/home')); ?>"><span>Exterior Design</span></a> <a href="<?php echo esc_url(home_url('/blog')); ?>">Dec, 24</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="post-img">
                        <a href="<?php echo esc_url(home_url('/post')); ?>"><div class="img"> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog/2.jpg'); ?>" alt=""> </div></a>
                    </div>
                    <div class="cont">
                        <h4><a href="<?php echo esc_url(home_url('/post')); ?>">Luxury kitchen ideas</a></h4>
                        <div class="info"> <a href="<?php echo esc_url(home_url('/blog')); ?>"><span>Interior Design</span></a> <a href="<?php echo esc_url(home_url('/blog')); ?>">Dec, 21</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="post-img">
                        <a href="<?php echo esc_url(home_url('/post')); ?>"><div class="img"> <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog/3.jpg'); ?>" alt=""> </div></a>
                    </div>
                    <div class="cont">
                        <h4><a href="<?php echo esc_url(home_url('/post')); ?>">Home Decorating Inspiration</a></h4>
                        <div class="info"> <a href="<?php echo esc_url(home_url('/blog')); ?>"><span>Interior Design</span></a> <a href="<?php echo esc_url(home_url('/blog')); ?>">Dec, 18</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="lets-talk">
    <div class="background bg-img bg-fixed section-padding" data-background="<?php echo esc_url(get_template_directory_uri() . '/assets/images/slider/b.jpg'); ?>" data-overlay-dark="6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="sub-title border-bot-dark">Contact Us</div>
                </div>
                <div class="col-md-8">
                    <div class="section-title">Let's discuss your project</div>
                    <p>Fill out the form and our manager will contact you for consultation.</p>
                    <form id="archsan-contact-form" class="contact__form" method="post">
                        <!-- Form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                            </div>
                        </div>
                        <!-- Form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="line-gray" name="name" type="text" placeholder="Full Name *" required="">
                            </div>
                            <div class="col-md-3 form-group">
                                <input class="line-gray" name="phone" type="text" placeholder="Phone *" required="">
                            </div>
                            <div class="col-md-12 form-group">
                            <input name="email" type="email" placeholder="Your Email *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input name="subject" type="text" placeholder="Subject *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                        </div>
                            <div class="col-md-2">
                                <input class="line-gray" name="submit" type="submit" value="Send">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="checkbox" class="line-gray" required>
                                <label>I agree with the <a href="#0" class="underline line-gray">privacy policy</a></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>