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

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel='stylesheet' href="{{ URL::asset('assets-app/font-awesome/css/font-awesome.min.css') }}" type='text/css' />

    <link rel='stylesheet' href="{{ URL::asset('assets-app/style.css') }}" type='text/css' />

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

<div class='map-overlay top'>
    <div class='map-overlay-inner title-overlay'>
        <!-- <img src="{{ URL::asset('assets/img/logo@2x.png') }}" class="img-responsive" style="max-height: 50px;"></img> -->
        <h2 class="title-panel">CITY BUILD</h2>
    </div>

    <div class='map-overlay-inner'>
        <div class="form-group">
          <label for="sel1">Pilih Bangunan</label>
          <select class="form-control" id="sel1">
            <option>Rumah Tunggal</option>
            <option>Apartemen</option>
            <option>Restauran</option>
            <option>Cafe</option>
            <option>Minimarket</option>
            <option>Hotel</option>
            <option>Toko</option>
          </select>
        </div>

        <div class="panel-group" id="accordion" style="display:none;">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-info-circle" aria-hidden="true"></i> Legal Analysis</a>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in" >
                <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-12 title">Ketentuan Zonasi</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">Kode</div>
                      <div class="col-sm-8 bold">R1.1</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">Zona</div>
                      <div class="col-sm-8">Perumahan Kepadatan Tinggi</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">Sub Zona</div>
                      <div class="col-sm-8">Perumahan Kepadatan Tinggi</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">Kegiatan</div>
                      <div class="col-sm-8">Minimarket</div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12 title">Ketentuan Kegiatan</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">Status</div>
                      <div class="col-sm-8 bold">T1, T3, B1, B3</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">Keterangan Status</div>
                      <div class="col-sm-8">Dibatasi jumlah, Dibatasi jam beroperasi, Dibatasi luas lantai bangunan dalam kapling, Wajib melakukan kajian lingkungn hidup, Wajib menyediakan prasarana miniml</div>
                    </div>

                    <div class="row title">
                      <div class="col-sm-12 title">Aturan Dasar</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-9">Koefisien Dasar Bangunan (KDB)</div>
                      <div class="col-sm-3">40 %</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-9">Koefisien Luas Bangunan (KLB)</div>
                      <div class="col-sm-3">3,6</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-9">Koefisien Dasar Hijau (KDH)</div>
                      <div class="col-sm-3">40 %</div>
                    </div>
                    <div class="row ">
                      <div class="col-sm-12 ">Tata Bangunan:</div>
                    </div>
                    <div class="row ">
                      <div class="col-sm-12 ">(a) GSB mempertimbangk an aspek keselamatan dan kenyamanan; atau <br> GSB minimum = ½ x lebar rumija <br> (b) Tinggi bangunan maksimum mempertimbangk an daya dukung lahan, kawasan keselamatan operasi penerbangan serta mempertimbangkan aspek Keselamatan penghuni, pekerja dan masyarakat sekitarnya</div>
                    </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="fa fa-info-circle" aria-hidden="true"></i> Facility Analysis</a>
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse" >
                <div class="panel-body">
                    <div class="row title">
                      <div class="col-sm-12 title">Sekolah</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">Institut Teknologi Bandung</div>
                      <div class="col-sm-4">0.2 KM</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">Universitas Padjajaran</div>
                      <div class="col-sm-4">0.4 KM</div>
                    </div>
                    <div class="row title">
                      <div class="col-sm-12 title">Rumah Sakit</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">RS Boromeus</div>
                      <div class="col-sm-4">0.6 KM</div>
                    </div>
                    <div class="row title">
                      <div class="col-sm-12 title">Pasar</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">Pasar Gasibu</div>
                      <div class="col-sm-4">0.3 KM</div>
                    </div>
                    <div class="row title">
                      <div class="col-sm-12 title">Tempat Wisata</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">Monumen Perjuangan</div>
                      <div class="col-sm-4">0.1 KM</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">Museum Geologi</div>
                      <div class="col-sm-4">0.7 KM</div>
                    </div>
                    <div class="row title">
                      <div class="col-sm-12 title">Taman</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">Taman Fitness</div>
                      <div class="col-sm-4">0.6 KM</div>
                    </div>
                    <div class="row title">
                      <div class="col-sm-12 title">Terminal</div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">Sadang Serang</div>
                      <div class="col-sm-4">0.8 KM</div>
                    </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i class="fa fa-info-circle" aria-hidden="true"></i> Development Plan Analysis</a>
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse" >
                <div class="panel-body">
                    <div class="bold">
                        Untuk mengetahui analisis rencana pembangunan kota, harap input Email untuk Subscribe.
                    </div>
                    <br>
                    <form class="form-inline" >
                      <div class="form-group" style="width:100%">
                        <input type="email" class="form-control" id="email" placeholder="Email Address" style="width:100%">
                      </div>
                      <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiaGFuZmlldiIsImEiOiJQYlFjVlNvIn0.ukrwZz0v6BXZEOsJHBdgDg';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    zoom: 14,
    center: [107.6203,  -6.9003]
});

map.on('style.load', function () {
    map.addSource('Bandung', {
        type: 'vector',
        url: 'mapbox://hanfiev.427b71c6'
    });

   map.addLayer({
        'id': 'W',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'W'

    });

    map.addLayer({
        'id': 'SPU',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'SPU'

    });

    map.addLayer({
        'id': 'RTH2',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'RTH2'

    });

    map.addLayer({
        'id': 'RTH',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'RTH'

    });

    map.addLayer({
        'id': 'R3',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'R3'

    });

    map.addLayer({
        'id': 'R2',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'R2'

    });

    map.addLayer({
        'id': 'R1',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'R1'

    });

    map.addLayer({
        'id': 'PS',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'PS'

    });

    map.addLayer({
        'id': 'PL',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'PL'

    });

    map.addLayer({
        'id': 'KT',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'KT'

    });

    map.addLayer({
        'id': 'KH3',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'KH3'

    });

    map.addLayer({
        'id': 'KH2',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'KH2'

    });

    map.addLayer({
        'id': 'KH1',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'KH1'

    });

    map.addLayer({
        'id': 'K3',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'K3'

    });

    map.addLayer({
        'id': 'K2',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'K2'

    });

    map.addLayer({
        'id': 'K1',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'K1'

    });

    map.addLayer({
        'id': 'I',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'I'

    });

    map.addLayer({
        'id': 'H',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'H'

    });

    map.addLayer({
        'id': 'HK',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'HK'

    });

    map.addLayer({
        'id': 'C2',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'C2'

    });

    map.addLayer({
        'id': 'C1',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'C1'

    });

    map.addLayer({
        'id': 'lainnya',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'lainnya'

    });

    map.addLayer({
        'id': 'jalan',
        'type': 'fill',
        'source': 'Bandung',
        'paint': {
            'fill-opacity': 0.4,
            'fill-color': '#'+Math.floor(Math.random()*16777215).toString(16),
        },
        'source-layer': 'jalan'

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
        .setHTML("<a href='#/menu/zone-detail2/"+feature.properties.kode15+"' class='a-detail-zona'>" + feature.properties.kategori + "</a>")
        .addTo(map);

    $( "#accordion" ).show();
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
