<?php include "ncoding.php"; ?>
<?php include "languages/lang.php"; ?>
<!doctype html>
<html lang="et">
    <head>
        <title>eTeater</title>
        <meta charset="utf-8" />
        <meta name="description" content="eTeater on arthouse kino Tartus" />
        <meta name="keywords" content="kino, tartu, arthouse, filmid, tartus, elektriteater" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300|Roboto+Slab:300" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="style.css" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
    	<script src="http://maps.googleapis.com/maps/api/js"></script>

    </head>
    <body>
        <header>
			<menu>
				<div class="language">
					<span class="keelevalik"><a href="index.php?lang=et">ET</a></span>
					<span class="keelevalik"><a href="index.php?lang=en">EN</a></span>
					<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true" onlogin="checkLoginState()"></div>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#pealeht" class="logo"><img class="logoPilt" src="logo.png" /></a>
            	</div>
                <div id="navbar" class="navbar-collapse collapse">
					<ul class="navigeering nav navbar-nav">
						<li><a href="index.php"><?php echo $lang['menu_schedule'] ?></a></li>
						<li><a href="seances.php"><?php echo $lang['menu_seances'] ?></a></li>
						<li><a href="about.php" class="active"><?php echo $lang['menu_about'] ?></a></li>
						<li><a href="#arhiiv"><?php echo $lang['menu_archive'] ?></a></li>
						<li><a href="#kontakt"><?php echo $lang['menu_contact'] ?></a></li>
						<li class="social_btn"><a href="https://www.facebook.com/elektriteater"><img src="fb.png" alt="fb" /></a></li>
						<li class="social_btn"><a href="https://www.instagram.com/elektriteater/"><img src="ig.png" alt="ig" /></a></li>
					</ul>
                </div>

            </menu>
        </header>
        <div class="row">
            <div id="Asukoht" class="col-xs-12 col-sm-10 col-md-9">
                <h1>Asukoht</h1>

                <script>
				function initialize(){
					var mapProp = {
						center : new google.maps.LatLng(58.383895,26.721828),
						zoom : 15,
						mapTypeId : google.maps.MapTypeId.ROADMAP
					};
					var myMap = new google.maps.Map(document.getElementById("googleMap"), mapProp);
					var myPlace = {
						location : mapProp.center,
						placeId : "ChIJec0NYeY260YRjgFHF9_8vfA"
					};
					var marker = new google.maps.Marker({
						place : myPlace,
						map : myMap,
						label : "E"
					});
				}
				google.maps.event.addDomListener(window, "load", initialize)
				</script>
	
				<div id="googleMap" style="width:500px;height:380px;"></div>
				
            </div>

            <div id="parembox" class="col-xs-12 col-sm-2 col-md-3">
                <h2>Seansid</h2>
                <p>See menüü siin on jõhkralt pooleli, kunagi järgmine kord täieneb</p>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html>
