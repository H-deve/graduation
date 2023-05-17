<link rel="stylesheet" href="<?= base_url(); ?>/assets2/leaflet.css" />
<link rel="stylesheet" href="<?= base_url(); ?>/assets2/easy-button.css" />
<link rel="stylesheet" href="<?= base_url(); ?>/assets2/L.Control.MousePosition.css" />
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/assets2/leaflet.awesome-markers.css">
<link rel="stylesheet" href="<?= base_url(); ?>/assets2/Control.Coordinates.css" />
 <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.33.1/mapbox-gl.css' rel='stylesheet' />
 <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.33.1/mapbox-gl.js'></script>
   
   

<!-- bootstrap -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets2/bootstrap-3.3.6-dist/css/bootstrap.css" />
<link rel="stylesheet" href="<?= base_url(); ?>/assets2/bootstrap-3.3.6-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>/assets2/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/bootstrap-theme.css">

<script src="<?= base_url(); ?>/assets2/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>/assets2/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets2/bootstrap-3.3.6-dist/js/npm.js"></script>
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.33.1/mapbox-gl.js'></script>


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- bootstrap -->





<script src="<?= base_url(); ?>/assets2/leaflet.js"></script>
<script src="<?= base_url(); ?>/assets2/L.Control.MousePosition.js"></script>
<script src="<?= base_url(); ?>/assets2/easy-button.js"></script>
<script src="<?= base_url(); ?>/assets2/Control.Coordinates.js"></script>
<script src="<?= base_url(); ?>/assets2/leaflet.awesome-markers.js"></script>
<style>

.star {
 font-size:1.5em;   
 
}

#map { height: 100%; }

</style>
<div class="container-fluid">

<div class="row">



 

            <div class="col-md-6">
              <form role="form" action="<?php echo base_url();?>danger_D/save_update" method="GET">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $place->id?>">
                <div class="form-group">
                 <label for="ex3">description</label>
            <input value="<?php echo $place->description?>" class="form-control" name="description" id="ex2" type="text"  placeholder="Enter your description">
                </div>

                 <div class="form-group">
                <label for="ex3">latitude</label>
      <input value="<?php echo $place->latidue?>" type="text"  class="form-control" name="latidue" id="lat" >
                 </div>

                  <div class="form-group">
                  <label for="ex3">longetude</label>
 <input value="<?php echo $place->longitude?>" type="text"  class="form-control" name="longitude" id="lang" >
          </div>
          <button type="submit" class="btn btn-success">UPDATE</button>
              </div>
              
               
              </form>
              <form role="form" action="<?php base_url();?>display_Dplace" method="get">
                <div>
                  <button type="submit" class="btn btn-success">BACK</button>
            </div>
               </form>
              </form>

      <!-- <form  action="<?php base_url();?>place/save" method="POST">
       
          <div class="col-xs-4">
            <label for="ex3">place name</label>
            <input class="form-control" name="place_name" id="ex1" type="text">
          </div>



          <div class="col-xs-4">
            <label for="ex3">description</label>
            <input class="form-control" name="description" id="ex2" type="text">
          </div>

        <div class="col-xs-4">
            <label for="ex3">latitude</label>
            <input type="text"disabled="" name="lat" id="lat" value="">
        </div>
         <div class="col-xs-4">
            <label for="ex3">longetude</label>
            <input type="text" disabled=""name="lang" id="lang" value="">
          </div>
            <br>

          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" >Dropdown Example
            <span class="caret"></span></button>
            <ul class="dropdown-menu" id="demolist"   >
              <li value="Restaurant"><a href="#">Restaurant</a></li>
              <li value="coffee"><a href="#">coffee</a></li>
              <li value="Hospital"><a href="#">Hospital</a></li>
            </ul>
           <input type="hidden" name="type" id="type" value="Restaurant">
          </div>
          <br>
          <button type="submit" class="btn btn-success">SAVE</button>

      </form>
 -->

    </div>



  <div class="col-md-6">

      
      <div id="map"></div>

  </div>


  </div>

</div>


  <script>


var map = L.map('map').setView([33.530772, 36.297273], 13);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors',
      maxZoom: 20,
      minZoom: 5   
}).addTo(map);
 
 var littleton= L.marker([33.530772, 36.297273]).bindPopup('This is damas city');
   
 var circle = L.circle([34.834328, 35.899454], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 600
}).addTo(map);



/*bike lanes
   L.tileLayer('http://tiles.mapc.org/trailmap-onroad/{z}/{x}/{y}.png', {
        maxZoom: 17,
        minZoom: 9
    }).addTo(map);*/




L.easyButton('<span class= "star" > &equiv;</span>', function(btn, map){
    var antarctica = [-77,70];
    map.setView(antarctica);
}).addTo( map );


L.easyButton('<span class= "star" >&starf;</span>', function(btn, map){
    var antarctica = [-77,70];
    map.setView(antarctica);
}).addTo( map );

L.easyButton('<span class= "icon-map-marker" ></span>', function(btn, map){
    var antarctica = [-77,70];
    map.setView(antarctica);
}).addTo( map );


var c = new L.Control.Coordinates();  

c.addTo(map);


map.on('click', function(e,name) {
    var redMarker = L.AwesomeMarkers.icon({
    icon: 'coffee',
    markerColor: 'red'
  });
    alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng);

    L.marker([e.latlng.lat ,e.latlng.lng], {icon: redMarker}).addTo(map);
//document.getElementById("ex1").value = name;
document.getElementById("lat").value = e.latlng.lat;
document.getElementById("lang").value = e.latlng.lng;
});

/*map.on('click', function(e) {
    c.setCoordinates(e);
    alert(c.latlng);
});*/

//L.control.mousePosition().addTo(map);

var redMarker = L.AwesomeMarkers.icon({
    icon: 'coffee',
    markerColor: 'red'
  });


littleton.addTo(map);
//htmlStar.addTo(map);



$('#demolist li').on('click', function(){
  //alert($(this).attr("value"));
    $('#demolist').val($(this).attr("value"));
    $("#type").val($(this).attr("value"));
    //alert($('#demolist').val());
});




/*function main_map_init (map, options) {

    var dataurl = '{% url "data" %}';
    // Download GeoJSON via Ajax
    $.getJSON(dataurl, function (data) {
        // Add GeoJSON layer
        L.geoJson(data).addTo(map);
    });*/


</script>
