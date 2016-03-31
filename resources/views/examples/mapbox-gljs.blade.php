<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title></title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.16.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.16.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
</head>
<body>

<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v1.0.0/mapbox-gl-geocoder.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v1.0.0/mapbox-gl-geocoder.css' type='text/css' />

<!-- leaflet locate -->
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.mapbox.css' rel='stylesheet' />
<!--[if lt IE 9]>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.ie.css' rel='stylesheet' />
<![endif]-->
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/css/font-awesome.min.css' rel='stylesheet' />

<style>
#geocoder-container {
    position: absolute;
    top: 0;
    width: 100%;
    margin-top: 10px;
}

#geocoder-container > div {
    min-width:50%;
    margin-left:25%;
}
</style>
<div id='map'></div>
<div id='geocoder-container'></div>

<script>

// var accessToken = 'pk.eyJ1IjoiaXFiYWxmYWphciIsImEiOiJjaWx3ZTA1c2kwMXFqdWJrc29yMXlrc216In0.x27mOpcQja1glCL7NO-MLA';
// var mapStyle = 'mapbox://styles/iqbalfajar/cimdbesou00jkadlzrzkh4t8s';
var accessToken = 'pk.eyJ1IjoiaGFuZmlldiIsImEiOiJQYlFjVlNvIn0.ukrwZz0v6BXZEOsJHBdgDg';
var mapStyle = 'mapbox://styles/hanfiev/cimd8rnoz00iqadlzxnue4u20';

mapboxgl.accessToken = accessToken;

var map = new mapboxgl.Map({
    container: 'map',
    style: mapStyle,
    center: [107.618326, -6.905419],
    zoom: 13
});

var geocoder = new mapboxgl.Geocoder({
    container: 'geocoder-container' // Optional. Specify a unique container for the control to be added to.
});

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.Navigation());

map.addControl(geocoder);

L.control.locate().addTo(map);

// After the map style has loaded on the page, add a source layer and default
// styling for a single point.
map.on('style.load', function() {
    map.addSource('single-point', {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": []
        }
    });

    map.addLayer({
        "id": "point",
        "source": "single-point",
        "type": "circle",
        "paint": {
            "circle-radius": 10,
            "circle-color": "#007cbf"
        }
    });

    // Listen for the `geocoder.input` event that is triggered when a user
    // makes a selection and add a marker that matches the result.
    geocoder.on('result', function(ev) {
        map.getSource('single-point').setData(ev.result.geometry);
    });
});
</script>

</body>
</html>
