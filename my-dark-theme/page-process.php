<?php 

/*
Template Name: Process Page
*/

get_header(); ?>
        <!-- Process -->
        <section class="process section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">Workflow</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title"><span>Our</span> Process</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img">
                            <img src="images/slider/4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 valign animate-box" data-animate-effect="fadeInRight">
                        <div class="wrap">
                            <div class="number">
                                <h1>01</h1>
                            </div>
                            <div class="cont">
                                <h3>Concept Design</h3>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 order2 valign animate-box" data-animate-effect="fadeInLeft">
                        <div class="wrap">
                            <div class="number">
                                <h1>02</h1>
                            </div>
                            <div class="cont">
                                <h3>Preliminary Plans & Pricing</h3>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order1 animate-box" data-animate-effect="fadeInRight">
                        <div class="img">
                            <img src="images/slider/3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img left">
                            <img src="images/slider/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 valign animate-box" data-animate-effect="fadeInRight">
                        <div class="wrap">
                            <div class="number">
                                <h1>03</h1>
                            </div>
                            <div class="cont">
                                <h3>Working Drawings & Consents</h3>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 order2 valign animate-box" data-animate-effect="fadeInLeft">
                        <div class="wrap">
                            <div class="number">
                                <h1>04</h1>
                            </div>
                            <div class="cont">
                                <h3>Chosing Your Builder</h3>
                                <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu the ateliten finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order1 animate-box" data-animate-effect="fadeInRight">
                        <div class="img">
                            <img src="images/slider/1.jpg" alt="">
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
        <!-- Footer -->
<?php get_footer(); ?>