<header class="header">
  <nav class="nav">
    <ul>
      <li><a class="nav-link-item <?php if($_GET['page'] == 'home'){ echo 'nav-link-item__active';}?>" href="index.php?page=home">Home</a></li>
      <li><a class="nav-link-item <?php if($_GET['page'] == 'agenda'){ echo 'nav-link-item__active';}?>" href="index.php?page=agenda">Agenda</a></li>
      <li><a class="nav-link-item" href="">Praktisch</a></li>
      <li><a class="nav-link-item" href="">Extra</a></li>
    </ul>
  </nav>
  <a class="search" href="index.php?page=agenda"><img src="./assets/img/glass.svg" alt="" width="29,07" height="29,07"></a>

  <div class="logo" >
    <p class="logo-title logo_home-fix">
    <span class="logo_int">Internationaal</span><br>
    <span>Straattheater Fest<span class="accentkleur">i</span>val</span><br>
    <span class="logo_int accentkleur a-right">Beveren</span>
    </p>
  </div>

  <div class="datum">
    <p>
      <span class="datum_maand">Augustus</span> <br>
      23 - 24 - 25
    </p>
  </div>

    <a class="arrow" href="#content"><img src="./assets/img/arrow.svg" alt="" height="66,58" width="64,24"></a>

</header>
<hr class="divider">
<main class="main" id="content">
  <section>
    <h2 class="tussentitle">Uitgelicht</h2>
    <div class="uitgelicht-grid-container">
    <article class="uitgelicht-big act-grid-container">
        <img class="act-pic" src="./assets/img/shows/jackpot.jpg" alt="Jackpot">
        <a href="index.php?page=detail&id=45" class="act-link">
          <div class="act-info">
            <p class="act-info__dag">Zondag 14:00</p>
            <h3 class="act-info__title bold" >JACKPOT</h3>
          </div>
          </a>
        </article>

        <?php
  foreach($uitgelichts as $uitgelicht){?>

<article class="bg-primary">
        <div>
        <img class="act-pic" src="./assets/img/<?php echo $uitgelicht['pic'];?>" alt="<?php echo($uitgelicht['day_name']) ?>">
        </div>
        <a class="act-link" href="index.php?page=detail&amp;id=<?php echo $uitgelicht['showid'];?>">
          <div class="act-info">

            <p class="act-info__dag"><?php echo $uitgelicht['location_name'];?></p>
            <h3 class="act-info__title bold" ><?php echo($uitgelicht['show_name']) ?></h3>
          </div>
          </a>
        </article>

  <?php } ?>

    </div>

    <div class="a-center" >
     <a class="button" href="index.php?page=agenda">Agenda</a>
    </div>
  </section>

  <section class="aftermovie">
    <h2 class="tussentitle">
      Hier is alvast een aftermovie van 2017
    </h2>
      <a  class="aftermovie-link" target="_blank" href="https://www.youtube.com/embed/lrlscBtuSUM"><img class="aftermovie-movie" width="560" height="315" src="assets/img/vid.jpg" alt="Aftermovie van 2017 Player"></a>
</section>


<section>
  <h3 class="tussentitle">#ISB2018</h3>
  <p class="insta-text">Gebruik de hashtag en word gefeatured op onze website</p>
  <div class="insta-grid-container">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/acc.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/castart.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/lava.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/coat.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/horses.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/fish.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/hippo.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/jackpot.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed " src="assets/img/shows/klei.jpg" alt="Instragram Feed Item">
  <img class="act-pic-agenda act-pic-feed  x" src="assets/img/shows/lapin.jpg" alt="Instragram Feed Item">



  </div>

</section>
</main>

<aside class="form-wrapper">
  <div class="">
    <h4 class="tussentitle white">Intresse? Wil je vrijwilliger worden?</h4>
    <p class="form-text white">Schrijf je in voor onze nieuwsbrief.</p>
  </div>
  <div>
      <div class="container-form">
        <form id="formID" method="POST" action="" class="index-form">
          <p class="error big"></p>
          <div class="form-wrapper form">
              <div class="input-group">
                <label class="white" for="">Emailadres:</label><br>
                <input class="input" required type="email" name="Emailadres" placeholder="henk.verstraete@hotmail.com" class="full-width"><br>
              </div>
              <input type="submit" value="Verzend" class="submit-button">
          </div>
        </form>
      </div>
    </div>
</aside>

<footer class="footer">
  <div class="footer-grid-container">
<nav class="nav footer-nav">
    <ul>
      <li><a class="nav-link-item  <?php if($_GET['page'] == 'home'){ echo 'nav-link-item__active';}?>" href="">Home</a></li>
      <li><a class="nav-link-item  <?php if($_GET['page'] == 'agenda'){ echo 'nav-link-item__active';}?>" href="">Agenda</a></li>
      <li><a class="nav-link-item " href="">Praktisch</a></li>
      <li><a class="nav-link-item" href="">Extra</a></li>
    </ul>
  </nav>
  <div class="footer-info">
    <img class="sponsor" src="./assets/img/logobeveren.png" width="203" height="40" alt="Beveren verbindt logo">
    <a class="footer-link" href="">info@beveren.be</a>
    <a class="footer-link" href="">0476 38 38 39</a>
  </div>
  </div>
</footer>
