<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="i-edge">
	<title>Comentario</title>
	<link rel="stylesheet" href="css/estilosComentarios.css">
</head>
<body>
	
	<header class="header">
		<div class="ctn-header">
			<label class="lbl-header">
				
		</label>
	</div>
</header>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="ctn-data">

	<div class="container">
		<div class="row" style="background-color: white; border-style: ridge;
    border-color: coral;
    border-width: 7px;">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        	<div class="ctn-lbl-comentar"><label class="lbl-comentar">Comentarios</labe></div><br>
		        <div  class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="1000" data-numposts="4"></div>
	        </div>
        </div>
        <div class="col-md-1"></div>
			
		</div>
	</div>
	

</body>
</html>
