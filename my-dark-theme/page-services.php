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
                        <p>Architecture viverra tristique justo duis vitae diaminte neque nivamus aestan ateuene artines ariianu the ateliten finibus viverra nec lacus in the nedana mis erodino. Design nila iman the finise viverra nec a lacus miss viventa in the setlien suscipe no curabit tristue the seneoice misuscipit non sagie the fermen.</p>
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
                                        <p>Architecture bibendum eros eget lacus the vulputate, sit amet vehicula nibh placerat in lectus vitae justo pulvinar cursus.</p>
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
                                        <p>Interior design eros eget lacus the vulputate, sit amet vehicula nibh placerat in lectus vitae the justo pulvinar of cursus.</p>
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
                                        <p>Urban design eros eget lacus the vulputate, sit amet vehicula nibh placerat in lectus vitae the justo pulvinar of cursus.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-5 animate-box" data-animate-effect="fadeInUp">
                                <div class="item bg-4">
                                    <div class="con">
                                        <a href="/services-page">
                                        <div class="numb">04</div>
                                        <h5>Planing</h5>
                                        <p>Architecture bibendum eros eget lacus the vulputate, sit amet vehicula nibh placerat in lectus vitae justo pulvinar cursus.</p>
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
                                        <p>Interior design eros eget lacus the vulputate, sit amet vehicula nibh placerat in lectus vitae the justo pulvinar of cursus.</p>
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
                                        <p>Urban design eros eget lacus the vulputate, sit amet vehicula nibh placerat in lectus vitae the justo pulvinar of cursus.</p>
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
