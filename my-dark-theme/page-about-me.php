<?php 

/*
Template Name: About-Me Page
*/

get_header(); 
?>

<!-- About Me Header -->
<section class="hero-header section-padding bg-img" data-overlay-dark="4" data-background="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-header.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 class="mb-3">About Me</h1>
            </div>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="about-content section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="sub-title border-bot-light">My Journey</div>
            </div>
            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                <h2 class="mb-4">A Journey in Architectural Excellence</h2>
                <p>My name is Carline. My architectural journey began in my hometown in Haiti whereafter, I relocated to Connecticut USA where I obtained my degree in Architectural Engineering at the University of Hartford. After my education, I got the opportunity to work  with four of the biggest firms in Orlando</p>
                <p>Florida Turner Architects</p>
                <p>HOK Architects</p>
                <p>HHCP Architects</p>
                <p>Cuhachi an Peterson Architects.</p>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <h5 class="mb-3">Education</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">Bachelor of Architectural Engineering, University of Hartford, Connecticut.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mb-3">Professional Affiliations</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">American Institute of Architects (AIA)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="featured-projects section-padding bg-dark">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <div class="sub-title border-bot-light">Featured</div>
            </div>
            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                <div class="section-title">Selected <span>Works</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <div class="project-item">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/ProjectI.jpg'); ?>" alt="Architectural Drawing" class="img-fluid">
                    </a>
                    <div class="project-info mt-3">
                        <h5><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Hillside Residence Concept</a></h5>
                        <p>Preliminary sketches</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <div class="project-item">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/Whitehouse.png'); ?>" alt="Architectural Drawing" class="img-fluid">
                    </a>
                    <div class="project-info mt-3">
                        <h5><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Urban Loft Development</a></h5>
                        <p>Technical drawings</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <div class="project-item">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/LaFontaine4.jpg'); ?>" alt="Architectural Drawing" class="img-fluid">
                    </a>
                    <div class="project-info mt-3">
                        <h5><a href="<?php echo esc_url(home_url('/projects-page')); ?>">Residential Project</a></h5>
                        <p>Live Results</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <div class="project-item">
                    <a href="<?php echo esc_url(home_url('/projects-page')); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/projects/Article.jpg'); ?>" alt="Press Feature" class="img-fluid">
                    </a>
                    <div class="project-info mt-3">
                        <h5><a href="<?php echo esc_url(home_url('/projects-page')); ?>">BIJOUX TERNER</a></h5>
                        <p>A Member of a group of architects and planners constructing project color design</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>