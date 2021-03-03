<footer id="footer">
    <div class="container">

        <div class="row">
            
            <div class="col-md-3">
                <!-- Footer Logo -->
                <img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

                <!-- Small Description -->
                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                <!-- Contact Address -->
                <address>
                    <ul class="list-unstyled">
                        <li class="footer-sprite address">
                            PO Box 21132<br>
                            Here Weare St, Melbourne<br>
                            Vivas 2355 Australia<br>
                        </li>
                        <li class="footer-sprite phone">
                            Phone: 1-800-565-2390
                        </li>
                        <li class="footer-sprite email">
                            <a href="mailto:support@yourname.com">support@yourname.com</a>
                        </li>
                    </ul>
                </address>
                <!-- /Contact Address -->

            </div>

            <div class="col-md-3">

                <!-- Latest Blog Post -->
                <h4 class="letter-spacing-1">LATEST NEWS</h4>
                <ul class="footer-posts list-unstyled">
                    <li>
                        <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
                        <small>29 June 2015</small>
                    </li>
                    <li>
                        <a href="#">Nullam id dolor id nibh ultricies</a>
                        <small>29 June 2015</small>
                    </li>
                    <li>
                        <a href="#">Duis mollis, est non commodo luctus</a>
                        <small>29 June 2015</small>
                    </li>
                </ul>
                <!-- /Latest Blog Post -->

            </div>

            <div class="col-md-2">

                <!-- Links -->
                <h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
                <ul class="footer-links list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Clients</a></li>
                    <li><a href="#">Our Pricing</a></li>
                    <li><a href="#">Smarty Tour</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <!-- /Links -->

            </div>

            <div class="col-md-4">

                <!-- Newsletter Form -->
                <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

                <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit">Subscribe</button>
                        </span>
                    </div>
                </form>
                <!-- /Newsletter Form -->

                <!-- Social Icons -->
                <div class="margin-top-20">
                    <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                        <i class="icon-rss"></i>
                        <i class="icon-rss"></i>
                    </a>
        
                </div>
                <!-- /Social Icons -->

            </div>

        </div>

    </div>

    <div class="copyright">
        <div class="container">
            <ul class="pull-right nomargin list-inline mobile-block">
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li>&bull;</li>
                <li><a href="#">Privacy</a></li>
            </ul>
            &copy; All Rights Reserved, Company LTD
        </div>
    </div>
</footer>
<!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- 
SIDE PANEL 

    sidepanel-dark 			= dark color
    sidepanel-light			= light color (white)
    sidepanel-theme-color		= theme color
    
    sidepanel-inverse		= By default, sidepanel is placed on right (left for RTL)
                    If you add "sidepanel-inverse", will be placed on left side (right on RTL).
-->
<div id="sidepanel" class="sidepanel-light">
<a id="sidepanel_close" href="#"><!-- close -->
    <i class="glyphicon glyphicon-remove"></i>
</a>

<div class="sidepanel-content">
    <h2 class="sidepanel-title">Explore Smarty</h2>

    <!-- SIDE NAV -->
    <ul class="list-group">

        <li class="list-group-item">
            <a href="#">
                <i class="ico-category et-heart"></i>  
                ABOUT US
            </a>
        </li>
        <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
            <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed"> 
                <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
                <i class="ico-category et-strategy"></i>
                PORTFOLIO
            </a>
            <ul id="collapse-1" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
                <li><a href="#"><i class="fa fa-angle-right"></i> 1 COLUMN</a></li>
                <li class="active">
                    <span class="badge">New</span>
                    <a href="#"><i class="fa fa-angle-right"></i> 2 COLUMNS</a>
                </li>
                <li><a href="#"><i class="fa fa-angle-right"></i> 3 COLUMNS</a></li>
            </ul>
        </li>
        <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->                
            <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed"> 
                <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
                <i class="ico-category et-trophy"></i>
                PORTFOLIO
            </a>
            <ul id="collapse-2" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
                <li><a href="#"><i class="fa fa-angle-right"></i> SLIDER</a></li>
                <li class="active"><a href="#"><i class="fa fa-angle-right"></i> HEADERS</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i> FOOTERS</a></li>
            </ul>
        </li>
        <li class="list-group-item">
            <a href="#">
                <i class="ico-category et-happy"></i>  
                BLOG
            </a>
        </li>
        <li class="list-group-item">
            <a href="#">
                <i class="ico-category et-beaker"></i> 
                FEATURES
            </a>
        </li>
        <li class="list-group-item">
            <a href="#">
                <i class="ico-category et-map-pin"></i> 
                CONTACT
            </a>
        </li>

    </ul>
    <!-- /SIDE NAV -->

    <!-- social icons -->
    <div class="text-center margin-bottom-30">

        <a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
        </a>

        <a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
        </a>

        <a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
            <i class="icon-linkedin"></i>
            <i class="icon-linkedin"></i>
        </a>

        <a href="#" class="social-icon social-icon-sm social-rss" data-toggle="tooltip" data-placement="top" title="RSS">
            <i class="icon-rss"></i>
            <i class="icon-rss"></i>
        </a>

    </div>
    <!-- /social icons -->

</div>

</div>
<!-- /SIDE PANEL -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
{{-- <div id="preloader">
<div class="inner">
    <span class="loader"></span>
</div>
</div><!-- /PRELOADER --> --}}


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
<script type="text/javascript" src="{{url('assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>

<script type="text/javascript" src="{{url('assets/js/scripts.js')}}"></script>

<!-- STYLESWITCHER - REMOVE -->
{{-- <script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script> --}}

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="{{url('assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/view/demo.revolution_slider.js')}}"></script>

</body>
</html>