<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>
      
      2nd City Zoning
    </title>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content='An interactive map that lets you find out how your building is zoned, learn where to locate your business and explore zoning patterns throughout Chicago.' name='description'>
    <meta content='2nd City Zoning' name='author'>

    <!-- Facebook metadata -->
    <meta content="2nd City Zoning" property="og:site_name">
    
      <meta content="2nd City Zoning" property="og:title">
    
    
      <meta content="website" property="og:type">
    
    
      <meta content="An interactive map that lets you find out how your building is zoned, learn where to locate your business and explore zoning patterns throughout Chicago." property="og:description">
    
    
      <meta content="http://secondcityzoning.org/" property="og:url">
    
    
    
      <meta content="http://secondcityzoning.org/images/logo.png" property="og:image">
    
    
    

    <!-- Twitter metadata -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@DataMadeCo">
    <meta name="twitter:creator" content="@DataMadeCo">
    
      <meta name="twitter:title" content="2nd City Zoning">
    
    
      <meta name="twitter:url" content="http://secondcityzoning.org/">
    
    
      <meta name="twitter:description" content="An interactive map that lets you find out how your building is zoned, learn where to locate your business and explore zoning patterns throughout Chicago.">
    
    
      <meta name="twitter:image:src" content="http://secondcityzoning.org/images/logo.png">
    

    <link href='/favicon.ico' rel='shortcut icon'>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('assets/secondcity/css/bootstrap.readable.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/secondcity/css/custom.css') }}"/>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css') }}"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://libs.cartocdn.com/cartodb.js/v3/themes/css/cartodb.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js') }}"></script>
    <![endif]-->
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://libs.cartodb.com/cartodb.js/v3/themes/css/cartodb.ie.css') }}" />
    <![endif]-->

    <script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/jquery-1.10.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/bootstrap.min.js') }}"></script>

  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img alt='2nd City Zoning' src="{{ URL::asset('assets/secondcity/images/logo.png') }}"></a>
          <p class='navbar-text pull-left'>
            An <a class='yay-link' href='http://opencityapps.org'>Open City</a> app
          </p>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            
              
              
              <li class="active">
                <a href="/">Home</a>
              </li>
            
              
              
              <li class="">
                <a href="/zones/">Zoning districts</a>
              </li>
            
              
              
              <li class="">
                <a href="/zoning_rules/">Zoning rules</a>
              </li>
            
              
              
              <li class="">
                <a href="/about/">About</a>
              </li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class='container-fluid'>
      <div class='row'>
  <div class='col-md-4'>

    <div class="panel-group" id="info_accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <p class="panel-title">
            <a data-toggle="collapse" data-parent="#view_accordion" href="#info_collapse" id="a_info_accordion">
              <i class='fa fa-question-circle'></i>
              What is this?
            </a>
          </p>
        </div>
        <div id="info_collapse" class="panel-collapse collapse">
          <div class="panel-body">
            <div class='well'>
              <p><strong>2nd City Zoning 2.0</strong> is here! Check out our <a href='/about/#version-2'>new features</a>! Questions? <a href='mailto:second-city-zoning@opencityapps.org'>Email us</a>.</p>
            </div>
            <p>2nd City Zoning is an interactive map that lets you:</p>
            <ul>
              <li>
                find out <strong>how your building is zoned</strong>
              </li>
              <li>
                learn <strong>where to locate your business</strong>
              </li>
              <li>
                explore <strong>zoning patterns</strong> throughout the city
              </li>
            </ul>
            <p>
              To make Chicago's zoning code digestible by humans, we took inspiration from one of our favorite games: <a href="http://en.wikipedia.org/wiki/SimCity_2000">Sim City 2000</a>.
            </p>
            <p>
              It started with the color scheme: <strong style='color: #7DD67D;'>green</strong>
              for residential, <strong style='color: #7474D7;'>blue</strong>
              for commercial and <strong style='color: #DCDC7F;'>yellow</strong>
              for industrial. (This oversimplifies things a bit, <a href='/about#zoning-categories'>read the full story</a>.)
            </p>
            <p>From there we got a little carried away. Graphics, sounds, music, oh my.</p>
            <p>We had a lot of fun making this, so dive in and explore!</p>
            <p class='pull-right'>
              <a class='btn btn-danger btn-sm' href='#' id='close_info'>Ok, thanks!</a>
              <a class='btn btn-sm' href='/about'>Read more &raquo;</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class='well'>
      <div class="form-group">
        <h5>Find zone <small>(<a id='findMe' href='#'>find me</a>)</small></h5>
        <input class='form-control' id='search_address' placeholder='Enter an address or an intersection' type='text'>
      </div>
      <button class='btn btn-danger btn-sm' id='btnSearch' type='button'>
        <i class='fa fa-search'></i>
        Search
      </button>
      <button class='btn btn-default btn-sm' id='reset'>
        <i class='fa fa-refresh'></i>
        Reset
      </button>
    </div>
    <div class='well hidden-phone'>
      <h5>
        Zoning type
        <small>(<a href='/zones'>what's that?</a>)</small>
      </h5>
      <div class='row'>
        <div class='col-sm-5'>
          <ul class='list-unstyled zones'>
            <li>
              <label data-content='Houses and apartment buildings. No stores, offices, or factories are allowed. Schools, churches, police stations and the like are ok, though.'>
                <img alt='Residential' src="{{ URL::asset('assets/secondcity/images/icons/residential.png') }}">
                Residential
              </label>
            </li>
            <li>
              <label data-content='From bodegas to big boxes, these districts are for stores and offices. Above-ground floor apartments are usually allowed. Includes Business (B), Commercial (C) and most Downtown (D) districts.'>
                <img alt='Commercial' src="{{ URL::asset('assets/secondcity/images/icons/commercial.png') }}">
                Commercial
              </label>
            </li>
            <li>
              <label data-content="Factories, warehouses, freight, junkyards. All the heavy duty stuff in Chicago's industrial corridors, as well as fourteen special Planned Manufacturing Districts (PMD).">
                <img alt='Industrial' src="{{ URL::asset('assets/secondcity/images/icons/industrial.png') }}">
                Industrial
              </label>
            </li>
          </ul>
        </div>
        <div class='col-sm-7'>
          <ul class='list-unstyled zones'>
            <li>
              <label data-content='Tall buildings, hospital campuses, and other large developments that must be negotiated with city planners.'>
                <img alt='Planned Development' src="{{ URL::asset('assets/secondcity/images/icons/government.png') }}">
                Planned Development
              </label>
            </li>
            <li>
              <label data-content='Bits of land designed to protect roads, bus ways, bike trails, and rail lines.'>
                <img alt='Transportation' src="{{ URL::asset('assets/secondcity/images/icons/trains.png') }}">
                Transportation
              </label>
            </li>
            <li>
              <label data-content='Protected land set side for public parks, open space, beaches, and cemeteries.'>
                <img alt='Parks and Open Space' src="{{ URL::asset('assets/secondcity/images/icons/parks-entertainment.png') }}">
                Parks and Open Space
              </label>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class='well hidden-phone'>
      <h5>
        Sound effects
        <a href='#' id='sound_effects_toggle' class='label label-default'>
          <i class='fa fa-volume-off'></i>
          Off
        </a>
      </h5>
      <div id='jquery_jplayer'></div>
      <!-- Using the cssSelectorAncestor option with the default cssSelector class names to enable control association of standard functions using built in features -->
      <div id='jp_container'>
        <h5>
          Music
          <a class='jp-play label label-default' href='#'>
            <i class='fa fa-play'></i> Play
          </a>
          <a class='jp-pause label label-default' href='#'>
            <i class='fa fa-pause'></i> Pause
          </a>&nbsp;
          <a class='jp-stop label label-default' href='#'>
            <i class='fa fa-stop'></i> Stop
          </a>
        </h5>
        <ul class='nav nav-pills' id='jplayer-tracks'>
          <li>
            <a class='track track-default' href='/resources/audio/sim_city_2000_theme.mp3'>Sim City Theme</a>
          </li>
          <li>
            <a class='track' href='/resources/audio/sim_city_2000_moogycity.mp3'>Moogy City</a>
          </li>
          <li>
            <a class='track' href='/resources/audio/sim_city_2000_city_shimmy.mp3'>City Shimmy</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class='col-md-8'>
    <div id='mapCanvas'></div>
    <span class='pull-right'>
      Data accurate as of October 2014. An <a class='yay-link' href='http://opencityapps.org'>Open City</a> app by <a class='yay-link' href='http://derekeder.com'>Derek Eder</a>, and <a href='https://jpvelez.contently.com'>Juan-Pablo Velez</a><a class='simcopter' href='#'>.</a>
    </span>
  </div>
</div>
<audio id='reticulating-splines' src='/resources/audio/effects/reticulating_splines.mp3'></audio>
<audio id='explosion' src='/resources/audio/effects/explosion.mp3'></audio>
<audio id='mouse-click' src='/resources/audio/effects/click.mp3'></audio>
<audio id='yay' src='/resources/audio/effects/yay.mp3'></audio>
<audio id='simcopter-one' src='/resources/audio/effects/simcopter_one.mp3'></audio>

<style id='second-city-zoning-styles'>
  #city_of_chicago_zoning{
    polygon-fill: #eee;
    polygon-opacity: 0.35;
    line-color: #666;
    line-width: 1;
    line-opacity: .5;
    [zoom<=9] { line-width: 0.1; }
    [zoom=10] { line-width: .2; }
    [zoom=11] { line-width: .3; }
    [zoom=12] { line-width: .4; }
    [zoom=13] { line-width: .5; }
  }

  #city_of_chicago_zoning{
    [zoom>=14][zone_class=~".*1"] { polygon-opacity: 0.15; }
    [zoom>=14][zone_class=~".*1.5"] { polygon-opacity: 0.15; }
    [zoom>=14][zone_class=~".*2"] { polygon-opacity: 0.25; }
    [zoom>=14][zone_class=~".*3"] { polygon-opacity: 0.35; }
    [zoom>=14][zone_class=~".*3.5"] { polygon-opacity: 0.45; }
    [zoom>=14][zone_class=~".*4"] { polygon-opacity: 0.45; }
    [zoom>=14][zone_class=~".*4.5"] { polygon-opacity: 0.55; }
    [zoom>=14][zone_class=~".*5"] { polygon-opacity: 0.55; }
    [zoom>=14][zone_class=~".*5.5"] { polygon-opacity: 0.6; }
    [zoom>=14][zone_class=~".*6.*"] { polygon-opacity: 0.6; }
    [zoom>=14][zone_class=~".*7.*"] { polygon-opacity: 0.6; }
    [zoom>=14][zone_class=~".*12.*"] { polygon-opacity: 0.65; }
    [zoom>=14][zone_class=~".*16.*"] { polygon-opacity: 0.65; }
    [zoom>=14][zone_class=~"P.*"] { polygon-opacity: 0.35; }
  }

  #city_of_chicago_zoning[zone_type= 1] { polygon-fill: #0000ff; }
  #city_of_chicago_zoning[zone_type= 2] { polygon-fill: #0000ff; }
  #city_of_chicago_zoning[zone_type= 3] { polygon-fill: #ffff00; }
  #city_of_chicago_zoning[zone_type= 4] { polygon-fill: #00ff00; }
  #city_of_chicago_zoning[zone_type= 5] { polygon-fill: #ff0000; }
  #city_of_chicago_zoning[zone_type= 6] { polygon-fill: #ffff00; }
  #city_of_chicago_zoning[zone_type= 7] { polygon-fill: #0000ff; }
  #city_of_chicago_zoning[zone_type= 8] { polygon-fill: #0000ff; }
  #city_of_chicago_zoning[zone_type= 9] { polygon-fill: #00ff00; }
  #city_of_chicago_zoning[zone_type=10] { polygon-fill: #0000ff; }
  #city_of_chicago_zoning[zone_type=11] { polygon-fill: #666666; }
  #city_of_chicago_zoning[zone_type=12] { polygon-fill: #38761d; }
</style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places&v=3.17"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://libs.cartocdn.com/cartodb.js/v3/cartodb.js"></script>
<script src="//cdn.maptiks.com/maptiks-leaflet.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/leaflet-google.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/jquery.address.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/cartodb_lib.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/jquery.cookie.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/jquery.jplayer.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/jquery.csv.min.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/map.js') }}"></script>
    </div>
    <script type="text/javascript" src="{{ URL::asset('assets/secondcity/js/analytics_lib.js') }}"></script>
  </body>
</html>