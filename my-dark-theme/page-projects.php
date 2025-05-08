<?php 
/*
Template Name: Projects Page
*/
get_header(); 
?>

<!-- Projects -->
<section class="projects section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="sub-title border-bot-light">Discover</div>
            </div>
            <div class="col-md-8">
                <div class="section-title"><span>Creative</span> Projects</div>
                <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino. Design nila iman the finise viverra nec a lacus miss viventa in the setlien suscipe no curabit tristue the seneoice misuscipit non sagie the fermen.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="items mb-4">
                    <div class="con">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/07.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="category mb-0">Project P.01</span>
                            <h6><a href="/projects-page">Intermediate Hall</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="items mb-4">
                    <div class="con">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/12.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="category mb-0">Project P.02</span>
                            <h6><a href="/projects-page">Modern Loft Kitchen</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="items mb-4">
                    <div class="con">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/10.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="category mb-0">Project P.03</span>
                            <h6><a href="/projects-page">Unique Stair Designs</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="items mb-4">
                    <div class="con">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/11.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="category mb-0">Project P.04</span>
                            <h6><a href="/projects-page">Best Kitchen Design</a></h6>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="items mb-4">
                    <div class="con">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/08.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="category mb-0">Project P.05</span>
                            <h6><a href="/projects-page">Farm House Bedroom</a></h6>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="items mb-4">
                    <div class="con">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/09.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="category mb-0">Project P.06</span>
                            <h6><a href="/projects-page">Lighting At Home</a></h6>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<!-- Lets Talk -->
<section class="lets-talk">
    <div class="background bg-img bg-fixed section-padding" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/slider/b.jpg" data-overlay-dark="6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="sub-title border-bot-dark">Contact Us</div>
                </div>
                <div class="col-md-8">
                    <div class="section-title">Let's discuss your project</div>
                    <p>Fill out the form and our manager will contact you for consultation.</p>
                    <form method="post" class="contact__form" action="mail.php">
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
                            <div class="col-md-2">
                                <input class="line-gray" name="submit" type="submit" value="Send">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="checkbox" class="line-gray">
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
