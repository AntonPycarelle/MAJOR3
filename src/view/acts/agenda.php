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
      <label for="term" class="form__label">
<form action="index.php">
  <input type="hidden" name="page" value="agenda">
        <input class="filter-input" type="radio" name="genre" value="" id="catrad0" <?php if(empty($_GET['genre'])) { echo 'checked';}?>>
        <label class="filter-label" for='catrad0'>Alle</label>

        <input class="filter-input" type="radio" name="genre" value="straatact" id="catrad1" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'straatact') { echo 'checked';}?>>
        <label class="filter-label" for='catrad1'>Straatact</label>

        <input class="filter-input" type="radio" name="genre" value="voorstelling" id="catrad2" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'voorstelling') { echo 'checked';}?>>
        <label class="filter-label" for='catrad2'>Voorstelling</label>

        <input class="filter-input" type="radio" name="genre" value="andere" id="catrad3" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'andere') { echo 'checked';}?>>
        <label class="filter-label" for='catrad3'>Andere</label>

        <!-- <?php foreach($categories as $categorie){ ?>
          <input class="filter-input" type="radio" name="genre" id="catrad<?php echo $$numCat; ?>" value="<?php echo $categorie['genre'];?>" <?php if(!empty($_GET['genre']) && $_GET['genre'] == $categorie['genre']) echo 'checked';?>>
          <label class="filter-label" for='catrad<?php echo $numCat; ?>'><?php echo $categorie['genre'];?></label>

        <?php }?> -->
      </label>
  <input type="submit" class="submit-button">
</form>
<section class="acts-grid">


<?php
  foreach($shows as $show){?>
      <article >
        <img class="act-pic" src="./assets/img/straattheater.jpg" alt="<?php echo($show['show_name']) ?>">
        <a class="act-link" href="index.php?page=detail&amp;id=<?php echo $show['id'];?>">
          <div class="act-info">
            <p class="act-info__dag"><?php echo($show['date']) ?> <?php echo($show['hour']) ?></p>
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
