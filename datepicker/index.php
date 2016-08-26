<!DOCTYPE html>
<html lang="en">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
 </head>

 <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <div class="well">
            <input type="text" class="span2" value="02-16-2012" id="dp1" >
          </div>
        </div>
      </div> 
    </div> 

 
    <script type="text/javascript">
   jQuery(function(){
		
			jQuery('#dp1').datepicker({
				format: 'mm-dd-yyyy',
                todayBtn: 'linked'
			});
			});
</script> 
 </body>
</html>