

<!DOCTYPE html>
<html lang="en">
<head id="hd"><meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
    <base href="http://tinycomp.net/">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
		
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="js/modernizr.custom.js" type="text/javascript"></script>
    <link href="css/glasscase.min.css?v=2.1" rel="stylesheet" />
 </head>
<body>
   



   
    <input type="hidden" name="ctl00$cphBody$__VIEWxSTATE" id="__VIEWxSTATE" value="MTEzMjsxMTs1" />
		<div class="container tc-exemples">
		   
			<div class="row">
				<div class="col-md-6 col-sm-12">                
					<ul id='zoom1' class='gc-start'>
						<li>
							<img src="/images/dress_green_1.jpg" alt='image1' /></li>
						<li>
							<img src="/images/dress_redmix_1.jpg" alt='image2' /></li>
						<li>
							<img src="/images/dress_green_2.jpg" /></li>
						<li>
							<img src="/images/dress_redmix_2.jpg" alt='image4' /></li>
						<li>
							<img src="/images/dress_green_3.jpg" alt='image5' /></li>
						<li>
							<img src="/images/dress_green_4.jpg" alt='image6' /></li>
						<li>
							<img src="/images/dress_redmix_3.jpg" alt='image7' /></li>
					</ul>
					
					<ul id='zoom2' class='gc-start'>
						<li>
							<img src="/images/dress_green_1.jpg" alt='image1' /></li>
						<li>
							<img src="/images/dress_redmix_1.jpg" alt='image2' /></li>
						<li>
							<img src="/images/dress_green_2.jpg" /></li>
						<li>
							<img src="/images/dress_redmix_2.jpg" alt='image4' /></li>
						<li>
							<img src="/images/dress_green_3.jpg" alt='image5' /></li>
						<li>
							<img src="/images/dress_green_4.jpg" alt='image6' /></li>
						<li>
							<img src="/images/dress_redmix_3.jpg" alt='image7' /></li>
					</ul>
				</div>           
			</div>
			
		</div> 
     
       
    </div>

       
    </form>
    <script src="/js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="js/jquery.glasscase.min.js?v=2.1"></script>
   
    <script type="text/javascript">
        $(function () {
            //ZOOM
            $("#zoom1").glassCase({ 'widthDisplay': 310, 'heightDisplay': 461, 'isSlowZoom': true, 'colorIcons': '#F15129', 'colorActiveThumb': '#F15129' });
			  $("#zoom2").glassCase({ 'widthDisplay': 310, 'heightDisplay': 461, 'isSlowZoom': true, 'colorIcons': '#F15129', 'colorActiveThumb': '#F15129' });
		});
    </script>

</body>
</html>
