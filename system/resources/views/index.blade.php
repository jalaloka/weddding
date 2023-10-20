@extends('layouts/app')
@section('conten')
    <!-- start of hero -->
    <div class="wpo-box-style">
        <section class="wpo-hero-slider">
            <h2 class="hidden">some</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ url('public') }}/assets/images/slider/slide-1.jpg">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ url('public') }}/assets/images/slider/slide-2.jpg">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ url('public') }}/assets/images/slider/slide-3.jpg">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ url('public') }}/assets/images/slider/slide-4.jpg">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </div>
    <!-- end of hero slider -->
    <!-- start wpo-wedding-date -->
    <section class="wpo-hero-wedding-date" id="beranda">
        {{-- <div class="wpo-wedding-date-inner">
            <span class="wow fadeInUp" data-wow-duration="800ms">Save the Date</span>
            <h2 class="wow fadeInUp" data-wow-duration="1000ms">Jane & Peter</h2>
            <p class="wow fadeInUp" data-wow-duration="1200ms">We Are Getting Married November 15,2022</p>
            <span class="shape wow fadeInUp" data-wow-duration="1400ms"><img
                    src="{{ url('public') }}/assets/images/wedding-date/1.png" alt=""> </span>
            <div class="row wow fadeInUp" data-wow-duration="1600ms">
                <div class="col col-xs-12">
                    <div class="clock-grids">
                        <div id="clock"></div>
                    </div>
                </div>
            </div>
        </div> <!-- end container --> --}}
        <div data-swiper-parallax="50" class="slide-title">
            <h2 style="font-size: 35px">SELAMAT DATANG <br>
                DI NIKAH YOM 😁</h2>
        </div>
        <div data-swiper-parallax="100" class="slide-text">
            <p style="font-size: 18px">Kami hadir untuk menjadikan pernikahan impian Anda menjadi kenyataan.<br>
                Bersama-sama, kita akan menciptakan momen tak terlupakan dalam pernikahan Anda.
                <br>Selamat datang di perjalanan pernikahan Anda yang tak terlupakan.
            </p>
        </div>
        <div class="shape-1">
            <img src="{{ url('public') }}/assets/images/wedding-date/2.png" alt="">
        </div>
        <div class="shape-2">
            <img src="{{ url('public') }}/assets/images/wedding-date/3.png" alt="">
        </div>
    </section>
    <!-- end wpo-wedding-date -->
    <!-- start wpo-couple-section -->
    <section class="wpo-couple-section-s3 section-padding" id="about">
        <div class="container-fluid">
            <div class="couple-area clearfix">
                <div class="row align-items-center">
                    <div class="col col-xl-3 col-lg-4 col-12">
                        <div class="text-grid wow fadeInLeftSlow" data-wow-duration="800ms">
                            <div class="vector">
                                <img src="{{ url('public') }}/assets/images/WEDDING.PNG" alt="">
                            </div>
                            <h3>ABOUT US</h3>
                            <p>Kami hadir untuk menjadikan pernikahan impian Anda menjadi kenyataan. Bersama-sama,
                                kita akan menciptakan momen tak terlupakan dalam pernikahan Anda. Selamat datang di
                                perjalanan pernikahan Anda yang tak terlupakan.</p>
                        </div>
                    </div>
                    <div class="col col-xl-6 col-lg-4 col-12">
                        <div class="middle-couple-pic wow fadeInUp" data-wow-duration="1000ms">
                            <div class="middle-couple-pic-inner">
                                <img src="{{ url('public') }}/assets/images/couple/3.jpg" alt="">
                            </div>
                            <div class="couple-flower">
                                <img src="{{ url('public') }}/assets/images/couple/couple-flower.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-3 col-lg-4 col-12">
                        <div class="text-grid wow fadeInRightSlow" data-wow-duration="800ms">
                            <div class="vector">
                                <img src="{{ url('public') }}/assets/images/WEDDING.PNG" alt="">
                            </div>
                            <h3>ABOUT US</h3>
                            <p>Kami hadir untuk menjadikan pernikahan impian Anda menjadi kenyataan. Bersama-sama,
                                kita akan menciptakan momen tak terlupakan dalam pernikahan Anda. Selamat datang di
                                perjalanan pernikahan Anda yang tak terlupakan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-couple-section -->
    <!-- start wpo-video-section -->
    <section class="wpo-video-section pb-0 section-padding">
        <h2 class="hidden">some</h2>
        <div class="container-fluid">
            <div class="video-wrap">
                <img src="{{ url('public') }}/assets/images/video-img/img-1.jpg" alt="">
                <a href="https://www.youtube.com/embed/s4dWp9_nNYk" class="video-btn" data-type="iframe"><i
                        class="fi flaticon-play"></i></a>
            </div>
        </div>
    </section>
    <!-- end wpo-video-section-->
    <!-- start wpo-story-section -->
    <section class="wpo-event-section-s2 section-padding pt-0" id="fitur">
        <div class="container">
            <div class="wpo-section-title">
                <span>FITUR KAMI</span>
                <h2>KAMI SIAP MENEIRMA</h2>
            </div>
            <div class="wpo-event-wrap">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item wow fadeInUp" data-wow-duration="1000ms">
                            <div class="wpo-event-img">
                                <div class="wpo-event-img-inner">
                                    <img src="{{ url('public') }}/assets/images/event/4.jpg" alt="">
                                </div>
                                <div class="title">
                                    <h2>The Reception</h2>
                                </div>
                            </div>
                            <div class="wpo-event-text">
                                <p> Pernikahan adalah sebuah kesempatan bagi pengantin dan tamu-tamu mereka untuk merayakan
                                    pernikahan dengan bersenang-senang,
                                    makan bersama, berdansa, dan berinteraksi. Acara resepsi pernikahan ini sering kali
                                    melibatkan makan malam atau makanan ringan,
                                    serta aktivitas seperti toasts (ucapan selamat), potongan kue pengantin, dan berbagai
                                    hiburan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item wow fadeInUp" data-wow-duration="1200ms">
                            <div class="wpo-event-img">
                                <div class="wpo-event-img-inner">
                                    <img src="{{ url('public') }}/assets/images/event/5.jpg" alt="">
                                </div>
                                <div class="title">
                                    <h2>The Ceremony</h2>
                                </div>
                            </div>
                            <div class="wpo-event-text">
                                <p>Ceremony pernikahan mencakup berbagai elemen seperti pertukaran janji pernikahan,
                                    pertukaran cincin, doa, atau ritual agama, dan pengumuman resmi bahwa pasangan tersebut
                                    telah menjadi suami dan istri.
                                    Upacara pernikahan dapat diselenggarakan dalam berbagai tradisi budaya dan agama,
                                    sehingga elemen-elemen dan formatnya dapat bervariasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item wow fadeInUp" data-wow-duration="1400ms">
                            <div class="wpo-event-img">
                                <div class="wpo-event-img-inner">
                                    <img src="{{ url('public') }}/assets/images/event/6.jpg" alt="">
                                </div>
                                <div class="title">
                                    <h2>The Party</h2>
                                </div>
                            </div>
                            <div class="wpo-event-text">
                                <p>Acara pesta pernikahan ini bisa sangat bervariasi dalam gaya dan tema, tergantung pada
                                    preferensi pasangan pengantin.
                                    Beberapa mungkin memilih untuk mengadakan pesta pernikahan formal dengan makanan mewah
                                    dan tari resmi,
                                    The party adalah kesempatan bagi pasangan pengantin dan tamu untuk bersenang-senang dan
                                    merayakan pernikahan dengan cara yang mereka sukai.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <section class="wpo-story-section-s3 section-padding">
        <div class="container-fluid">
            <div class="wpo-story-wrap">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-story-item wow fadeInUp" data-wow-duration="1000ms">
                            <div class="wpo-story-img">
                                <div class="wpo-story-img-inner">
                                    <img src="{{ url('public') }}/assets/images/story/7.jpg" alt="">
                                </div>
                                <div class="flower-shape wow fadeInLeftSlow" data-wow-duration="2500ms">
                                    <img src="{{ url('public') }}/assets/images/story/flower-shape5.svg" alt="">
                                </div>
                            </div>
                            <div class="wpo-story-content">
                                <span>15 June, 2014</span>
                                <h2>Whagea Saputra & Sarah Puji</h2>
                                <p>"Ini bukan hanya agen perencana pernikahan tetapi juga teman impian.
                                    Saya sangat senang bekerja dengan mereka. Mereka mewujudkan impian saya. Di pernikahanku
                                    Saya menemukan mereka sebagai teman terbaik saya."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-story-item wow fadeInUp" data-wow-duration="1200ms">
                            <div class="wpo-story-img">
                                <div class="wpo-story-img-inner">
                                    <img src="{{ url('public') }}/assets/images/story/8.jpg" alt="">
                                </div>
                            </div>
                            <div class="wpo-story-content">
                                <span>02 Nov, 2020</span>
                                <h2>M. Khadafi & Indah Putri Herni</h2>
                                <p>"Ini merupakan pernikahan kami yang paling luar biasa.
                                    Kami sangat senang bekerja sama dengan mereka, mereka membuat pernikahan kami menjadi
                                    sangat indah."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-story-item wow fadeInUp" data-wow-duration="1400ms">
                            <div class="wpo-story-img">
                                <div class="wpo-story-img-inner">
                                    <img src="{{ url('public') }}/assets/images/story/9.jpg" alt="">
                                </div>
                                <div class="flower-shape wow fadeInRightSlow" data-wow-duration="2500ms">
                                    <img src="{{ url('public') }}/assets/images/story/flower-shape6.svg" alt="">
                                </div>
                            </div>
                            <div class="wpo-story-content">
                                <span> 15 Apr, 2023</span>
                                <h2>Deni Suryadi & Dinda </h2>
                                <p>"Kami sangat bahagia dan sangat senang bekerja sama dengan meraka.
                                    Ini menjadi pernikahan yang sangat luar biasa untuk kami berdua"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>

    <section class="wpo-event-section-s2 section-padding pt-0" id="portofolio">
        <div class="container">
            <div class="wpo-section-title">
                <span>PORTOFOLIO</span>
                <h2>KARYA KAMI YANG LUAR BIASA</h2>
            </div>
            <div class="wpo-event-wrap">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item wow fadeInUp" data-wow-duration="1000ms">
                            <div class="wpo-event-img">
                                <div class="wpo-event-img-inner">
                                    <img src="{{ url('public') }}/assets/images/couple/img-8.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item wow fadeInUp" data-wow-duration="1200ms">
                            <div class="wpo-event-img">
                                <div class="wpo-event-img-inner">
                                    <img src="{{ url('public') }}/assets/images/couple/6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item wow fadeInUp" data-wow-duration="1400ms">
                            <div class="wpo-event-img">
                                <div class="wpo-event-img-inner">
                                    <img src="{{ url('public') }}/assets/images/couple/3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="{{ url('public') }}/assets/images/portfolio/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="{{ url('public') }}/assets/images/portfolio/2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-event-item wow fadeInUp" data-wow-duration="1400ms">
                                <div class="wpo-event-img">
                                    <div class="wpo-event-img-inner">
                                        <img src="{{ url('public') }}/assets/images/portfolio/1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-4 col-md-6 col-12">
                                <div class="wpo-event-item wow fadeInUp" data-wow-duration="1000ms">
                                    <div class="wpo-event-img">
                                        <div class="wpo-event-img-inner">
                                            <img src="{{ url('public') }}/assets/images/slider/hero-1.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4 col-md-6 col-12">
                                <div class="wpo-event-item wow fadeInUp" data-wow-duration="1200ms">
                                    <div class="wpo-event-img">
                                        <div class="wpo-event-img-inner">
                                            <img src="{{ url('public') }}/assets/images/slider/hero-7.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4 col-md-6 col-12">
                                <div class="wpo-event-item wow fadeInUp" data-wow-duration="1400ms">
                                    <div class="wpo-event-img">
                                        <div class="wpo-event-img-inner">
                                            <img src="{{ url('public') }}/assets/images/slider/hero-10.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end container -->
    </section>

    <!-- end story-section -->
    <!-- start of wpo-contact-section -->
    {{-- <section class="wpo-contact-section-s3 section-padding" id="rsvp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-xl-5 col-lg-5 col-md-12 col-12">
                    <div class="wpo-contact-section-wrapper wow fadeInLeftSlow" data-wow-duration="1700ms">
                        <div class="wpo-contact-form-area">
                            <div class="wpo-section-title">
                                <h2>Are You Attending?</h2>
                            </div>
                            <form method="post" class="contact-validation-active" id="contact-form-main">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="radio-buttons">
                                    <p>
                                        <input type="radio" id="attend" name="radio-group" checked>
                                        <label for="attend">Yes, I will be there</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="not" name="radio-group">
                                        <label for="not">Sorry, I can’t come</label>
                                    </p>
                                </div>
                                <div>
                                    <select name="guest" class="form-control">
                                        <option disabled="disabled" selected>Number Of Guests</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="what" id="what"
                                        placeholder="What Will You Be Attending">
                                </div>
                                <div>
                                    <select name="meal" class="form-control last">
                                        <option disabled="disabled" selected>Meal Preferences</option>
                                        <option>Chicken Soup</option>
                                        <option>Motton Kabab</option>
                                        <option>Chicken BBQ</option>
                                        <option>Mix Salad</option>
                                        <option>Beef Ribs </option>
                                    </select>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">RSVP</button>
                                    <div id="c-loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again
                                        later.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-7 col-lg-7 col-md-12 col-12">
                    <div class="contact-img wow fadeInRightSlow" data-wow-duration="1700ms">
                        <div class="contact-img-left">
                            <img src="{{ url('public') }}/assets/images/rsvp/img-1.jpg" alt="">
                            <img src="{{ url('public') }}/assets/images/rsvp/img-2.jpg" alt="">
                        </div>
                        <div class="contact-img-right">
                            <img src="{{ url('public') }}/assets/images/rsvp/img-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end of wpo-contact-section -->

    <!-- start wpo-event-section -->

    <!-- end wpo-event-section -->

    <!-- start wpo-blog-section -->
    <section class="wpo-blog-section section-bg  section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <span>Blog Kami</span>
                    <h2>Berita Terbaru Pernikahan Kami</h2>
                </div>
            </div>
            <div class="wpo-blog-items">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1000ms">
                            <div class="wpo-blog-img">
                                <img src="{{ url('public') }}/assets/images/blog/img-1.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By <a href="blog-single.html">Robertson Doe</a></li>
                                    <li>25 Sep 2023</li>
                                </ul>
                                <h2><a href="blog.html">Top 10 wedding bouquet arranging idea</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1200ms">
                            <div class="wpo-blog-img">
                                <img src="{{ url('public') }}/assets/images/blog/img-2.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By <a href="blog-single.html">David Luis</a></li>
                                    <li>23 Sep 2023</li>
                                </ul>
                                <h2><a href="blog.html">You must need a great photographer.</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-blog-item wow fadeInUp" data-wow-duration="1400ms">
                            <div class="wpo-blog-img">
                                <img src="{{ url('public') }}/assets/images/blog/img-3.jpg" alt="">
                            </div>
                            <div class="wpo-blog-content">
                                <ul>
                                    <li>By <a href="blog-single.html">Aliana de</a></li>
                                    <li>21 Sep 2023</li>
                                </ul>
                                <h2><a href="blog.html">Make sure your wedding gown is the best one.</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-section -->
@endsection
