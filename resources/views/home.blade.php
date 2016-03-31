@extends('layout.default')

@section('content-center')
	<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{ URL::asset('assets/img/profile.png') }}" alt="">
                    <div class="intro-text">
                        <span class="name">City Planner</span>
                        <hr class="star-light">
                        <span class="skills">City Zoning - City Watch</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Features</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ URL::asset('assets/img/portfolio/cabin.png') }}" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ URL::asset('assets/img/portfolio/circus.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="examples">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Examples</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <ul class="list-inline item-details">
                    <li><strong><a href="{{URL::route('examples.show', 'mapbox-js')}}" target="_blank">Mapbox JS</a>
                        </strong>
                    </li>
                    <li><strong><a href="{{URL::route('examples.show', 'mapbox-gljs')}}" target="_blank">Mapbox GLJS</a>
                        </strong>
                    </li>
                    <li><strong><a href="{{URL::route('examples.show', 'cartodb')}}" target="_blank">CartoDB</a>
                        </strong>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus eros sed mi semper volutpat. Donec tempor nibh a malesuada.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('additional')
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>City Zoning</h2>
                            <hr class="star-primary">
                            <img src="{{ URL::asset('assets/img/portfolio/cabin.png') }}" class="img-responsive img-centered" alt="">
                            <p>
                            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed erat quis dui congue facilisis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc sit amet.
                            </p>
                            <ul class="list-inline item-details">
                                <li>URL:
                                    <strong><a href="#">City Zoning</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>City Watch</h2>
                            <hr class="star-primary">
                            <img src="{{ URL::asset('assets/img/portfolio/circus.png') }}" class="img-responsive img-centered" alt="">
                            <p>
                            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed erat quis dui congue facilisis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc sit amet.
                            </p>
                            <ul class="list-inline item-details">
                                <li>URL:
                                    <strong><a href="#">City Watch</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop