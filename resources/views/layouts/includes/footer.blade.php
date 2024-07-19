<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Customer Services</h4>
                        <ul class="links">
                            <li>
                                <a href="#">Help & FAQs</a>
                            </li>
                            <li>
                                <a href="#">Order Tracking</a>
                            </li>
                            <li>
                                <a href="#">Shipping & Delivery</a>
                            </li>
                        </ul>
                        <!-- End .social-icons -->
                    </div><!-- End .widget -->
                </div><!-- End .col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">About Us</h4>
                        <ul class="links">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Our Stores</a>
                            </li>
                        </ul>
                        <!-- End .social-icons -->
                    </div><!-- End .widget -->
                </div><!-- End .col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">More Information</h4>
                        <ul class="links">
                            <li>
                                <a href="#">Affiliates</a>
                            </li>
                            <li>
                                <a href="#">Refer a friend</a>
                            </li>
                            <li>
                                <a href="#">Gift Vouchers</a>
                            </li>
                        </ul>
                        <!-- End .social-icons -->
                    </div><!-- End .widget -->
                </div><!-- End .col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">Follow Us</h3>
                        <div class="social-icons">
                            <a href="{{settings('facebook')}}" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="{{settings('twitter')}}" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="{{settings('instagram')}}" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                        </div>
                    </div>
                </div>
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="container">
        <div class="footer-bottom">
            <div class="container d-sm-flex align-items-center">
                <div class="footer-left">
                    <span class="footer-copyright">{{settings('company_name')}} by QUASHFAM5 LTD. Company Number: {{settings('phone_number')}} © <script>
                            document.write(/\d{4}/.exec(Date())[0])
                        </script>.</span>
                </div>
<!-- 
                <div class="footer-center comp_no">
                     <button class="btn btn-primary btn-sm"></button>
                </div> -->

                <div class="footer-right ml-auto mt-1 mt-sm-0 mt3">
                    <div class="payment-icons">
                        <span class="payment-icon applepay" style="background-image: url(/assets/images/payments/apple-pay.svg)"></span>
                        <span class="payment-icon visa" style="background-image: url(/assets/images/payments/payment-visa.svg)"></span>
                        <span class="payment-icon paypal" style="background-image: url(/assets/images/payments/payment-paypal.svg)"></span>
                    </div>
                </div>
            </div>
        </div><!-- End .footer-bottom -->
    </div><!-- End .container -->
</footer>