<header class="header-sub">
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

    <span class="logo_int accentkleur sub"><span class="black">Augustus 23 - 24 - 25</span> <span>Beveren</span></span>


    </p>
  </div>

</header>
<hr class="divider">
<main class="main" id="content">

<section class="detail">
  <div class="detail-title">
    <h3><?php echo $details['show_name'];?></h3>
    <p><?php echo $details['hour'];?></p>
  </div>
  <div class="detail01-grid-container">
  <img class="act-pic-agenda detail01-foto" src="./assets/img/<?php echo $details['pic'];?>" alt="lol">

    <div class="detail01-details">
      <h4 class="detail01-details__title">Info</h4>
      <div class="detail01-details__para">
          <div>
            <p class="para-title">Tijd</p>
            <p class="para-data"><?php echo $details['dag'];?> <?php echo $details['hour'];?></p>
          </div>
          <div>
            <p class="para-title">Location</p>
            <p class="para-data"><?php echo $details['location_name'];?></p>
          </div>
          <div>
            <p class="para-title">Categorie</p>
            <p class="para-data"><?php echo $details['genre'];?>
            </p>
          </div>
          <div>
            <div>
              <?php
                if ($details['site'] == NULL) {

                } else{
              ?>
              <p class="para-title">Site</p>
              <a class="para-data button" href="http://<?php echo $details['site'];?>">Bezoek Website</a>

              <?php
                }


              ?>

            </div>
          </div>
      </div>
    </div>

    <div class="detail01-uitleg">
      <h4 class="detail01-details__title"><?php echo $details['show_name'];?></h4>
      <p class="detail01-uitleg__text" ><?php echo  $details['info'];?></p>
    </div>
  </div>
</section>


<div class="detail-title">
    <h3>Meer op deze Dag</h3>
  </div>
<section class="acts-grid">
<h2 class="hidden">Meer op deze dag</h2>


<?php
  foreach($days as $day){?>
      <article>
        <div>
        <img class="act-pic" src="./assets/img/<?php echo $day['pic'];?>" alt="<?php echo($day['day_name']) ?>">
        </div>
        <a class="act-link" href="index.php?page=detail&amp;id=<?php echo $day['showid'];?>">
          <div class="act-info">

            <p class="act-info__dag"><?php echo $day['location_name'];?></p>
            <h3 class="act-info__title bold" ><?php echo($day['show_name']) ?></h3>
          </div>
          </a>
        </article>
  <?php } ?>


</section>

<div class="a-center" >
     <a class="button" href="index.php?page=agenda">Terug</a>
</div>
<footer class="footer">
  <div class="footer-grid-container">
<nav class="nav footer-nav">
    <ul>
      <li><a class="nav-link-item <?php if($_GET['page'] == 'home'){ echo 'nav-link-item__active';}?>" href="">Home</a></li>
      <li><a class="nav-link-item <?php if($_GET['page'] == 'agenda'){ echo 'nav-link-item__active';}?>" href="">Agenda</a></li>
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
