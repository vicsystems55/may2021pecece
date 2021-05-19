<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Pecece</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{config('app.url')}}meduza/css/style.css">
</head>

<body>
    <div id="app" class="container">
        <div class="menu_btn" id="menu_btn"></div>
        @include('front_page.inc.menu_bar')

        <div class="mainpage">


            @yield('content')

       
        </div>

      @include('front_page.inc.footer')

     @include('front_page.inc.menu_block')

        <div class="search-popup" id="search-popup">
            <div class="close"></div>
            <input type="text" class="input" placeholder="Search the blog…">
            <button class="submit submit-search"><span>SEARCH</span></button>
        </div>
        <div class="overlay" id="overlay"></div>
        <div class="modal share-block" id="share-block">
            <div class="close"></div>
            <div class="wrap">
                <div class="wrap_float">
                    <div class="close mobile-close"></div>
                    <div class="links">
                        <a href="#" class="link facebook"></a>
                        <a href="#" class="link pinterest"></a>
                        <a href="#" class="link twitter"></a>
                        <a href="#" class="link linked"></a>
                        <a href="#" class="link email"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal review-modal" id="write-review-block">
            <div class="close"></div>
            <div class="wrap">
                <div class="wrap_float write-comment">

                    <div class="write-review">
                        <div class="close mobile-close"></div>
                        <div class="title">Reviews</div>
                        <div class="subtitle">
                            Your email address will not be published. Required fields are marked *
                        </div>
                        <div class="rating">
                            <div class="reviews-count">Your rating</div>
                            <div class="stars user-rating" id="user-rating">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                            </div>
                        </div>
                        <div class="form">
                            <textarea class="textarea" placeholder="Your review *"></textarea>
                            <div>
                                <input type="text" placeholder="Name *" class="input">
                                <input type="email" placeholder="Email *" class="input">
                            </div>
                            <button class="submit">Post Comment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal success-modal" id="success">
            <div class="close"></div>
            <div class="wrap">
                <div class="wrap_float">
                    <div class="message">
                        <div class="close mobile-close"></div>
                        <div class="title">Thank you</div>
                        <div class="subtitle">
                            Your feedback has been sent and will be published soon
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div style="display: none;">
            <div class="modal modal_default" id="login">
                <div class="modal_wrap">
                    <div class="modal-top">
                        <h2 class="title modal-title">Authorization</h2>
                        <div class="flex">
                            <div class="subtitle modal-subtitle">
                                Using your Meduza account
                            </div>
                            <a class="link">Create an account</a>
                        </div>
                        <div class="fields">
                            <div class="input_wrap">
                                <input type="text" class="input" placeholder="Email">
                            </div>
                            <div class="input_wrap">
                                <input type="password" class="input" placeholder="Password">
                            </div>
                        </div>
                        <button class="btn submit-btn"><span>Enter</span></button>
                        <a class="link bottom-link getModal" data-href="#recover-pass">Forgot your password?</a>
                    </div>
                    <div class="modal_close"></div>
                </div>
            </div>
        </div>
        <div style="display: none;">
            <div class="modal modal_default registration" id="registration">
                <div class="modal_wrap">
                    <div class="modal-top">
                        <h2 class="title modal-title">Registration</h2>
                        <div class="fields">
                            <div class="input_wrap fullwrap">
                                <input type="email" class="input" placeholder="Email">
                            </div>
                            <div class="input_wrap">
                                <input type="password" class="input" placeholder="Password">
                            </div>
                            <div class="input_wrap">
                                <input type="password" class="input" placeholder="Confirm password">
                            </div>
                            <div class="input_wrap fullwrap">
                                <input type="text" class="input" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="userpic-block">
                           <div class="userpic"></div>
                           <div class="change">
                               <label for="change-userpic-modal">Select your avatar</label>
                               <input type="file" id="change-userpic-modal">
                           </div>
                       </div>
                        <button class="btn submit-btn"><span>Registration</span></button>
                        <div class="agreement">
                            By registering on the site you accept the <a href="#">terms of privacy</a> and personal data <a href="#">processing policy</a>
                        </div>
                    </div>
                    <div class="modal_close"></div>
                </div>
            </div>
        </div>
        <div style="display: none;">
            <div class="modal modal_default" id="recover-pass">
                <div class="modal_wrap">
                    <div class="modal-top">
                        <h2 class="title modal-title">Recover the password</h2>
                        <div class="flex">
                            <div class="subtitle modal-subtitle">
                                Enter your email address
                            </div>
                        </div>
                        <div class="fields">
                            <div class="input_wrap fullwrap">
                                <input type="email" class="input" placeholder="Email">
                            </div>
                        </div>
                        <button class="btn submit-btn"><span>Recover the password</span></button>
                    </div>
                    <div class="modal_close"></div>
                </div>
            </div>
        </div>
        <div style="display: none;">
            <div class="modal modal_default success-recover" id="success-recover-pass">
                <div class="modal_wrap">
                    <div class="modal-top">
                        <h2 class="title modal-title">Recover the password</h2>
                        <div class="subtitle modal-subtitle">
                            A link to reset your password has been sent  to your e-mail. Please check your email.
                        </div>
                    </div>
                    <div class="modal_close"></div>
                </div>
            </div>
        </div> -->

    </div>

    @yield('page-script')

    <!-- <script src="{{asset('js/app.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    <script src="{{config('app.url')}}meduza/js/jquery.min.js"></script>
    <script src="{{config('app.url')}}meduza/js/jquery.arcticmodal.min.js"></script>
    <script src="{{config('app.url')}}meduza/js/slick.min.js"></script>
    <script src="{{config('app.url')}}meduza/js/scripts.js"></script>

    
</body>

</html>