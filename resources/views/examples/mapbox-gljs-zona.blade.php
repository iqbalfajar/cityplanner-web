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
    zoom: 14,
    center: [107.6203,  -6.9003]
});

map.on('style.load', function () {
    map.addSource('Cibeunying', {
        type: 'vector',
        url: 'mapbox://hanfiev.eb1497d8'
    });

   map.addLayer({
        'id': 'Wisata_Buatan',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(197,0,255,84)'
        },
        'source-layer': 'Wisata_Buatan'

    });

map.addLayer({
        'id': 'Transportasi',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,195,0,13)'
        },
        'source-layer': 'Transportasi'

    });

map.addLayer({
        'id': 'Sempadan_SUTET',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(152,230,0,-45)'
        },
        'source-layer': 'Sempadan_SUTET'

    });

map.addLayer({
        'id': 'Sempadan_Sungai',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(152,230,0,-45)'
        },
        'source-layer': 'Sempadan_Sungai'

    });

map.addLayer({
        'id': 'Sempadan_Rel',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(152,230,0,-45)'
        },
        'source-layer': 'Sempadan_Rel'

    });

map.addLayer({
        'id': 'Sempadan_Jaringan_Jalan',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(152,230,0,-45)'
        },
        'source-layer': 'Sempadan_Jaringan_Jalan'

    });

map.addLayer({
        'id': 'RTNH',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(85,255,0,-71)'
        },
        'source-layer': 'RTNH'

    });

map.addLayer({
        'id': 'RTH_Taman_Kota',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(85,255,0,-71)'
        },
        'source-layer': 'RTH_Taman_Kota'

    });

map.addLayer({
        'id': 'RTH_Privat',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(85,255,0,-71)'
        },
        'source-layer': 'RTH_Privat'

    });

map.addLayer({
        'id': 'RTH_Plasma_Nutfah',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(85,255,0,-71)'
        },
        'source-layer': 'RTH_Plasma_Nutfah'

    });

map.addLayer({
        'id': 'RTH_Pemakaman',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(85,255,0,-71)'
        },
        'source-layer': 'RTH_Pemakaman'

    });

map.addLayer({
        'id': 'RTH_Pelestarian_Alam',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(85,255,0,-71)'
        },
        'source-layer': 'RTH_Pelestarian_Alam'

    });

map.addLayer({
        'id': 'RTH_Hutan_Kota',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(85,255,0,-71)'
        },
        'source-layer': 'RTH_Hutan_Kota'

    });

map.addLayer({
        'id': 'Pusat_Perdagangan_Jasa',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(249,0,0,79)'
        },
        'source-layer': 'Pusat_Perdagangan_Jasa'

    });

map.addLayer({
        'id': 'Perumahan_Kepadatan_Tinggi',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,193,7,14)'
        },
        'source-layer': 'Perumahan_Kepadatan_Tinggi'

    });

map.addLayer({
        'id': 'Perumahan_Kepadatan_Rendah',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,152,9,34)'
        },
        'source-layer': 'Perumahan_Kepadatan_Rendah'

    });

map.addLayer({
        'id': 'Pertanian',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(198,245,128,-29)'
        },
        'source-layer': 'Pertanian'

    });

map.addLayer({
        'id': 'Pertahanan_Keamanan',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(129,95,51,10)'
        },
        'source-layer': 'Pertahanan_Keamanan'

    });

map.addLayer({
        'id': 'Peribadatan',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,195,0,13)'
        },
        'source-layer': 'Peribadatan'

    });

map.addLayer({
        'id': 'Perdagangan_Jasa_Linear',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,61,0,72)'
        },
        'source-layer': 'Perdagangan_Jasa_Linear'

    });

map.addLayer({
        'id': 'Pendidikan',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(245,124,0,44)'
        },
        'source-layer': 'Pendidikan'

    });

map.addLayer({
        'id': 'Pasar_Tradisional',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(249,0,0,79)'
        },
        'source-layer': 'Pasar_Tradisional'

    });

map.addLayer({
        'id': 'Kesehatan',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(245,124,0,44)'
        },
        'source-layer': 'Kesehatan'

    });

map.addLayer({
        'id': 'Kantor_Pemerintahan',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,139,253,56)'
        },
        'source-layer': 'Kantor_Pemerintahan'

    });

map.addLayer({
        'id': 'Industri',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(150,135,131,5)'
        },
        'source-layer': 'Industri'

    });

map.addLayer({
        'id': 'Gardu_Listrik',
        'type': 'fill',
        'source': 'Cibeunying',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': 'rgba(255,195,0,13)'
        },
        'source-layer': 'Gardu_Listrik'

    });

map.addLayer({
        'id': 'Campuran_Intensitas_Tinggi',
        'type': 'fill',
        'source': 'Cibeunying',
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
