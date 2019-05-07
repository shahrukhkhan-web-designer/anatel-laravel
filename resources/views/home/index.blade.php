@extends('layout.mainLayout')
@section('meta-tag')
    @endsection
@section('content')

    <section class="Carousel banner" style="max-height:400px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="item-image item-image-1">
                        <div class="overlay"></div>



                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="homeCaption">
                                        <div class="row">

                                            <div class="col-md-4 d-none d-md-block">
                                                <img src="img/Office-man.png" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="verticalCenter">
                                                    <h1>Lorem Ipsum dolor sit</h1>
                                                    <p style="text-align:justify; margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptatem temporibus illo voluptate! Similique sequi, iste nulla harum provident corrupti velit illo maxime, laborum odio est iusto dolor doloribus!</p>
                                                </div>
                                                <a href="" class="btn warning-bg read-more text-white">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>




                </div>
                <!-- <img class="d-block w-100" src="img/banner-dummy.jpg" alt="First slide"> -->

                <div class="carousel-item">
                    <div class="item-image item-image-2">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="homeCaption">
                                        <div class="row">

                                            <div class="col-md-4 d-none d-md-block">
                                                <img src="img/Office-man.png" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="verticalCenter">
                                                    <h1>Lorem Ipsum dolor sit</h1>
                                                    <p style="text-align:justify; margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptatem temporibus illo voluptate! Similique sequi, iste nulla harum provident corrupti velit illo maxime, laborum odio est iusto dolor doloribus!</p>
                                                </div>
                                                <a href="" class="btn warning-bg read-more text-white">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <img class="d-block w-100" src="img/office.jpg" alt="Second slide"> -->
                </div>
                <div class="carousel-item">
                    <div class="item-image item-image-3">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div class="homeCaption">
                                        <div class="row">

                                            <div class="col-md-4 d-none d-md-block">
                                                <img src="img/Office-man.png" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="verticalCenter">
                                                    <h1>Lorem Ipsum dolor sit</h1>
                                                    <p style="text-align:justify; margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptatem temporibus illo voluptate! Similique sequi, iste nulla harum provident corrupti velit illo maxime, laborum odio est iusto dolor doloribus!</p>
                                                </div>
                                                <a href="" class="btn warning-bg read-more text-white">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <img class="d-block w-100" src="img/banner-dummy.jpg" alt="Third slide"> -->
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>
    <!-- Services -->

    <section class="services paddingSpace">

        <div class="container">
            <div class="big-title text-center">

                <h2>Our <strong>Business</strong></h2>
                <div class="vspace10">

                </div>
                <p class="service-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum tenetur, ratione alias deleniti expedita dolorem, cupiditate labore excepturi illum repudiandae hic corporis ex nostrum! Atque.</p>
            </div>

            <div class="row offset-md-1">
                <div class="col-md-5">
                    <div class="serviceBox">
                        <div class="icon mb-12">
                            <div class="back-icon1"></div>
                        </div>
                        <div class="box-heading">
                            <h3 class="mb-10">Tours & Travels</h3>
                        </div>
                        <div class="box-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A molestias quaerat necessitatibus laboriosam quidem eos ullam voluptatem repellat architecto? Doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 offset-md-1">
                    <div class="serviceBox">
                        <div class="icon mb-12">
                            <div class="back-icon2"></div>
                        </div>
                        <div class="box-heading">
                            <h3 class="mb-10">Education Counselling</h3>
                        </div>
                        <div class="box-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A molestias quaerat necessitatibus laboriosam quidem eos ullam voluptatem repellat architecto? Doloremque.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-40"></div>
            <div class="row offset-md-1">
                <div class="col-md-5">
                    <div class="serviceBox">
                        <div class="icon mb-12">
                            <div class="back-icon3"></div>
                        </div>
                        <div class="box-heading">
                            <h3 class="mb-10">Digital Marketing </h3>
                        </div>
                        <div class="box-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A molestias quaerat necessitatibus laboriosam quidem eos ullam voluptatem repellat architecto? Doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 offset-md-1">
                    <div class="serviceBox">
                        <div class="icon mb-12">
                            <div class="back-icon4"></div>
                        </div>
                        <div class="box-heading">
                            <h3 class="mb-10">IT Solutions</h3>
                        </div>
                        <div class="box-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A molestias quaerat necessitatibus laboriosam quidem eos ullam voluptatem repellat architecto? Doloremque.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Services -->
    <section class="ourTeam paddingSpace">
        <div class="big-title text-center">
            <p class="title-desc">We Make Your Smile</p>
            <h2>Our Great <strong>Team</strong></h2>
        </div>
        <div class="container">
            <div class="row"><div id="aq-block-33" class="aq-block  aq-block-aq_text_block col-md-12  aq-first cf"><p></p><center>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore<br>
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</center><p></p>
                </div>
            </div>

        </div>
        <div class="vspace10">

        </div>
        <!-- Team Images -->
        <div class="container">
            <div class="row">
                <div class="col-md-3" >
                    <div class="dedicated-member dedicated">
                        <div class="member-photo">
                            <img width="320" height="240" src="img/team.jpg" class="attachment-team size-team wp-post-image" alt="member-04" >
                            <div class="member-name">Sarra Doe
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="member-info">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</div>
                        <div class="progress-label">Wordpress</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="97%" data-appear-animation-delay="400" style="animation-delay: 400ms; width: 97%;">
                                <span class="percentage">97%</span>
                            </div>
                        </div>
                        <div class="progress-label">Joomla</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="92%" data-appear-animation-delay="800" style="animation-delay: 800ms; width: 92%;">
                                <span class="percentage">92%</span>
                            </div>
                        </div>
                        <div class="progress-label">Drupal</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="78%" data-appear-animation-delay="1200" style="animation-delay: 1200ms; width: 78%;">
                                <span class="percentage">78%</span>
                            </div>
                        </div>
                        <div class="member-socail">
                            <a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="dribbble" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="dedicated-member dedicated">
                        <div class="member-photo">
                            <img width="320" height="240" src="img/team.jpg" class="attachment-team size-team wp-post-image" alt="member-04" >
                            <div class="member-name">Sarra Doe
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="member-info">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</div>
                        <div class="progress-label">Wordpress</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="97%" data-appear-animation-delay="400" style="animation-delay: 400ms; width: 97%;">
                                <span class="percentage">97%</span>
                            </div>
                        </div>
                        <div class="progress-label">Joomla</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="92%" data-appear-animation-delay="800" style="animation-delay: 800ms; width: 92%;">
                                <span class="percentage">92%</span>
                            </div>
                        </div>
                        <div class="progress-label">Drupal</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="78%" data-appear-animation-delay="1200" style="animation-delay: 1200ms; width: 78%;">
                                <span class="percentage">78%</span>
                            </div>
                        </div>
                        <div class="member-socail">
                            <a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="dribbble" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="dedicated-member dedicated">
                        <div class="member-photo">
                            <img width="320" height="240" src="img/team.jpg" class="attachment-team size-team wp-post-image" alt="member-04" >
                            <div class="member-name">Sarra Doe
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="member-info">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</div>
                        <div class="progress-label">Wordpress</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="97%" data-appear-animation-delay="400" style="animation-delay: 400ms; width: 97%;">
                                <span class="percentage">97%</span>
                            </div>
                        </div>
                        <div class="progress-label">Joomla</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="92%" data-appear-animation-delay="800" style="animation-delay: 800ms; width: 92%;">
                                <span class="percentage">92%</span>
                            </div>
                        </div>
                        <div class="progress-label">Drupal</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="78%" data-appear-animation-delay="1200" style="animation-delay: 1200ms; width: 78%;">
                                <span class="percentage">78%</span>
                            </div>
                        </div>
                        <div class="member-socail">
                            <a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="dribbble" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="dedicated-member dedicated">
                        <div class="member-photo">
                            <img width="320" height="240" src="img/team.jpg" class="attachment-team size-team wp-post-image" alt="member-04" >
                            <div class="member-name">Sarra Doe
                                <span>Developer</span>
                            </div>
                        </div>
                        <div class="member-info">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</div>
                        <div class="progress-label">Wordpress</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="97%" data-appear-animation-delay="400" style="animation-delay: 400ms; width: 97%;">
                                <span class="percentage">97%</span>
                            </div>
                        </div>
                        <div class="progress-label">Joomla</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="92%" data-appear-animation-delay="800" style="animation-delay: 800ms; width: 92%;">
                                <span class="percentage">92%</span>
                            </div>
                        </div>
                        <div class="progress-label">Drupal</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="78%" data-appear-animation-delay="1200" style="animation-delay: 1200ms; width: 78%;">
                                <span class="percentage">78%</span>
                            </div>
                        </div>
                        <div class="member-socail">
                            <a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="dribbble" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Member -->


    <!-- Testimonials -->
    <section class="testimonials paddingSpace">
        <div class="big-title text-center">
            <h2>What <strong>Client</strong> Say?</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <section class="Carousel banner" style="max-height:400px;">
                            <div id="carouselExampleIndicators11" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <span class="leftQuote"><i class="fa fa-quote-left"></i></span>
                                    <span class="rightQuote"><i class="fa fa-quote-right"></i></span>
                                    <div class="carousel-item active">
                                        <div class="testimonialsBox">

                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis iusto assumenda officia, similique mollitia nam.</p>
                                            <small><strong>John Doe</strong></small><br>
                                            <small>Silicon Valley</small>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <div class="testimonialsBox">

                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis iusto assumenda officia, similique mollitia nam.</p>
                                            <small><strong>John Doe</strong></small><br>
                                            <small>Silicon Valley</small>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <div class="testimonialsBox">

                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis iusto assumenda officia, similique mollitia nam.</p>
                                            <small><strong>John Doe</strong></small><br>
                                            <small>Silicon Valley</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="testimonials paddingSpace">
            <div class="big-title text-center">

                    <h2>What  <strong>Client</strong> Say?</h2>
                </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="testimonialsContainer"></div>
                    <div class="testimonialsBox">
                        <span class="leftQuote"><i class="fa fa-quote-left"></i></span>
                        <span class="rightQuote"><i class="fa fa-quote-right"></i></span>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis iusto assumenda officia, similique mollitia nam.</p>
                    </div>
                </div>

            </div>
        </div>
    </section> -->


    <!-- Logo Carousel -->
    <section class="LogoCarousel paddingSpace">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h2 class="text-center">Our  Partners</h2>
                    <section class="customer-logos slider">

                        <div class="slide"><img src="img/anrari-logo.png"></div>


                        <div class="slide"><img src="img/Vinayana-Logo.png"></div>


                    </section>
                </div>
            </div>
        </div>

    </section>
    @endSection