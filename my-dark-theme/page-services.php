<?php 

/*
Template Name: Services Page
*/

get_header(); ?>
        <!-- Services -->
        <section class="services section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">What We Do</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title"><span>Our</span> Services</div>
                        <p>We offer a comprehensive range of architectural and design solutions tailored to bring your vision to life. From innovative architecture to detailed interior concepts, our team combines creativity with technical expertise to deliver spaces that are both functional and inspiring. Each service is designed to meet the highest standards of quality while reflecting your unique style and needs.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-5 animate-box" data-animate-effect="fadeInUp">
                                <div class="item bg-1">
                                    <div class="con">
                                        <a href="/services-page">
                                        <div class="numb">01</div>
                                        <h5>Architecture</h5>
                                        <p>Creating innovative, sustainable, and functional architectural designs that blend beauty and practicality to enhance your living or working environment.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-5 animate-box" data-animate-effect="fadeInUp">
                                <div class="item bg-2">
                                    <div class="con">
                                        <a href="/services-page">
                                        <div class="numb">02</div>
                                        <h5>Interior Design</h5>
                                        <p>Transforming interiors into elegant and comfortable spaces, carefully curated to reflect personality and optimize usability.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-5 animate-box" data-animate-effect="fadeInUp">
                                <div class="item bg-3">
                                    <div class="con">
                                        <a href="/services-page">
                                        <div class="numb">03</div>
                                        <h5>Urban Design</h5>
                                        <p>Planning and designing urban environments that promote sustainable living, community engagement, and aesthetic appeal.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-5 animate-box" data-animate-effect="fadeInUp">
                                <div class="item bg-4">
                                    <div class="con">
                                        <a href="/services-page">
                                        <div class="numb">04</div>
                                        <h5>Planning</h5>
                                        <p>Strategic site and project planning that aligns with your goals, ensuring efficient use of space and resources.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-5 animate-box" data-animate-effect="fadeInUp">
                                <div class="item bg-5">
                                    <div class="con">
                                        <a href="/services-page">
                                        <div class="numb">05</div>
                                        <h5>3D Modelling</h5>
                                        <p>Detailed 3D visualizations and models that help you envision your project before construction begins.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-5 animate-box" data-animate-effect="fadeInUp">
                                <div class="item bg-6">
                                    <div class="con">
                                        <a href="/services-page">
                                        <div class="numb">06</div>
                                        <h5>Decor Plans</h5>
                                        <p>Custom decor plans that complement architectural and interior design, adding the perfect finishing touches to your space.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lets Talk -->
        <section class="lets-talk">
        <div class="background bg-img bg-fixed section-padding" data-background="images/slider/b.jpg" data-overlay-dark="6">
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
