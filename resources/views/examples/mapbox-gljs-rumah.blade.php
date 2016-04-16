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
    style: 'mapbox://styles/mapbox/emerald-v8',
    zoom: 15,
    center: [107.6203,  -6.9003]
});

map.on('style.load', function () {
    map.addSource('Rumah Tunggal', {
        type: 'vector',
        url: 'mapbox://hanfiev.2fc5b1e6'
    });

    map.addLayer({
        'id': 'Pusat_Perdagangan_Jasa',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(249,0,0,79)'
        },
        'source-layer': 'Pusat_Perdagangan_Jasa'

    });

    map.addLayer({
        'id': 'Perumahan_Kepadatan_Tinggi_3',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,193,7,14)'
        },
        'source-layer': 'Perumahan_Kepadatan_Tinggi_3'

    });

    map.addLayer({
        'id': 'Perumahan_Kepadatan_Tinggi_2',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,193,7,14)'
        },
        'source-layer': 'Perumahan_Kepadatan_Tinggi_2'

    });

    map.addLayer({
        'id': 'Perumahan_Kepadatan_Tinggi',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,193,7,14)'
        },
        'source-layer': 'Perumahan_Kepadatan_Tinggi'

    });

    map.addLayer({
        'id': 'Perumahan_Kepadatan_Sedang',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(55,148,179,1)'
        },
        'source-layer': 'Perumahan_Kepadatan_Sedang'

    });

    map.addLayer({
        'id': 'Perumahan_Kepadatan_Rendah',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(55,148,179,1)'
        },
        'source-layer': 'Perumahan_Kepadatan_Rendah'

    });

    map.addLayer({
        'id': 'Pertahanan_Keamanan',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(129,95,51,10)'
        },
        'source-layer': 'Pertahanan_Keamanan'

    });

    map.addLayer({
        'id': 'Perdagangan_Jasa_Linier',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,61,0,72)'
        },
        'source-layer': 'Perdagangan_Jasa_Linier'

    });

    map.addLayer({
        'id': 'Industri',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(150,135,131,5)'
        },
        'source-layer': 'Industri'

    });

    map.addLayer({
        'id': 'Campuran_Intensitas_Tinggi',
        'type': 'fill',
        'source': 'Rumah Tunggal',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(225,225,225,0)'
        },
        'source-layer': 'Campuran_Intensitas_Tinggi'

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

    // map.flyTo({center: features[0].geometry.coordinates});

    var popup = new mapboxgl.Popup()
        .setLngLat(map.unproject(e.point))
        .setHTML("<a href='https://www.google.com/#q="+feature.properties.kategori+"'>" + feature.properties.kategori + "</a>")
        .addTo(map);
});

// Use the same approach as above to indicate that the symbols are clickable
// by changing the cursor style to 'pointer'.
map.on('mousemove', function (e) {
    var features = map.queryRenderedFeatures(e.point, { layers: ['Wisata_Buatan'] });
    map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';
    // if (features.length) {
    //     map.setFilter("route-hover", ["==", "name", features[0].properties.name]);
    // } else {
    //     map.setFilter("route-hover", ["==", "name", ""]);
    // }
});

//selesai copy

map.addControl(new mapboxgl.Geocoder());
// map.addControl(new mapboxgl.Navigation());


</script>

</body>
</html>
