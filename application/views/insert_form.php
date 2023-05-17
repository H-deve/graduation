

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
  <!DOCTYPE html>
  <html>
  <body>
<div class="col-md-6">
<form role="form" action="<?php base_url();?>insert_Dplace" method="get">
              <div class="box-body">
                
                <div class="form-group">
                 <label for="ex3">description</label>
            <input class="form-control" name="description" id="ex2" type="text"  placeholder="Enter your description">
                </div>

                 <div class="form-group">
                <label for="ex3">latitude</label>
                 <input type="text"disabled="" class="form-control" name="lat" id="lat" value="">
                 </div>

         <div class="form-group">
            <label for="ex3">longetude</label>
            <input type="text" disabled="" class="form-control" name="lang" id="lang" value="">
          </div>
          <button type="submit" class="btn btn-success">SAVE</button>
              </div>
              </form>

              <form role="form" action="<?php base_url();?>display_Dplace">
              <button type="submit" class="btn btn-success">BACK</button>
              </form>

              </body>
              </div>
              

              
              </html>