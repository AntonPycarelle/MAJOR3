<header class="header">
  <nav class="nav">
    <ul>
    <li><a class="nav-link-item <?php if($_GET['page'] == 'home'){ echo 'nav-link-item__active';}?>" href="index.php?page=home">Home</a></li>
      <li><a class="nav-link-item <?php if($_GET['page'] == 'agenda'){ echo 'nav-link-item__active';}?>" href="index.php?page=agenda">Agenda</a></li>
      <li><a class="nav-link-item " href="">Praktisch</a></li>
      <li><a class="nav-link-item" href="">Extra</a></li>
    </ul>
  </nav>
  <a class="search" href=""><img src="./assets/img/glass.svg" alt="" width="29,07" height="29,07"></a>

  <div class="logo" >
    <p class="logo-title">
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

<form action="">
  <div>
    <div>
      <input type="radio" id="all" name="dag" value="all"
            checked>
      <label for="huey">All</label>
    </div>

    <div>
      <input type="radio" id="" name="dag" value="vrijdag"
            checked>
      <label for="vrijdag">Vri</label>
    </div>

    <div>
      <input type="radio" id="zaterdag" name="dag" value="zaterdag">
      <label for="zaterdag">Zat</label>
    </div>

    <div>
      <input type="radio" id="zondag" name="dag" value="zondag">
      <label for="zondag">zon</label>
    </div>
  </div>
  <input type="submit" value="Verzend" class="submit-button">
</form>
<section class="acts-grid">


<?php
  foreach($shows as $show){?>
      <article >
        <img class="act-pic" src="./assets/img/straattheater.jpg" alt="lol">
        <a href="" class="act-link">
          <div class="act-info">
            <p class="act-info__dag"><?php echo($show['date']) ?> <?php echo($show['start']) ?></p>
            <h3 class="act-info__title bold" ><?php echo($show['show_name']) ?></h3>
          </div>
          </a>
        </article>
  <?php } ?>


</section>


<footer class="footer">
  <div class="footer-grid-container">
<nav class="nav footer-nav">
    <ul>
      <li><a class="nav-link-item nav-link-item__active" href="">Home</a></li>
      <li><a class="nav-link-item" href="">Agenda</a></li>
      <li><a class="nav-link-item" href="">Praktisch</a></li>
      <li><a class="nav-link-item" href="">Extra</a></li>
    </ul>
  </nav>
  <div class="footer-info">
    <img src="./assets/img/logobeveren.png" width="203" height="40" alt="Beveren verbindt logo">
    <a class="footer-link" href="">info@beveren.be</a>
    <a class="footer-link" href="">0476 38 38 39</a>
  </div>
  </div>
</footer>
