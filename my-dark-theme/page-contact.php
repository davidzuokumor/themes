<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<!-- Contact Section -->
<div class="contact section-padding">
    <div class="container">
        <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
            <div class="col-md-4">
                <div class="sub-title border-bot-light">Contact</div>
            </div>
            <div class="col-md-8">
                <div class="section-title">Get in touch</div>
            </div>
        </div>
        
        <div class="row">
            <!-- Contact Info -->
            <div class="col-lg-4 offset-lg-4 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <p>800 MONTANA STREET BUILDING 1<br>ORLANDO, FL 32803.</p>
                <div class="phone">+1 (407) 765-5152</div>
                <div class="mail mb-3">cfontaine8185@yahoo.com</div>
                <div class="social mt-2"> 
                    <a href="#"><i class="ti-twitter"></i></a> 
                    <a href="#"><i class="ti-instagram"></i></a> 
                    <a href="#"><i class="ti-linkedin"></i></a> 
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-4 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <h4 class="mb-4">Have a Project? - <span>Let's Talk</span></h4>
                <form method="post" class="contact__form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="process_contact_form">
                    
                    <!-- Form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form elements -->
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input name="name" type="text" placeholder="Your Name *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input name="email" type="email" placeholder="Your Email *" required>
                        </div>
                        <div class="col-md-3 form-group">
                            <input class="line-gray" name="phone" type="tel" placeholder="Your Number *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input name="subject" type="text" placeholder="Subject *" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                        </div>
                        <div class="col-md-12 mt-2">
                            <input name="submit" type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Google Maps -->
<div class="google-maps">
    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13419.032130422971!2d-79.94077173022463!3d32.772154400000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fe7a1ae84ff639%3A0xe5c782f71924a526!2s24%20King%20St%2C%20Charleston%2C%20SC%2029401%2C%20USA!5e0!3m2!1sen!2sus!4v1665070628853!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- Let's Talk Section -->
<section class="lets-talk">
    <div class="background bg-img bg-fixed section-padding" data-background="<?php echo esc_url(get_template_directory_uri() . '/images/slider/b.jpg'); ?>" data-overlay-dark="6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="sub-title border-bot-dark">Contact Us</div>
                </div>
                <div class="col-md-8">
                    <div class="section-title">Let's discuss your project</div>
                    <p>Fill out the form and our manager will contact you for consultation.</p>
                    
                    <form method="post" class="contact__form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <input type="hidden" name="action" value="process_quick_contact">
                        
                        <!-- Form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="line-gray" name="name" type="text" placeholder="Full Name *" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <input class="line-gray" name="phone" type="tel" placeholder="Phone *" required>
                            </div>
                            <div class="col-md-2">
                                <input class="line-gray btn btn-primary" name="submit" type="submit" value="Send">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="checkbox" id="privacy-policy" class="line-gray" required>
                                <label for="privacy-policy">
                                    I agree with the <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" class="underline line-gray">privacy policy</a>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();