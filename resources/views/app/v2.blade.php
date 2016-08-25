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
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v1.0.0/mapbox-gl-geocoder.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v1.0.0/mapbox-gl-geocoder.css' type='text/css' />

</head>
<body>

<style>
    #menu {
        background: #fff;
        position: absolute;
        z-index: 1;
        top: 10px;
        right: 10px;
        border-radius: 3px;
        width: 120px;
        border: 1px solid rgba(0,0,0,0.4);
        font-family: 'Open Sans', sans-serif;
    }

    #menu a {
        font-size: 13px;
        color: #404040;
        display: block;
        margin: 0;
        padding: 0;
        padding: 10px;
        text-decoration: none;
        border-bottom: 1px solid rgba(0,0,0,0.25);
        text-align: center;
    }

    #menu a:last-child {
        border: none;
    }

    #menu a:hover {
        background-color: #f8f8f8;
        color: #404040;
    }

    #menu a.active {
        background-color: #3887be;
        color: #ffffff;
    }

    #menu a.active:hover {
        background: #3074a4;
    }
</style>


<div id="map"></div>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiaGFuZmlldiIsImEiOiJQYlFjVlNvIn0.ukrwZz0v6BXZEOsJHBdgDg';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    zoom: 14,
    center: [107.6203,  -6.9003]
});

map.on('style.load', function () {
    map.addSource('RDTR-bwro3w', {
        type: 'vector',
        url: 'mapbox://hanfiev.dxs45qt5'
    });

   map.addLayer({
        'id': 'RDTR-bwro3w',
        'type': 'fill',
        'source': 'RDTR-bwro3w',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(197,0,255,84)'
        },
        'source-layer': 'RDTR-bwro3w'

    });    
   
});
// mulai copy
// When a click event occurs near a marker icon, open a popup at the location of
// the feature, with description HTML from its properties.
map.on('click', function (e) {
    var features = map.queryRenderedFeatures(e.point, { source: ['hotel'] });
    if (!features.length) {
        return;
    }

    var feature = features[0];

    var popup = new mapboxgl.Popup()
        .setLngLat(map.unproject(e.point))
        .setHTML("<a href='#/menu/zone-detail2/"+feature.properties.kode15+"' ng-click='triggerClick()' class='a-iframe'>" + feature.properties.kategori + "</a>")
        .addTo(map);
});

// Use the same approach as above to indicate that the symbols are clickable
// by changing the cursor style to 'pointer'.
map.on('mousemove', function (e) {
    var features = map.queryRenderedFeatures(e.point, { layers: ['Wisata_Buatan'] });
    map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';
});

//selesai copy
map.addControl(new mapboxgl.Geocoder());
// map.addControl(new mapboxgl.Navigation());

</script>

</body>
</html>
