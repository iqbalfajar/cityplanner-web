@extends('layout.default')

@section('content-center')
        <section id="home" class="header-11-sub bg-midnight-blue">
                <div class="background" style="-webkit-filter: blur(1px);">
                    &nbsp;
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4" style="color:white;">
                            <h3 style="color:black;">City Plan. Build and Watch Your City</h3>
                            <p style="color:white;">
                                The City Plan merupakan media pertama di Indonesia dalam membantu masyarakat yang ingin membangun sesuai peraturan yang berlaku dan menyediakan media masyarakat untuk ikut mengawasi pembangunan kota 
                            </p>
                            <div class="signup-form">
                                <form action="{{URL::route('app')}}">
                                   <!--  <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your E-mail">
                                    </div> -->
                                    <!-- <div class="form-group">
                                        <div>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div>
                                            <input type="password" class="form-control" placeholder="Confirmation">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <!-- <button type="submit" class="btn btn-block btn-info">Go to App</button> -->
                                        <a class="btn btn-primary btn-lg btn-block" href="{{URL::route('app')}}" target="_blank">Go to App</a>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="additional-links">
                                By signing up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                            </div> -->
                        </div>
                        <div class="col-sm-7 col-sm-offset-1 player-wrapper">
                            <div class="player">
                                <iframe src="https://www.youtube.com/embed/OgIuO0mMbqY" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- logos -->
<!--             <section class="logos">
                <div class="container">
                    <div><img src="{{ URL::asset('assets/img/logos/mashable.png') }}" alt="">
                    </div>
                    <div><img src="{{ URL::asset('assets/img/logos/mashable.png') }}" alt="">
                    </div>
                    <div><img src="{{ URL::asset('assets/img/logos/mashable.png') }}" alt="">
                    </div>
                </div>
            </section> -->

            <!-- price-1 -->
            <section id="features" class="price-1">
                <div class="container">
                    <h3>Build City</h3>
                    <p class="lead">
                        Membantu masyarakat yang ingin membangun sesuai dengan peraturan yang berlaku dengan menyediakan informasi yang mudah diakses dan mudah dipahami
                    </p>

                    <div class="row plans">
                        <div class="col-sm-4">
                            <div class="img-row">
                                <img src="{{ URL::asset('assets/img/mockup/menu.jpg') }}" class="img-responsive img-rounded">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="img-row">
                                <img src="{{ URL::asset('assets/img/mockup/3.jpg') }}" class="img-responsive img-rounded">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="img-row">
                                <img src="{{ URL::asset('assets/img/mockup/4.jpg') }}" class="img-responsive img-rounded">
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>City Watch</h3>
                    <p class="lead">
                        Media masyarakat untuk membantu mengawasi pembangunan kota
                    </p>
                    <div class="row plans">
                        <div class="col-sm-4">
                            <div class="img-row">
                                <img src="{{ URL::asset('assets/img/mockup/6.jpg') }}" class="img-responsive img-rounded">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="img-row">
                                <img src="{{ URL::asset('assets/img/mockup/11.jpg') }}" class="img-responsive img-rounded">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="img-row">
                                <img src="{{ URL::asset('assets/img/mockup/12.jpg') }}" class="img-responsive img-rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- content-13  -->
            <section id="download" class="content-13 subscribe-form bg-turquoise">
                <div class="container">
                    <div class="row">
                        <form>
                            <div class="col-sm-8">
                                <input type="text" readonly placeholder="Download Our Mobile App" spellcheck="false">
                            </div>
                            <div class="col-sm-4">
                                <a href="{{ URL::asset('files/CityPlan.apk') }}" class="btn btn-large btn-success" type="submit">
                                    Download for Android
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
@stop