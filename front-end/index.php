			<?php include "ncoding.php"; ?>
			<?php include_once("languages/lang.php"); ?>

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
							<script src="info_script.js"></script>
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
									<li><a href="#sarjad"><?php echo $lang['menu_series'] ?></a></li>
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
			            </div><br></br><br></br><br></br>
			            <div id="parembox" class="col-xs-12 col-sm-2 col-md-3">
			                <h2>Seansid</h2> <br></br>
			            </div>

			            <div class="content">
			            	<!-- selleks peab parem moodus olema... -->
			            	<br><br><br><br>
			        		<?php
							try {
								$conn = new PDO("sqlsrv:server = tcp:dsdbserver.database.windows.net,1433; Database = DSDB", "stenno", "MjKpkslpn4s");
								$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
								
								$stmt = $conn->prepare("SELECT * FROM TestFilm");

								$stmt->execute();
								$stmt->setFetchMode(PDO::FETCH_ASSOC); 
								$result = $stmt->fetchAll();
								
								foreach ($result as $value){
									echo '<img class="pic2" alt="pilt" src="' . $value['PictureLocation'] . '">';
									echo "<b>" . $value["Name"] . "</b><br><br>";
									echo $value["DescriptionData"] . "<br><br>";
									echo '<div class="divclear"></div>';
									echo $value["DescriptionLong"];
									echo "<hr>";
								}

							}
							catch(PDOException $e){
								echo "Connection failed:" . $e->getMessage() . "<br>";
							}
							?>

							</div>
			        </div> 

			            
			        
			        


			        
			        <footer>
			        </footer>
			    </body>
			</html>
