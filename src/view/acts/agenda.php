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
<main class="main agenda" id="content">
<label for="term" class="form__label">
<form action="index.php" class="filter-grid-container">
  <input type="hidden" name="page" value="agenda">



  <div class="filter-search">
  <p class="tussentitle">Filter</p>
  <input class="search-input" type="search" name="search" placeholder="Zoeken" value="<?php echo($search) ?>" autofocus>
  </div>

  <div class="filter-categorie">
    <div>
        <input class="filter-input" type="radio" name="genre" value="" id="catrad0" <?php if(empty($_GET['genre'])) { echo 'checked';}?>>
        <label class="filter-label filter-label_categorie " for='catrad0'>Alle</label>
    </div>
    <div>
        <input class="filter-input" type="radio" name="genre" value="straatact" id="catrad1" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'straatact') { echo 'checked';}?>>
        <label class="filter-label filter-label_categorie" for='catrad1'>Straatact</label>
        </div>
    <div>
        <input class="filter-input" type="radio" name="genre" value="voorstelling" id="catrad2" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'voorstelling') { echo 'checked';}?>>
        <label class="filter-label filter-label_categorie" for='catrad2'>Voorstelling</label>
        </div>
    <div>
        <input class="filter-input" type="radio" name="genre" value="andere" id="catrad3" <?php if(!empty($_GET['genre']) && $_GET['genre'] == 'andere') { echo 'checked';}?>>
        <label class="filter-label filter-label_categorie" for='catrad3'>Andere</label>
    </div>
  </div>

    <div class="filter-dagen dagen-container">
      <div class="dagen-all">
        <input class="filter-input" type="radio" name="dag" value="" id="dagrad0" <?php if(empty($_GET['dag'])) { echo 'checked';}?>>
        <label class="filter-label dagen-style" for='dagrad0'>Alle</label>
      </div>
      <div class="dagen-vrij">
        <input class="filter-input" type="radio" name="dag" value="Vrijdag" id="dagrad1" <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'Vrijdag') { echo 'checked';}?>>
        <label class="filter-label dagen-style" for='dagrad1'>VR</label>
      </div>
      <div class="dagen-zat">
        <input class="filter-input" type="radio" name="dag" value="Zaterdag" id="dagrad2" <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'Zaterdag') { echo 'checked';}?>>
        <label class="filter-label dagen-style" for='dagrad2'>ZA</label>
      </div>
      <div class="dagen-zon">
        <input class="filter-input" type="radio" name="dag" value="Zondag" id="dagrad3" <?php if(!empty($_GET['dag']) && $_GET['dag'] == 'Zondag') { echo 'checked';}?>>
        <label class="filter-label dagen-style" for='dagrad3'>ZO</label>
      </div>
  </div>
  </label>
  <select class="filter-location" name="locatie">
          <option value="">Locatie:</option>
        <?php foreach($locations as $location):?>
          <option value="<?php echo $location['location_name'];?>" <?php if($loca == $location['location_name']) echo 'selected';?>><?php echo $location['location_name'];?></option>
        <?php endforeach;?>
  </select>


  <input class="filter-submit" type="submit">

</form>
<?php
if (!empty($_GET['dag']) || !empty($_GET['locatie']) || !empty($_GET['genre']) || !empty($_GET['search'])) {
?>
  <div class="clear-wrapper">
  <a class=" clear-filter" href="index.php?page=agenda">Reset</a>
  </div>
  <?php
}?>
<section class="acts-grid">

<h2 class="hidden">Evenementen lijst</h2>

<?php
  foreach($shows as $show){?>
      <article class="bg-primary">
        <div>
        <img class="act-pic" src="./assets/img/<?php echo $show['pic'];?>" alt="<?php echo($show['show_name']) ?>">
        </div>
        <a class="act-link" href="index.php?page=detail&amp;id=<?php echo $show['showid'];?>">
          <div class="act-info">

            <p class="act-info__dag"><?php //echo($show['hour']);
        foreach($show['tijden'] as $tijd){?>  | <?php echo $tijd['dag'];?> <?php echo $tijd['hour']; }?> |</p>
            <h3 class="act-info__title bold" ><?php echo($show['show_name']) ?></h3>
          </div>
          </a>
        </article>
  <?php } ?>


</section>

<hr class="divider">
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
    <img class="sponsor" src="./assets/img/logobeveren.png" width="203" height="40" alt="Beveren verbindt logo">
    <a class="footer-link" href="">info@beveren.be</a>
    <a class="footer-link" href="">0476 38 38 39</a>
  </div>
  </div>
</footer>
