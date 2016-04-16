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
						<li><a href="index.php" class="active"><?php echo $lang['menu_schedule'] ?></a></li>
						<li><a href="seances.php"><?php echo $lang['menu_seances'] ?></a></li>
						<li><a href="#kinost"><?php echo $lang['menu_about'] ?></a></li>
						<li><a href="#arhiiv"><?php echo $lang['menu_archive'] ?></a></li>
						<li><a href="#kontakt"><?php echo $lang['menu_contact'] ?></a></li>
						<li class="social_btn"><a href="https://www.facebook.com/elektriteater"><img src="fb.png" alt="fb" /></a></li>
						<li class="social_btn"><a href="https://www.instagram.com/elektriteater/"><img src="ig.png" alt="ig" /></a></li>
					</ul>
                </div>

            </menu>
        </header>
        <div class="row">
            <div id="sisukava" class="col-xs-12 col-sm-10 col-md-9">
                <h1>Varsti kinos</h1>

                
				<?php
					try {
						$conn = new PDO("sqlsrv:server = tcp:dsdbserver.database.windows.net,1433; Database = DSDB", "stenno", "MjKpkslpn4s");
						$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

						$stmt = $conn->prepare("SELECT * FROM TestFilm");
						
						$stmt->execute();
						$stmt->setFetchMode(PDO::FETCH_ASSOC); 
						$result = $stmt->fetchAll();

						foreach ($result as $value){
							echo '<div class="film row">';
							echo '<div class="aeg film col-xs-2 col-sm-2 col-md-2">';
							echo '<h4 class="n2dalaP2ev">E</h4>';
							echo '<h4 class="kuup2ev">21.03<br />19:00</h4>';
							echo '</div>';
							echo '<div class="fotokonteiner col col-xs-10 col-sm-5 col-md-5">';
							echo '<img class="filmifoto"  src="' . $value["PictureLocation"] . '" />';
							echo '<figcaption><h3 class="pildipealne">' . $value["Name"] . '</h3></figcaption>';
							echo '</div>';
							echo '<div class="filmikirjeldus col-xs-12 col-sm-5 col-md-5">' . $value["DescriptionLong"] . '</div>';
							echo '<div class="filmiinfoblokk col-xs-12 col-sm-10 col-md-10">';
							echo '<div class="filmiinfo col-xs-6 col-sm-3 col-md-3"><b>'.$lang['film_country'].'</b><br/>' . $value["DescriptionCountry"] . '</div>';
							echo '<div class="filmiinfo col-xs-6 col-sm-3 col-md-3"><b>'.$lang['film_director'].'</b><br />' . $value["DescriptionFilmDirector"] . '</div>';
							echo '<div class="filmiinfo col-xs-6 col-sm-3 col-md-3"><b>'.$lang['film_duration'].'</b><br />' . $value["DescriptionRunningTime"] . '</div>';
							echo '<div class="filmiinfo col-xs-6 col-sm-3 col-md-3">' . $value["DescriptionAdditionalInfo"] . '</div>';
							echo '</div>';
							echo '</div>';
						}
					}
					catch(PDOException $e){
						echo "Connection failed:" . $e->getMessage() . "<br>";
					}
					?>
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
