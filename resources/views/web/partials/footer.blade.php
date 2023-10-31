<footer class="footer-section section ">

    <div class="footer-top footer-bg pt-60 pt-md-40 pt-sm-20 pb-100 pb-md-80 pb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-coustom-3 col-lg-3 col-sm-6">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget mt-40">
                        <div class="footer-title">
                            <h3>About</h3>
                        </div>
                        <div class="footer-info">
                            <p>{{ config('website.about') }}</p>
                            <div class="newsletter-box">

                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Email for Newsletter" />
                                    <button id="mc-submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>

                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div>
                                <!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div>
                                <!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div>
                                <!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                    <!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-lg-3 col-sm-6">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget mt-40">
                        <div class="footer-title">
                            <h3>Popular Post</h3>
                        </div>
                        <div class="footer-info">
                            <div class="single-list">
                                <h4>Duplex Villa Design</h4>
                                <p>Lorem ipsum dolor sit amet, tur acinglit sed do eius </p>
                            </div>
                            <div class="single-list">
                                <h4>Duplex Villa Design</h4>
                                <p>Lorem ipsum dolor sit amet, tur acinglit sed do eius </p>
                            </div>
                        </div>
                    </div>
                    <!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-lg-3 col-sm-6">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget mt-40">
                        <div class="footer-title">
                            <h3>Quick Link</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li><a href="service.html">Sercives</a></li>
                                <li><a href="agent.html">Agent</a></li>
                                <li><a href="properties.html">Properties</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="blog.html">From Blog</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-lg-3 col-sm-6">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget mt-40">
                        <div class="footer-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-placeholder"></i>
                                        <p>{{config('website.address')}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-call"></i>
                                        <p>
                                            <span>Telephone : <a >{{ config('website.phone1') }}</a></span>
                                            <span>Telephone : <a >{{ config('website.phone2') }}</a></span>
                                        </p>

                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="glyph-icon flaticon-earth"></i>
                                        <p>
                                            <span>Email : <a >{{ config('website.email')}}</a></span>
                                            <span>Web : <a >{{ config('website.web') }}</a></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer-widget End -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy;
                <script>
                    document.write(new Date().getFullYear() + ' ');
                </script> Homie</p>
        </div>
    </div>

</footer>
