<?php
    @$page = $_GET["page"];
    if(!$page){
        $page="stronaglowna/stronaglowna";
    }
?>
<DOCTYPE html!>
<html>
    <head>
        <meta charset="utf=8">
	    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="rej_style.css">
        <link rel="stylesheet" href="recenzje.css">
        <link rel="stylesheet" href="wybieranie.css">
        <link rel="stylesheet" href="recenzja.css">
        <link rel="stylesheet" href="konto.css">
        <link rel="stylesheet" href="recenzje_uzytk.css">
	    <title> Smaczny Szczecin </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>

    <nav>
    </nav>

    <header>
        <section id="backsection">
            <div id="background">
                <section id="buttons">
                    <a href="?page=recenzja/recenzja"><button class="button1">Napisz recenzję</button></a>
                    <a href="?page=recenzje_użytkownika/recenzje_użytkownika"><button class="button1">Twoje recenzje</button></a>
                    <a href="?page=logowanie/logowanie"><button class="button2">Zaloguj się</button></a>
                    <a href="?page=rejestracja/rejestracja"><button class="button3">Zarejestruj się</button></a>
                    <a href="?page=konto/konto"><button class="button4">Moje konto</button></a>
                </section>
                <section id="abc">
                    <img id="smacznelogo" src="img/smaczny2.png">
                    <p id="banertext">Znajdź najlepsze smaki Szczecina</p>
                </section>
            </div>
        </section>

    </header>

    <div id="content">
       <?php
            include($page.".php");

       ?>
             
    </div>


    <footer class = "footer">
        <div class="info">
            <div class="firma">
                <h4>Firma</h4>
                <ul>
  	 				<li>O nas</li>
  	 				<li>Nasze usługi</li>
  	 				<li>Polityka prywtności</li>
  	 				<li>FaQ</li>
  	 			</ul>
            </div>

            <div class="social">
                <h4>Social Media</h4>
                <ul>
  	 				<li>Facebook</li>
  	 				<li>Instagram</li>
  	 				<li>Twitter</li>
  	 			</ul>
            </div>

            <div class="jezyk">
                <h4>Język</h4>
                <ul>
  	 				<li>Polski</li>
  	 			</ul>
            </div>
        </div>
    </footer>


    </body>







</html>