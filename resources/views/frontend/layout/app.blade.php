<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('frontend.layout.head')
<body class="stretched dark side-header">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="dark">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-between">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo" data-dark-logo="images/logos/mermaid_logo.png" data-mobile-logo="images/logo.png"><img src="images/logos/mermaid_logo.png" alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo" data-dark-logo="images/logos/mermaid_logo.png" data-mobile-logo="images/logo@2x.png"><img src="images/logos/mermaid_logo.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                    </div>

                    <div class="header-misc d-none d-sm-block">
                        <div class="d-flex my-lg-3">
                            <a href="#" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu on-click">

                        <ul class="menu-container">
                            <li class="menu-item"><a class="menu-link" href="index.html"><div>Home</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>Features</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>Pages</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>Portfolio</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>Blog</div></a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Default</div></a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="blog.html"><div>Right Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-full-width.html"><div>Full Width</div></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Timeline</div></a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-timeline.html"><div>Full Width</div></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Masonry</div></a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="blog-masonry.html"><div>4 Columns</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-masonry-3.html"><div>3 Columns</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-masonry-2.html"><div>2 Columns</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-masonry-full.html"><div>100% Width</div></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Grid</div></a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="blog-grid.html"><div>4 Columns</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-grid-3.html"><div>3 Columns</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-grid-2.html"><div>2 Columns</div></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Small Thumbs</div></a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-small.html"><div>Right Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-small-full-width.html"><div>Full Width</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-small-alt.html"><div>Alternate Layout</div></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Item Splitting</div></a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="blog-grid.html"><div>Pagination</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-masonry.html"><div>Infinite Scroll</div></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Single</div></a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="blog-single.html"><div>Default Layout</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-single-full.html"><div>Full Width</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-single-small.html"><div>Small Image</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Comments Module</div></a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item"><a class="menu-link" href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>
                                            <li class="menu-item"><a class="menu-link" href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="shop.html"><div>Shop</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="#"><div>Shortcodes</div></a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="gradients.html"><div><i class="icon-tint"></i>Gradients</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="lists-cards.html"><div><i class="icon-th-list"></i>Lists &amp; Cards</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
                                </ul>
                            </li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <!-- Portfolio Items
                ============================================= -->
                <div id="portfolio" class="portfolio row grid-container gutter-30">

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/Digital/DoubleDouble.png" alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Doouble Double</a></h3>
                                <span><a href="#">Digital</a></span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/Digital/BioShrooms.png" alt="Locked Steel Gate">
                                </a>
                                <div class="bg-overlay">
              you                      <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Bio Shrooms</a></h3>
                                <span><a href="#">Digital</a></span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="images/portfolio/masonry/3/3.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-icons pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/4.jpg" alt="Morning Dew"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/4-1.jpg" alt="Morning Dew"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-media">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/masonry/3/5.jpg" alt="Console Activity">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6.jpg" alt="Shake It"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-1.jpg" alt="Shake It"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-2.jpg" alt="Shake It"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/6-3.jpg" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="images/portfolio/masonry/3/7.jpg" alt="Backpack Contents">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="images/portfolio/masonry/3/8.jpg" alt="Sunset Bulb Glow">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/8.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                <span><a href="#">Graphics</a></span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-illustrations pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9.jpg" alt="Bridge Side"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9-1.jpg" alt="Bridge Side"></a></div>
                                            <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/masonry/3/9-2.jpg" alt="Bridge Side"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="images/portfolio/full/9.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="images/portfolio/full/9-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="images/portfolio/full/9-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Bridge Side</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </article>

                </div><!-- #portfolio end -->

            </div>
        </div>
    </section><!-- #content end -->
@include('frontend.layout.foot')
</body>
</html>
