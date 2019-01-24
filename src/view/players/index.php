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
  <section>
    <h2 class="tussentitle">Uitgelicht</h2>
    <div class="uitgelicht-grid-container">
    <article class="uitgelicht-big act-grid-container">
        <img class="act-pic" src="./assets/img/straattheater.jpg" alt="lol">
        <a href="" class="act-link">
          <div class="act-info">
            <p class="act-info__dag">Vrijdag 20:30</p>
            <h3 class="act-info__title bold" >Title</h3>
          </div>
          </a>
        </article>

        <article class="uitgelicht-event1 act-grid-container">
        <img class="act-pic" src="./assets/img/straattheater.jpg" alt="lol">
        <a href="" class="act-link">
          <div class="act-info">
            <p class="act-info__dag">Vrijdag 20:30</p>
            <h3 class="act-info__title bold" >Title</h3>
          </div>
          </a>
        </article>

        <article class="uitgelicht-event2 act-grid-container">
        <img class="act-pic" src="./assets/img/straattheater.jpg" alt="lol">
        <a href="" class="act-link">
          <div class="act-info">
            <p class="act-info__dag">Vrijdag 20:30</p>
            <h3 class="act-info__title bold" >Title</h3>
          </div>
          </a>
        </article>

        <article class="uitgelicht-event3 act-grid-container">
        <img class="act-pic" src="./assets/img/straattheater.jpg" alt="lol">
        <a href="" class="act-link">
          <div class="act-info">
            <p class="act-info__dag">Vrijdag 20:30</p>
            <h3 class="act-info__title bold" >Title</h3>
          </div>
          </a>
        </article>
    </div>
  </section>

  <section class="aftermovie">
    <h2 class="tussentitle">
      Hier is alvast een aftermovie van 2017
    </h2
    ><div class="aftermovie-movie">
    <iframe  width="560" height="315" src="https://www.youtube.com/embed/lrlscBtuSUM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
    </div>
</section>

<section>
  <h3 class="tussentitle">#ISB2018</h3>
  <p class="insta-text">Gebruik de hashtag en word gefeatured op onze website</p>
  <div class="insta-grid-container">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">
  <img class="act-pic-agenda" src="https://picsum.photos/200" alt="lol">



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
        <form id="formID" method="POST" action="" novalidate>
          <p class="error big"></p>
          <div class="form-wrapper form">
              <div class="input-group">
                <label for="">Emailadres:</label><br>
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
