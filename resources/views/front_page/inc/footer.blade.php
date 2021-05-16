<footer class="footer">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="footer_top">
                        <div class="logo"></div>
                    </div>
                    <div class="footer_center">
                        <div class="subscribe">
                            <p>Subscribe to the latest news</p>
                            <div class="subscribe_form">
                                <form class="flex">
                                    <input type="text" placeholder="Email Address">
                                    <button class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="socials">
                            <a href="#" class="instagram"></a>
                            <a href="#" class="twitter"></a>
                            <a href="#" class="pinterest"></a>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="left">
                            © Copyright {{\Carbon\Carbon::now()->format('Y')}}
                        </div>
                        <div class="center">
                            <ul>
                                <li><a href="{{route('about')}}"><span>About Pecece</span></a></li>
                                <li><a href=""><span>Privacy Policy</span></a></li>
                                <li><a href="{{route('contact')}}"><span>Contact us</span></a></li>
                            </ul>
                        </div>
                        <div class="right">
                            Powered by <a href="https://vicsystems.com.ng" target="_blank">vicSystems</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>