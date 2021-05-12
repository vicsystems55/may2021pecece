@extends('front_page.layouts.app')


@section('content')


<div class="page contact-page">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="breadcrumbs">
                        <a href="/">Home</a> - <a href="#" class="current">Contacts</a>
                    </div>
                    <div class="title-block">
                        <h1 class="title">Contact us</h1>
                    </div>
                    <div class="page_content">
                        <div class="map-block">
                            <div class="map" id="map">
                                <!--Google map in Iframe-->
                                <!--<iframe src=""></iframe>-->
                            </div>
                        </div>
                        <div class="info">
                            <div class="contact-blocks">
                                <div class="block">
                                    <h3 class="_title">Contact us</h3>
                                    <div class="_text">
                                        <a href="#" class="tel">1009 678 456</a>
                                        <a href="mailto:digistrict@yandex.ru">digistrict@yandex.ru</a>
                                    </div>
                                </div>
                                <div class="block">
                                    <h3 class="_title">Address</h3>
                                    <div class="_text">
                                        1355 Digistrict St, Suite 909 San, Francisco, <br>CA 10001 United States
                                    </div>
                                </div>
                            </div>
                            <div class="write-comment">
                                <h3 class="title">Tell Us Your Message</h3>
                                <form class="form">
                                    <textarea class="textarea" placeholder="Message*"></textarea>
                                    <div>
                                        <input type="text" placeholder="Name *" class="input">
                                        <input type="email" placeholder="Email *" class="input">
                                    </div>
                                    <button class="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection