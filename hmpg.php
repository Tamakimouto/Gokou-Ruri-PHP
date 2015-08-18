<?php

   $mascotPath = "images/mascots/";
   $mascotList = array("gjbu.png", "kido.png", "ruri3.png", "ene.png", "ruri2.png", "ruri.png", "r1.png", "amakusa.png", "hitagi.png", "yuyu.png", "alice.png", "hitagi4.png", "mio.png", "nichijou.png", "trap.png");

   $mascot = $mascotList[rand(0, 14)];
   $mascotFullPath = $mascotPath . $mascot;

   ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Niggas are Moe</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <link rel="icon" href="images/kek.png" sizes="16x16 32x32 48x48 64x64" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" style="text/css" href="css/general.css" />
    <link rel="stylesheet" style="text/css" href="css/light.css" title="Kuroneko" />
    <link rel="alternate stylesheet" style="text/css" href="css/light.css" title="Kamineko" />
    <style type="text/css">
      body
      {
      background-image:url('<?php echo $mascotFullPath ?>') !important;
      background-size: contain;
      background-repeat: no-repeat;
      }
    </style>
  </head>
    <body>
    <main>

      <!--//echo "<img src=\"$mascotFullPath\" alt=\"$mascot\"  id=\"mascot\"/>"; -->

      <header>
        <h1>Welcome to the Internet, <span class="highlite">Anon</span></h1>
        <p class="subtitle">Its not like I like you or anything...</p>
      </header>
      <section class="searchContainer">
        <form class="searchForm" method="get" action="https://google.com/search">
          <input class="searchBar google" type="text" name="q" placeholder="Google" autofocus="autofocus" />
        </form>
        <form class="searchForm" method="get" action="https://youtube.com/results">
          <input class="searchBar youtube" type="text" name="search_query" placeholder="Youtube" />
        </form>
        <form class="searchForm" method="get" action="https://en.wikipedia.org/w/index.php">
          <input class="searchBar wikipedia" type="text" name="search" placeholder="Wikipedia (en)" />
        </form>
      </section>
      <nav>
        <ul class="buttonList">
          <li class="button buttonGreen"><a href="https://www.youtube.com/">Youtube</a></li>
          <li class="button buttonGrey"><a href="http://anime.thehylia.com/">Releases</a></li>
          <li class="button buttonGrey"><a href="http://pomf.se/">Pomf</a></li>
        </ul>
        <ul class="columnList">
          <li class="column columnPurple">
            <a>Anime</a>
            <ul>
	      <li><a href="http://www.haruhichan.com/">Haruhi</a></li>
	      <li><a href="#">Sad Panda</a></li>
	      <li><a href="http://myanimelist.net/panel.php">MAL</a></li>
            </ul>
          </li>
          <li class="column columnGreen">
            <a>4chan</a>
            <ul>
              <li><a href="http://boards.4chan.org/a/">Anime & Manga</a></li>
	      <li><a href="http://boards.4chan.org/w/">Wallpapers</a></li>
              <li><a href="http://boards.4chan.org/g/">Technology</a></li>
            </ul>
          </li>
          <li class="column columnPink">
            <a>Torrents</a>
            <ul>
              <li><a href="http://www.nyaa.se">Nyaa</a></li>
              <li><a href="http://bakabt.me/">Bakabt</a></li>
              <li><a href="https://thepiratebay.se/">ThePirateBay</a></li>
            </ul>
          </li>
	  <li class="column columnGreen">
            <a>Resources</a>
            <ul>
	      <li><a href="https://uga.view.usg.edu/">School</a></li>
              <li><a href="https://www.bankofamerica.com/">Banking</a></li>
	      <li><a href="http://eits.uga.edu/email_and_calendar/office365">UGA Mail</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <p style="color:#AAA; font-family:Terminus (ttf) font-size:6px;" alt="Hikigaya Hachiman"><br><br><span style="color:#9E774E">"The important thing is to take part."</span>
	<br>Famous words spoken by Pierre de Frédy,
	<br>Baron de Coubertin during a speech.
	<br><span style="color:#9E774E">However</span>, this quote tends to be frequently misused
	<br>and serves as kind of a threat to force participation.
	<br>There are tons of wild-goose chases in this world, y'know.
	<br>If <span style="color:#9E774E">the most important thing is</span> to take part,
	<br>then surely one could find meaning in <span style="color:#9E774E">not taking part</span> as well.
	<br>And if everything's worth experiencing,
	<br>then there's little doubt that the feeling of not experiencing something is,
	<br>in itself, worth experiencing.
	<br>In fact,
	<br>you could even call it a valuable experience to not experience something everyone else does.
      </p>
    </main>
  </body>
</html>

