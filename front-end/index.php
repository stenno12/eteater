<?php include_once("languages/lang.php"); ?>




<!doctype html>
<html lang="et">
    <head>
        <title>eTeater</title>
        <meta charset="utf-8" />
        <meta name="description" content="eTeater on arthouse kino Tartus" />
        <meta name="keywords" content="kino, tartu, arthouse, filmid, tartus, elektriteater" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300|Roboto+Slab:300" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <header>
            <menu>
                <div id="logo"><a href="#pealeht"><img src="logo.png" /></a></div>
                <ul>
                    <li><a href="#kava" class="active">Kava</a></li>
                    <li><a href="#sarjad"> <?php echo $lang['menu_series'] ?> </a></li>
                    <li><a href="#kinost">Kinost</a></li>
                    <li><a href="#arhiiv">Arhiiv</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                </ul>
                <ul id="social_btn">
                    <li><a href="https://www.facebook.com/elektriteater"><img src="fb.png" alt="fb" /></a></li>
                    <li><a href="https://www.instagram.com/elektriteater/"><img src="ig.png" alt="ig" /></a></li>
					<li><a href="index.php?lang=et"></a></li>
					<li><a href="index.php?lang=en"></a></li>
                </ul>
            </menu>
        </header>
        <div class="rida">
            <div id="sisukava" class="col col9">
                <h1>Kinokava</h1>

                <!-- Siin on üksiku filmi disain info -->
                <div style="film">
                    <div id="kp2ev" class="col col2">
                        <h4 id="kuup2evNr">15</h4>
                        <h4 id="kuup2ev">Apr</h4>
                        <h4 id="kuup2ev">19:00</h4>
                    </div>
                    <div id="fotokonteiner" class="col col5">
                        <img src="filmipostrid/laenatud.jpg" class="filmifoto" />
                        <figcaption>
                            <h3 class="pildipealne">“Laenatud naene” elava muusikaga</h3>
                        </figcaption>
                    </div>
                    <div id="filmikirjeldus" class="col col5">
                        Elektriteatri viienda sünnipäeva puhul näitame märtsis kõigi seansside ette eeskava asemel Eesti kõige vanemat komöödiat pealkirjaga “Laenatud naene”. Tummfilmi saadab klaveril pianist Jorma Toots. Nii saab ka tänane publik osa vanade kinode hõngust, kus film ja elav muusika käisid käsikäes. “Laenatud naene” on tõenäoliselt 1913. aastal Tallinnas filmitud 12-minutiline komöödia
                    </div>
                    <div id="filmiinfo" class="col col10">
                        <div class="col col3"><b>Riik</b><br /> Eesti</div>
                        <div class="col col3"><b>Režissöör</b><br /> Kenneth Branagh</div>
                        <div class="col col3"><b>Pikkus</b><br /> 242 min</div>
                        <div class="col col3">English friendly</div>
                    </div>
                </div>
                <!-- Siin on üksiku filmi disain info -->
                <div style="film">
                    <div id="kp2ev" class="col col2">
                        <h4 id="kuup2evNr">15</h4>
                        <h4 id="kuup2ev">Apr</h4>
                        <h4 id="kuup2ev">19:00</h4>
                    </div>
                    <div id="fotokonteiner" class="col col5">
                        <img src="filmipostrid/laenatud.jpg" class="filmifoto" />
                        <figcaption>
                            <span></span>
                            <h3 class="pildipealne">“Laenatud naene” elava muusikaga</h3>
                        </figcaption>
                    </div>
                    <div id="filmikirjeldus" class="col col5">
                        Elektriteatri viienda sünnipäeva puhul näitame märtsis kõigi seansside ette eeskava asemel Eesti kõige vanemat komöödiat pealkirjaga “Laenatud naene”. Tummfilmi saadab klaveril pianist Jorma Toots. Nii saab ka tänane publik osa vanade kinode hõngust, kus film ja elav muusika käisid käsikäes. “Laenatud naene” on tõenäoliselt 1913. aastal Tallinnas filmitud 12-minutiline komöödia
                    </div>
                    <div id="filmiinfo" class="rida col10">
                        <div class="col col3"><b>Riik</b><br /> Eesti</div>
                        <div class="col col3"><b>Režissöör</b><br /> Kenneth Branagh</div>
                        <div class="col col3"><b>Pikkus</b><br /> 242 min</div>
                        <div class="col col3">English friendly</div>
                    </div>
                </div>
                <!-- Siin on üksiku filmi disain info -->
                <div style="film">
                    <div id="kp2ev" class="col col2">
                        <h4 id="kuup2evNr">15</h4>
                        <h4 id="kuup2ev">Apr</h4>
                        <h4 id="kuup2ev">19:00</h4>
                    </div>
                    <div id="fotokonteiner" class="col col5">
                        <img src="filmipostrid/laenatud.jpg" class="filmifoto" />
                        <figcaption>
                            <span></span>
                            <h3 class="pildipealne">“Laenatud naene” elava muusikaga</h3>
                        </figcaption>
                        <span></span>
                    </div>
                    <div id="filmikirjeldus" class="col col5">
                        Elektriteatri viienda sünnipäeva puhul näitame märtsis kõigi seansside ette eeskava asemel Eesti kõige vanemat komöödiat pealkirjaga “Laenatud naene”. Tummfilmi saadab klaveril pianist Jorma Toots. Nii saab ka tänane publik osa vanade kinode hõngust, kus film ja elav muusika käisid käsikäes. “Laenatud naene” on tõenäoliselt 1913. aastal Tallinnas filmitud 12-minutiline komöödia
                    </div>
                    <div id="filmiinfo" class="rida col10">
                        <div class="col col3"><b>Riik</b><br /> Eesti</div>
                        <div class="col col3"><b>Režissöör</b><br /> Kenneth Branagh</div>
                        <div class="col col3"><b>Pikkus</b><br /> 242 min</div>
                        <div class="col col3">English friendly</div>
                    </div>
                </div>
            </div>

            <div id="parembox" class="col col3">
                <h2>Seansid</h2>
                <input type="date"   value="dd-mm-yyyy" onkeypress="return false">
            </div>
        </div>
        <footer>

        </footer>
    </body>
</html>
