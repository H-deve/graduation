<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form role="form" action="<?php base_url();?>delete_Dplace">
              <button type="submit">Delete</button>
               <script>
                  var url = 'http://localhost:82/graduation/index.php/danger_D/delete_Dplace';
                var id = url.substring(url.lastIndexOf('/') + 1);
                alert(id); // 234234234
              </script>
              </form>
<form role="form" action="<?php base_url();?>display_Dplace">
              <button type="submit">BACK</button>

              </form>
             
</body>
</html>>
