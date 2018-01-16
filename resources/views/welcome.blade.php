@extends('layouts.app')

@section('content')
    <section id="intro" class="intro-section">
        <div class="fullscreenbanner-container" selector="#carouselExampleSlidesOnly" interval="1000"
             url="/carousel/{intro}">
            @include('partials.carousel')
        </div>

    </section>
    <section id="about" class="about-sect
        <div class="container content-box">
            <div class="header">
                <h2 class="heading">Himalayan Manang Trek</h2>
            </div>
            <p><span class="dropcap-bg">N</span>amaste & Phyafulla !
                <br>
                A visit to The Himalayan country 'Nepal' is a step towards paradise that promises you the most
                fascinating holiday of your life. Himalayan Tamang Treks will help you plan a made-to-measure adventure,
                making sure you experience every aspect of our magical world. If you have a taste for the exotically
                different, the programs on our site make it easy to plan your time in Nepal, Tibet, Bhutan and India. We
                invite you to explore the beauty of the snow-capped mountains, the extraordinary flora and fauna and the
                fascinating culture of people from several diverse ethnic groups.

                Himalayan Tamang Treks welcomes you to the Land of Himalayan "the nature that makes you feel the
                change"</p>
        </div>
        <div class="container">
            <div class="row margin-bottom-20">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img class="img-responsive" src="{{ asset('images/why1_hover.png') }}" alt="">
                            </div>
                            <a class="btn-more hover-effect" href="#">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="#">Project One</a></h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus
                                etiam porta sem.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection