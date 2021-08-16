@extends('master')
@section('content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container justify-content-center">

          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                      <a href="{{route('site5portfolioDetails')}}" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Testimonials</h2>
          <h3>What They <span>Are Saying</span> About Us</h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">

            <div class="row">

              <div class="col-lg-6">
                <div class="testimonial-item">
                  <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4 mt-lg-0">
                  <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  <img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  <img src="{{asset('assets/img/testimonials/testimonials-6.jpg')}}" class="testimonial-img" alt="">
                  <h3>Emily Harison</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
@stop
