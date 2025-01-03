@extends('layouts.main')

@section('main-section')
    <!-- home-section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hi, Myself</h3>
            <h1> <span> Tushar Patel </span></h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to
                border-box. This ensures padding does not affect the final computed width of an element, but it can
                cause problems with some third-party software like Google Maps and Google Custom Search Engine.</p>
            <div class="social-media">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-snapchat"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
        <div class="home-img">
            <img src="{{ asset('images/Corporate.webp') }}" alt="">
        </div>
    </section>

    <!-- About Section Design -->

    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ asset('images/webbg.webp') }}" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">ABOUT <span>Me</span></h2>
            <h3>Web Developer</h3>
            <p>For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to
                border-box. This ensures padding does not affect the final computed width of an element, but it can
                cause problems with some third-party software like Google Maps and Google Custom Search Engine.</p>
            <a href="#" class="btn">Read more</a>
        </div>
    </section>


    <!-- Service Section Design -->

    <section class="services" id="services">
        <h2 class="heading">My <span>Service</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class="fa-solid fa-code"></i>
                <h3>web Development</h3>
                <p>For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to
                    border-box. This ensures padding does not affect the final computed width of an element, but it can
                    cause problems with some third-party software like Google Maps and Google Custom Search Engine.</p>
                <a href="#" class="btn">Read more</a>
            </div>

            <div class="services-box">
                <i class="fa-solid fa-palette"></i>
                <h3>UI/UX Design</h3>
                <p>For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to
                    border-box. This ensures padding does not affect the final computed width of an element, but it
                    can
                    cause problems with some third-party software like Google Maps and Google Custom Search Engine.
                </p>
                <a href="#" class="btn">Read more</a>
            </div>

            <div class="services-box">
                <i class="fa-brands fa-android"></i>
                <h3>App Development</h3>
                <p>For more straightforward sizing in CSS, we switch the global box-sizing value from
                    content-box to
                    border-box. This ensures padding does not affect the final computed width of an element, but
                    it can
                    cause problems with some third-party software like Google Maps and Google Custom Search
                    Engine.</p>
                <a href="#" class="btn">Read more</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading"> Latest <span>Projects</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="{{ asset('images/development-4536630_640.webp') }}" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to
                        border-box. This ensures padding does not affect the final computed width of an element, but it
                        can cause problems with some third-party software like Google Maps and Google Custom Search
                        Engine.</p>
                    <i class="fa-solid fa-share-from-square"></i>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('images/background-with-website-homepage-design-ideas-concept-create-webpage_1248848-13704.avif') }}"
                    alt="">
                <div class="portfolio-layer">
                    <h4>Web Development</h4>
                    <p>For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to
                        border-box. This ensures padding does not affect the final computed width of an element, but it
                        can cause problems with some third-party software like Google Maps and Google Custom Search
                        Engine.</p>
                    <i class="fa-solid fa-share-from-square"></i>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('images/images.jpg') }}" alt="">
                <div class="portfolio-layer">
                    <h4>software Development</h4>
                    <p>For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to
                        border-box. This ensures padding does not affect the final computed width of an element, but it
                        can cause problems with some third-party software like Google Maps and Google Custom Search
                        Engine.</p>
                    <i class="fa-solid fa-share-from-square"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- contact Section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="number" placeholder="Mobile Number">
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email Address">
                <input type="password" placeholder="Email Password">
            </div>
            <textarea name="" id="" cols="30" rows="8" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>

    </section>
@endsection
