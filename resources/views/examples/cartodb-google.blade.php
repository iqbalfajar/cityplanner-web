<link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css" />
...
<div id="map"></div>
...
<script src="http://libs.cartocdn.com/cartodb.js/v3/3.15/cartodb.js"></script>
<script>
// get the viz.json url from the CartoDB Editor
// - click on visualize
// - create new visualization
// - make visualization public
// - click on publish
// - go to API tab

window.onload = function() {
  cartodb.createVis('map', 'http://documentation.cartodb.com/api/v2/viz/2b13c956-e7c1-11e2-806b-5404a6a683d5/viz.json');
}
</script>

<div id='mapCanvas'></div>