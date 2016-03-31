<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>City Planer</title>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet'>
  <script src='https://api.tiles.mapbox.com/mapbox.js/v2.2.2/mapbox.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox.js/v2.2.2/mapbox.css' rel='stylesheet' />
  <style>
/*  body {
    color:#404040;
    font:400 15px/22px 'Source Sans Pro', 'Helvetica Neue', Sans-serif;
    margin:0;
    padding:0;
    -webkit-font-smoothing:antialiased;
  }
  * {
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
  }
  h1 {
    font-size:22px;
    margin:0;
    font-weight:400;
  }
  a {
    color:#404040;
    text-decoration:none;
  }
  a:hover { color:#101010; }

  .sidebar {
    position:absolute;
    width:33.3333%;
    height:100%;
    top:0;left:0;
    overflow:hidden;
    border-right:1px solid rgba(0,0,0,0.25);
  }
  .pad2 {
    padding:20px;
  }
  .quiet {
    color:#888;
  }
  .map {
    position:absolute;
    left:20%;
    width:80%;
    top:0;bottom:0;
  }
  .heading {
    background:#fff;
    border-bottom:1px solid #eee;
    height:60px;
    line-height:60px;
    padding:0 10px;
  }
  .listings {
    height:100%;
    overflow:auto;
    padding-bottom:60px;
  }
  .listings .item {
    display:block;
    border-bottom:1px solid #eee;
    padding:10px;
    text-decoration:none;
  }
  .listings .item:last-child { border-bottom:none; }
  .listings .item .title {
    display:block;
    color:#00853e;
    font-weight:700;
  }
  .listings .item .title small { font-weight:400; }
  .listings .item.active .title,
  .listings .item .title:hover { color:#8cc63f; }
  .listings .item.active {
    background-color:#f8f8f8;
  }

  ::-webkit-scrollbar {
    width:3px;
    height:3px;
    border-left:0;
    background:rgba(0,0,0,0.1);
  }
  ::-webkit-scrollbar-track {
    background:none;
  }
  ::-webkit-scrollbar-thumb {
    background:#00853e;
    border-radius:0;
  }

  .clearfix { display:block; }
  .clearfix:after {
    content:'.';
    display:block;
    height:0;
    clear:both;
    visibility:hidden;
  }

  .leaflet-popup-close-button {
    display:none;
  }
  .leaflet-popup-content {
    font:400 15px/22px 'Source Sans Pro', 'Helvetica Neue', Sans-serif;
    padding:0;
    width:200px;
  }
  .leaflet-popup-content-wrapper {
    padding:0;
  }
  .leaflet-popup-content h3 {
    background:#91c949;
    color:#fff;
    margin:0;
    display:block;
    padding:10px;
    border-radius:3px 3px 0 0;
    font-weight:700;
    margin-top:-15px;
  }
  .leaflet-popup-content div {
    padding:10px;
  }
  .leaflet-container .leaflet-marker-icon { cursor:pointer; }*/

  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }

  pre.ui-output {
    display:none;
    position:absolute;
    bottom:10px;
    left:10px;
    padding:5px 10px;
    background:rgba(0,0,0,0.5);
    color:#fff;
    font-size:11px;
    line-height:18px;
    border-radius:3px;
    max-height:50%;
    max-width:25%;
    overflow:auto;
    word-wrap: break-word;
    white-space:pre-wrap;
  }
  pre.ui-output:empty { padding:0; }

  .search-ui {
    position:absolute;
    top:10px;
    right:10px;
    z-index:1000;
  }

  </style>

  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.mapbox.css' rel='stylesheet' />
  <!--[if lt IE 9]>
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.ie.css' rel='stylesheet' />
  <![endif]-->
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/css/font-awesome.min.css' rel='stylesheet' />

  <!-- jQuery is required for this example. -->
  <script src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
</head>
<body>
  <!-- <div class='sidebar'>
    <div class='heading'>
      <h1>Search</h1>
    </div>
    <div class="form-group">
      <h5>Find zone <small>(<a id='geolocate' href='#'>find me</a>)</small></h5>
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
  </div> -->

  <div id='map' class='map'> </div>
  <!-- <input id='search' class='search-ui' placeholder='Enter state code' /> -->
  
<!--   <pre id='output' class='ui-output'></pre> -->
  <script>
  var accessToken = 'pk.eyJ1IjoiaXFiYWxmYWphciIsImEiOiJjaWx3ZTA1c2kwMXFqdWJrc29yMXlrc216In0.x27mOpcQja1glCL7NO-MLA';
  var mapId = 'iqbalfajar.pfjol93d';
  // var mapId = 'mapbox.streets';
  L.mapbox.accessToken = accessToken;

  var output = document.getElementById('output');
  var map = L.mapbox.map('map', mapId)
    .addControl(L.mapbox.geocoderControl('mapbox.places', {
        autocomplete: true, keepOpen: true
    }));
  L.control.locate().addTo(map);

  // Initialize the geocoder control and add it to the map.
  // var geocoderControl = L.mapbox.geocoderControl('mapbox.places');
  // geocoderControl.addTo(map);

  // Listen for the `found` result and display the first result
  // in the output container. For all available events, see
  // https://www.mapbox.com/mapbox.js/api/v2.3.0/l-mapbox-geocodercontrol/#section-geocodercontrol-on
  geocoderControl.on('found', function(res) {
      output.innerHTML = JSON.stringify(res.results.features[0]);
  });

  var geolocate = document.getElementById('geolocate');

  var myLayer = L.mapbox.featureLayer().addTo(map);

  // This uses the HTML5 geolocation API, which is available on
  // most mobile browsers and modern browsers, but not in Internet Explorer
  //
  // See this chart of compatibility for details:
  // http://caniuse.com/#feat=geolocation
  if (!navigator.geolocation) {
      geolocate.innerHTML = 'Geolocation is not available';
  } else {
      geolocate.onclick = function (e) {
          e.preventDefault();
          e.stopPropagation();
          map.locate();
      };
  }

  // Once we've got a position, zoom and center the map
  // on it, and add a single marker.
  map.on('locationfound', function(e) {
      map.fitBounds(e.bounds);

      myLayer.setGeoJSON({
          type: 'Feature',
          geometry: {
              type: 'Point',
              coordinates: [e.latlng.lng, e.latlng.lat]
          },
          properties: {
              'title': 'Here I am!',
              'marker-color': '#ff8888',
              'marker-symbol': 'star'
          }
      });

      // And hide the geolocation button
      // geolocate.parentNode.removeChild(geolocate);
  });

  // If the user chooses not to allow their location
  // to be shared, display an error message.
  map.on('locationerror', function() {
      geolocate.innerHTML = 'Position could not be found';
  });

  var featureLayer = L.mapbox.featureLayer().addTo(map);

  $('#search').keyup(search);

  var csvLayer = omnivore.csv('assets/data/airports.csv', null, L.mapbox.featureLayer())
      .addTo(map);

  function search() {
      // get the value of the search input field
      var searchString = $('#search').val().toLowerCase();

      csvLayer.setFilter(showState);

      // here we're simply comparing the 'state' property of each marker
      // to the search string, seeing whether the former contains the latter.
      function showState(feature) {
          return feature.properties.state
              .toLowerCase()
              .indexOf(searchString) !== -1;
      }
  }

</script>
</body>
</html>
