 <!-- <?php foreach ($da as $id ):?> 
	<h1 ># : <?php echo $id->id ; ?></h1>
<?php endforeach; ?> -->




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
<!-- bootstrap -->
<div class="container-fluid">

<div class="row">

<div class="col-md-6">
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">DANGER PLACES</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>ID</th>
                  <th>latidue</th>
                  <th>longitude</th>
                  <th>description</th>
                  <th>action</th>
                </tr>
                </thead>

                
                <?php foreach ($da as $id ):?> 

                <tbody>

                <tr>
                  <td><?php echo $id->id ; ?></td>
                  <td><?php echo $id->latidue ; ?></td>
                  <td><?php echo $id->longitude ; ?></td>
                  <td><?php echo $id->description ; ?></td>
                  <td>  <a href="<?php echo base_url();?>danger_D/update_Dplace?id=<?php echo  $id->id?>"  class="btn btn-primary">UPDATE</a>  <a href="<?php echo base_url();?>danger_D/delete?id=<?php echo  $id->id?>" class="btn btn-danger">DELETE</a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                </table>

              
                 </div> 
                 </section>
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




/*L.easyButton('<span class= "star" > &equiv;</span>', function(btn, map){
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

c.addTo(map);*/




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


<?php foreach ($da as $value):?>

 var redMarker = L.AwesomeMarkers.icon({
    icon: 'coffee',
    markerColor: 'red'
  });
 // alert("<?= $value->latidue ?>");
    L.marker(["<?= $value->latidue ?>" ,"<?= $value->longitude?>"], {icon: redMarker}).bindPopup("<?= $value->description ?>").addTo(map);
<?php endforeach?>




/*function main_map_init (map, options) {

    var dataurl = '{% url "data" %}';
    // Download GeoJSON via Ajax
    $.getJSON(dataurl, function (data) {
        // Add GeoJSON layer
        L.geoJson(data).addTo(map);
    });*/


</script>
