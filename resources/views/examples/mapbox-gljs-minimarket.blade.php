
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

<!-- <nav id="menu"></nav> -->
<div id="map"></div>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiaXFiYWxmYWphciIsImEiOiJjaWx3ZTA1c2kwMXFqdWJrc29yMXlrc216In0.x27mOpcQja1glCL7NO-MLA';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/iqbalfajar/cimvh1pp001g4d2npp9wyh5c9',
    zoom: 14,
    center: [107.610873, -6.918836]
});

// map.on('style.load', function () {
//     map.addSource('museums', {
//         type: 'vector',
//         url: 'mapbox://mapbox.2opop9hr'
//     });

//     map.addLayer({
//         'id': 'museums',
//         'type': 'circle',
//         'source': 'museums',
//         'paint': {
//             'circle-radius': 8,
//             'circle-color': 'rgba(55,148,179,1)'
//         },
//         'source-layer': 'museum-cusco'
//     });

//     map.addSource('pola_ruang', {
//         type: 'vector',
//         url: 'mapbox://hanfiev.41ecc19e'
//     });

//     map.addLayer({
//         'id': 'Permukiman-Tinggi',
//         'type': 'fill',
//         'source': 'pola_ruang',
//         'paint': {
//             'fill-opacity': 0.4,
//             'fill-color': 'rgba(55,148,179,1)'
//         },
//         'source-layer': 'Permukiman-Tinggi'

//     });

//     map.addLayer({
//         'id': 'Permukiman-Sedang',
//         'type': 'fill',
//         'source': 'pola_ruang',
//         'paint': {
//             'fill-opacity': 0.4,
//             'fill-color': 'rgba(55,148,67,1)'
//         },
//         'source-layer': 'Permukiman-Sedang'

//     });

//     map.addLayer({
//         'id': 'Permukiman-Rendah',
//         'type': 'fill',
//         'source': 'pola_ruang',
//         'paint': {
//             'fill-opacity': 0.4,
//             'fill-color': 'rgba(55,148,40,1)'
//         },
//         'source-layer': 'Permukiman-Rendah'

//     });

//     map.addLayer({
//         'id': 'Perdagangan',
//         'type': 'fill',
//         'source': 'pola_ruang',
//         'paint': {
//             'fill-opacity': 0.4,
//             'fill-color': 'rgba(55,148,80,1)'
//         },
//         'source-layer': 'Perdagangan'

//     });

//     map.addLayer({
//         'id': 'Jasa',
//         'type': 'fill',
//         'source': 'pola_ruang',
//         'paint': {
//             'fill-opacity': 0.4,
//             'fill-color': 'rgba(100,148,10,1)'
//         },
//         'source-layer': 'Jasa'

//     });

//     map.addLayer({
//         'id': 'Pendidikan',
//         'type': 'fill',
//         'source': 'pola_ruang',
//         'paint': {
//             'fill-opacity': 0.4,
//             'fill-color': 'rgba(100,48,10,1)'
//         },
//         'source-layer': 'Pendidikan'

//     });

//     map.addSource('contours', {
//         type: 'vector',
//         url: 'mapbox://mapbox.mapbox-terrain-v2'
//     });
//     map.addLayer({
//         'id': 'contours',
//         'type': 'line',
//         'source': 'contours',
//         'source-layer': 'contour',
//         'layout': {
//             'line-join': 'round',
//             'line-cap': 'round'
//         },
//         'paint': {
//             'line-color': '#877b59',
//             'line-width': 1
//         }
//     });
// });
// // mulai copy
// // When a click event occurs near a marker icon, open a popup at the location of
// // the feature, with description HTML from its properties.
// map.on('click', function (e) {
//     var features = map.queryRenderedFeatures(e.point, { source: ['pola_ruang'] });
//     if (!features.length) {
//         return;
//     }

//     var feature = features[0];

//     var popup = new mapboxgl.Popup()
//         .setLngLat(map.unproject(e.point))
//         .setHTML(feature.properties.RENCANA)
//         .addTo(map);
// });

// // Use the same approach as above to indicate that the symbols are clickable
// // by changing the cursor style to 'pointer'.
// map.on('mousemove', function (e) {
//     var features = map.queryRenderedFeatures(e.point, { layers: ['Permukiman-Tinggi'] });
//     map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';
// });

// //selesai copy

// // addLayer('Permukiman Tinggi', 'Permukiman-Tinggi');
// // addLayer('Permukiman Sedang', 'Permukiman-Sedang');
// // addLayer('Permukiman Rendah', 'Permukiman-Rendah');
// // addLayer('Perdagangan', 'Perdagangan');
// // addLayer('Jasa', 'Jasa');
// // addLayer('Pendidikan', 'Pendidikan');
// // addLayer('Contours', 'contours');

// // function addLayer(name, id) {
// //     var link = document.createElement('a');
// //     link.href = '#';
// //     link.className = 'active';
// //     link.textContent = name;

// //     link.onclick = function (e) {
// //         e.preventDefault();
// //         e.stopPropagation();

// //         var visibility = map.getLayoutProperty(id, 'visibility');

// //         if (visibility === 'visible') {
// //             map.setLayoutProperty(id, 'visibility', 'none');
// //             this.className = '';
// //         } else {
// //             this.className = 'active';
// //             map.setLayoutProperty(id, 'visibility', 'visible');
// //         }
// //     };

// //     var layers = document.getElementById('menu');
// //     layers.appendChild(link);
// // }

</script>

</body>
</html>
