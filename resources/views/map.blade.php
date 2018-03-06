<html>
<head>
  {{--  <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Intro to MapView - Create a 2D map</title>
    <style>
        html, body, #viewDiv {
            padding: 0;
            margin: 0;
            height: 100%;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://js.arcgis.com/4.6/esri/css/main.css">
    <script src="https://js.arcgis.com/4.6/"></script>
    --}}{{--<script>
        require([
            "esri/Map",
            "esri/views/MapView",
            "dojo/domReady!"
        ], function(Map, MapView){
            var map = new Map({
                basemap: "streets"
            });
            var view = new MapView({
                container: "viewDiv",  // Reference to the scene div created in step 5
                map: map,  // Reference to the map object created before the scene
                zoom: 4,  // Sets zoom level based on level of detail (LOD)
                center: [15, 65]  // Sets center point of view using longitude,latitude
            });
        });
    </script>
    --}}{{--
--}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>

</head>
<body>
<div id="mapid" style="height: 880px;">



</div>

<script>
    var mymap = L.map('mapid').setView([27.7307, 85.3756], 13);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoibnVsbGxwb2ludGVyIiwiYSI6ImNqZWUwcTN6ZzEyajEzM283NWhicWFiaW4ifQ.sPJ6IpoUvwa3oDWgclG6cw'
    }).addTo(mymap);


    var popup = L.popup()
        .setLatLng([27.7307, 85.3756])
        .setContent("V.S Niketan.")
        .openOn(mymap);


    var circle = L.circle([27.7307, 85.3876], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(mymap);
    L.marker([27.7307, 85.398]).addTo(mymap);


    var baseLayers = {
        "Mapbox": mapbox,
        "OpenStreetMap": osm
    };
    var overlays = {
        "Marker": marker,
        "Roads": roadsLayer
    };
    L.control.layers(baseLayers, overlays).addTo(mymap);


    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {foo: 'bar'}).addTo(mymap);

    shapefile.open()

</script>





</body>
</html>