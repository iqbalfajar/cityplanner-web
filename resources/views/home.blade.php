@extends('layout.default')

@section('content-center')
        <section id="home" class="header-11-sub bg-midnight-blue">
                <div class="background">
                    &nbsp;
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3>City Plan - Watch and Build Your City</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac porttitor dui. Ut maximus quis.
                            </p>
                            <p>
                                Sign Up for more information.
                            </p>
                            <div class="signup-form">
                                <form>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your E-mail">
                                    </div>
                                    <!-- <div class="form-group">
                                        <div>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div>
                                            <input type="password" class="form-control" placeholder="Confirmation">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-info">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="additional-links">
                                By signing up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                            </div> -->
                        </div>
                        <div class="col-sm-7 col-sm-offset-1 player-wrapper">
                            <div class="player">
                                <!-- <iframe src="https://www.youtube.com/embed/8mSc-yPrpJs" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- logos -->
            <!-- <section class="logos">
                <div class="container">
                    <div><img src="img/logos/mashable.png" alt="">
                    </div>
                    <div><img src="img/logos/guardian.png" alt="">
                    </div>
                    <div><img src="img/logos/forbes.png" alt="">
                    </div>
                    <div><img src="img/logos/red-bull.png" alt="">
                    </div>
                    <div><img src="img/logos/ny-times.png" alt="">
                    </div>
                </div>
            </section> -->

            <!-- price-1 -->
            <section id="features" class="price-1">
                <div class="container">
                    <h3>Features</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere.
                    </p>
                    <div class="row plans">
                        <div class="col-sm-6">
                            <div class="plan">
                                <div class="title">City Builder</div>
                                <div class="description">
                                    Description<br>
                                    <b>Description</b> Description<br>
                                    <b>Description</b> Description<br>
                                    Description
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="plan">
                                <div class="title">City Watch</div>
                                <div class="description">
                                    Description<br>
                                    <b>Description</b> Description<br>
                                    <b>Description</b> Description<br>
                                    Description
                                </div>
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