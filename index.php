<?php 
    session_start();
    //session_unset();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="./styles/styles.css" />
    <!-- Basic font(s) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- About Me font(s) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap"
      rel="stylesheet"
    />
  </head>
  <!--
    For Database:
    PHP:
    https://www.raghwendra.com/blog/how-to-connect-html-to-database-with-mysql-using-php-example/
    Firebase:
    Submit form:
    https://www.google.com/search?q=submit+form+to+firebase&rlz=1C1GCEA_enHU992HU992&oq=submit+to+firebase&aqs=chrome.2.69i57j0i10i22i30j0i22i30.5265j0j7&sourceid=chrome&ie=UTF-8
    https://www.google.com/search?q=connect+website+to+firebase&rlz=1C1GCEA_enHU992HU992&sxsrf=APq-WBs-JH-7V8-jdcDTPbvoAdQpOmR7eA%3A1649232040311&ei=qEhNYsfIEpGA9u8PxIKTuA4&ved=0ahUKEwjHvKiP_P72AhURgP0HHUTBBOcQ4dUDCA4&uact=5&oq=connect+website+to+firebase&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEMsBOgcIIxCwAxAnOgcIABBHELADOgYIIxAnEBM6BggAEBYQHjoICAAQDRAFEB5KBAhBGABKBAhGGABQ3wtY-hpg6xxoAXABeACAAW2IAeQGkgEDNy4ymAEAoAEByAEJwAEB&sclient=gws-wiz
    https://www.youtube.com/watch?v=zSGFGQgDKIo
  -->
  <body class="main-content">
    <header class="section sec1 header active" id="home">
      <div class="header-content">
        <div class="left-header">
          <div class="h-shape"></div>
          <div class="image">
            <img src="./img/face1.png" alt="Person" />
          </div>
        </div>
        <div class="right-header">
          <h1 class="name">
            Hello,
            <span class="adi">??di</span> vagyok<br />
            Junior Webfejleszt??
          </h1>
          <p>
            <span class="color">Kreat??v</span> Front-End <span class="color">Designer</span><br />
              22 ??ves vagyok, szombathelyi<br />
              Sokszor tal??lkozhattok velem kos??rp??ly??kon
              <br /><br />
              <span class="color">Legf??bb c??ljaim:</span> <br />
              M.E.R.N, Flutter, Python, SQL, PowerBI, ... [sokminden]
              <br /><br />
              <span class="color">Iskol??zotts??gommal</span> kapcsolatban a 2. oldalon megtal??lhatj??tok az inform??ci??kat 
          </p>
          <div class="btn-container">
            <a
              href="./download/Horvath_Adam_Oneletrajzok(CVs).zip"
              download="oneletrajz"
              class="main-btn"
            >
              <span class="btn-text">??n??letrajz let??lt??se</span>
              <span class="btn-icon"><i class="fas fa-download"></i></span>
            </a>
          </div>
          <!--
          <a href="geeksforgeeks.png" download="oneletrajz">
            <button type="button">??n??letrajz</button>
          </a>
          <a href="./download/Horvath_Adam_Oneletrajzok(CVs).zip" download="oneletrajz">
            <button type="button">??n??letrajz let??lt??se
              <span class="btn-icon"><i class="fas fa-download"></i></span>
            </button>
          </a>
          -->
        </div>
      </div>
      <!--<div class="navbar-trick"></div>-->
    </header>
    <main>
      <section class="section sec2" id="about">
        <div class="main-title">
          <h2>R<span>??</span>lam <span class="bg-text">R??lam</span></h2>
        </div>
        <div class="about-container">
          <div class="left-about">
            <h4>Tudnival??k</h4>
            <p>
            Egy <span class="color">kezd??</span> voln??k, aki sz??vesen elindulna a programoz??s szinte b??rmely ter??let??n,<br />
            ??gy els??k??nt a Front-End az ami megfogott, ??s ez??rt is szeretn??k jelentkezni erre a lehet??s??gre.<br />
            <br />
            Tal??n m??g az??rt is ez fogott meg, mivel l??tom magamban a <span class="color">kreativit??st</span>, meg mikor k??sz??lt ez a Portf??li??, akkor
            vizu??lisan egyb??l l??ttam, hogy mi hogyan v??ltozik meg. ??s ez a fajta <span class="color">vizualit??s</span> sz??momra fontos volt.
            Lehet, hogy nem vagyok a legt??k??letesebb, de igyekszem az lenni. 
            </p>
            <div class="btn-container">
              <a
                href="./download/Horvath_Adam_Oneletrajzok(CVs).zip"
                download="oneletrajz"
                class="main-btn"
              >
                <span class="btn-text">??n??letrajz let??lt??se</span>
                <span class="btn-icon"><i class="fas fa-download"></i></span>
              </a>
            </div>
          </div>
          <div class="right-about">
            <div class="about-item">
              <div class="abt-text">
                <p class="large-text">5+</p>
                <p class="small-text">
                  Elk??sz??lt <br />
                  Projekt
                </p>
              </div>
            </div>
            <div class="about-item">
              <div class="abt-text">
                <p class="large-text">1+</p>
                <p class="small-text">
                  ??v <br />
                  Tapasztalat
                </p>
              </div>
            </div>
            <div class="about-item">
              <div class="abt-text">
                <p class="large-text">10+</p>
                <p class="small-text">
                  El??gedett <br />
                  L??togat??
                </p>
              </div>
            </div>
            <div class="about-item">
              <div class="abt-text">
                <p class="large-text">20+</p>
                <p class="small-text">
                  L??togat??i <br />
                  ??rt??kel??s
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="about-stats">
          <h4 class="stat-title">Full-Stack (Front-End)</h4>
          <div class="progress-bars">
            <div class="progress-bar">
              <p class="prog-title">Kreativit??s</p>
              <div class="progress-con">
                <p class="prog-text">100%</p>
                <div class="progress">
                  <span class="creativity"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">Figma Design</p>
              <div class="progress-con">
                <p class="prog-text">75%</p>
                <div class="progress">
                  <span class="figma"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">html5</p>
              <div class="progress-con">
                <p class="prog-text">80%</p>
                <div class="progress">
                  <span class="html"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">CSS3</p>
              <div class="progress-con">
                <p class="prog-text">70%</p>
                <div class="progress">
                  <span class="css"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">JS</p>
              <div class="progress-con">
                <p class="prog-text">50%</p>
                <div class="progress">
                  <span class="js"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">React</p>
              <div class="progress-con">
                <p class="prog-text">20%</p>
                <div class="progress">
                  <span class="react"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">SQL</p>
              <div class="progress-con">
                <p class="prog-text">60%</p>
                <div class="progress">
                  <span class="sql"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">C++ ??s Java</p>
              <div class="progress-con">
                <p class="prog-text">10%</p>
                <div class="progress">
                  <span class="c-java"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="about-stats">
          <h4 class="stat-title">G??p??szet:</h4>
          <div class="progress-bars">
            <div class="progress-bar">
              <p class="prog-title">CAD-CAM tervez??s</p>
              <div class="progress-con">
                <p class="prog-text">80%</p>
                <div class="progress">
                  <span class="cad-cam"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">CNC Mar??s/Eszt.</p>
              <div class="progress-con">
                <p class="prog-text">40%</p>
                <div class="progress">
                  <span class="cnc"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">SolidEdge</p>
              <div class="progress-con">
                <p class="prog-text">80%</p>
                <div class="progress">
                  <span class="solidedge"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">EdgeCAM</p>
              <div class="progress-con">
                <p class="prog-text">75%</p>
                <div class="progress">
                  <span class="edgecam"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">Anyagv??laszt??s</p>
              <div class="progress-con">
                <p class="prog-text">70%</p>
                <div class="progress">
                  <span class="material"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">K??s v??laszt??s</p>
              <div class="progress-con">
                <p class="prog-text">75%</p>
                <div class="progress">
                  <span class="knife"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">CNC K??d ??r??s (k??zzel)</p>
              <div class="progress-con">
                <p class="prog-text">60%</p>
                <div class="progress">
                  <span class="cnc-code-hand"></span>
                </div>
              </div>
            </div>
            <div class="progress-bar">
              <p class="prog-title">CNC K??d ??r??s (g??ppel)</p>
              <div class="progress-con">
                <p class="prog-text">100%</p>
                <div class="progress">
                  <span class="cnc-code-machine"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h4 class="stat-timeline">Id??vonalam</h4>
        <div class="timeline">
        <div class="timeline-item">
            <div class="tl-icon6">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">... - 2007</p>
            <h5>Ovi: Gazdag Erzsi ??voda</h5>
            <p>
              Best ovi in the World :)
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon1">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">2007 - 2015</p>
            <h5>??ltal??nos iskola: Zr??nyi Ilona ??ltal??nos Iskola</h5>
            <p>
              Sok mindent tal??n nem kell mondanom, sz??momra ez az iskola volt a legjobb :)
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon2">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">2015 - 2019</p>
            <h5>K??z??piskola: VMSzC G??pipari ??s Informatikai Technikum</h5>
            <p>
              ??retts??gi -> Sz??m??t??g??pes Rendszerkarbantart??
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon3">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">2019 - 2020</p>
            <h5>Technikusi ??v: VMSzC G??pipari ??s Informatikai Technikum</h5>
            <p>
            Technikusi vizsga -> CAD - CAM Informatikus<br/>
            [Iskol??ra ugyan csak nem lehet panaszom, a legjobb tan??rokat kaptam]
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon4">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">2020 - napjainkig</p>
            <h5>Egyetem: ELTE Savaria Egyetemi K??zpont</h5>
            <p>
              Jelenleg Programtervez?? Informatikus hallgat?? vagyok, 
              rem??lhet??leg majd az informatika valamelyik ??g??n tudok majd elhelyezkedni
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon5">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">... - napjainkig</p>
            <h5>??sszefoglalva</h5>
            <p>
              Mindegyik iskol??mmal, tan??rommal meg vagyok el??gedve
              Sz??val nagyon ??r??l??k, hogy ilyen helyekre j??rhattam / j??rhatom :)
            </p>
          </div>
          
        </div>
      </section>
      <section class="section sec3" id="portfolio">
        <div class="main-title">
          <h2>
            Portf<span>??</span>li<span>??</span>m
            <span class="bg-text">Portf??li??m</span>
          </h2>
        </div>
        <p class="port-text">Eddigi munk??im</p>
        <div class="portfolios">
          <div class="portfolio-item">
            <div class="image">
              <img src="./img/pong.png" alt="" />
            </div>
            <div class="hover-items">
              <h3>Projekt forr??sa(i)</h3>
              <div class="icons">
                <a
                  href="https://oradam.web.elte.hu/web2/index.php"
                  class="icon"
                >
                  <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                  <lord-icon
                    src="https://cdn.lordicon.com/snvfoxut.json"
                    trigger="hover"
                    colors="outline:#121331,primary:#16c72e,secondary:#f24c00"
                    style="width: 50px; height: 50px"
                  >
                  </lord-icon>
                </a>
                <a href="https://github.com/JAM5BOCsAdi/web2.git" class="icon">
                  <i class="fab fa-github"></i>
                </a>
                <!--
                <a href="#" class="icon">
                  <i class="fab fa-youtube"></i>
                </a>
                -->
              </div>
            </div>
          </div>
          <div class="portfolio-item">
            <div class="image">
              <img src="./img/gyumolcs.png" alt="" />
            </div>
            <div class="hover-items">
              <h3>Projekt forr??sa(i)</h3>
              <div class="icons">
                <a
                  href="https://oradam.web.elte.hu/Web1_Beadand%c3%b3_JAM5BO/html_css/"
                  class="icon"
                >
                  <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                  <lord-icon
                    src="https://cdn.lordicon.com/snvfoxut.json"
                    trigger="hover"
                    colors="outline:#121331,primary:#16c72e,secondary:#f24c00"
                    style="width: 50px; height: 50px"
                  >
                  </lord-icon>
                </a>
                <!--
                  <a href="#" class="icon">
                  <i class="fab fa-github"></i>
                </a>
                <a href="#" class="icon">
                  <i class="fab fa-behance"></i>
                </a>
                <a href="#" class="icon">
                  <i class="fab fa-youtube"></i>
                </a>
                -->
              </div>
            </div>
          </div>
          <div class="portfolio-item">
            <div class="image">
              <img src="./img/rubik.png" alt="" />
            </div>
            <div class="hover-items">
              <h3>Projekt forr??sa(i)</h3>
              <div class="icons">
                <a
                  href="https://oradam.web.elte.hu/Horv%c3%a1th_%c3%81d%c3%a1m_JAM5BO_Rubik/"
                  class="icon"
                >
                  <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                  <lord-icon
                    src="https://cdn.lordicon.com/snvfoxut.json"
                    trigger="hover"
                    colors="outline:#121331,primary:#16c72e,secondary:#f24c00"
                    style="width: 50px; height: 50px"
                  >
                  </lord-icon>
                </a>
                <!--
                  <a href="#" class="icon">
                  <i class="fab fa-github"></i>
                </a>
                <a href="#" class="icon">
                  <i class="fab fa-behance"></i>
                </a>
                <a href="#" class="icon">
                  <i class="fab fa-youtube"></i>
                </a>
                -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section sec4" id="blogs">
        <div class="main-title">
          <h2>
            Bl<span>o</span>g<span>o</span>k
            <span class="bg-text">Blogok</span>
          </h2>
        </div>
        <div class="blogs">
          <div class="blog">
            <img src="./img/blog1.jpg" alt="blog1" />
            <div class="blog-text">
              <h4>
                <a href="https://attila.gludovatz.hu/blog?page=3"
                  >Laravel 5.7 (??s 6, 7, 8, ...) telep??t??se</a
                >
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut
                consequuntur asperiores officia voluptatum sit soluta,
              </p>
            </div>
          </div>
          <div class="blog">
            <img src="./img/blog2.jpeg" alt="blog2" />
            <div class="blog-text">
              <h4>
                <a
                  href="https://attila.gludovatz.hu/posts/laravel-routing-utvonalvalasztas-1-resz"
                  >Laravel Routing - ??tvonalv??laszt??s (1. r??sz)</a
                >
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut
                consequuntur asperiores officia voluptatum sit soluta,
              </p>
            </div>
          </div>
          <div class="blog">
            <img src="./img/blog3.png" alt="blog3" />
            <div class="blog-text">
              <h4>
                <a
                  href="https://attila.gludovatz.hu/posts/laravel-routing-utvonalvalasztas-2-resz"
                  >Laravel Routing - ??tvonalv??laszt??s (2. r??sz)</a
                >
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut
                consequuntur asperiores officia voluptatum sit soluta,
              </p>
            </div>
          </div>
          <div class="blog">
            <img src="./img/blog4.png" alt="blog4" />
            <div class="blog-text">
              <h4>
                <a
                  href="https://attila.gludovatz.hu/posts/laravel-routing-utvonalvalasztas-3-resz"
                  >Laravel Routing - ??tvonalv??laszt??s (3. r??sz)</a
                >
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut
                consequuntur asperiores officia voluptatum sit soluta,
              </p>
            </div>
          </div>
          <div class="blog">
            <img src="./img/blog5.png" alt="blog5" />
            <div class="blog-text">
              <h4>
                <a
                  href="https://attila.gludovatz.hu/posts/laravel-routing-utvonalvalasztas-4-resz"
                  >Laravel Routing - ??tvonalv??laszt??s (4. r??sz)</a
                >
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut
                consequuntur asperiores officia voluptatum sit soluta,
              </p>
            </div>
          </div>
          <div class="blog">
            <img src="./img/blog6.png" alt="blog6" />
            <div class="blog-text">
              <h4>
                <a
                  href="https://attila.gludovatz.hu/posts/laravel-projektek-clone-ozasa-a-github-rol"
                  >Laravel projektek clone-oz??sa a Github-r??l</a
                >
              </h4>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut
                consequuntur asperiores officia voluptatum sit soluta,
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="section sec5" id="contact">
        <div class="main-title">
          <h2>
            El<span>??</span>rhet<span>??</span>s<span>??</span>geim
            <span class="bg-text">El??rhet??s??geim</span>
          </h2>
        </div>
        <div class="contact-content-con">
          <div class="left-contact">
            <h4>Itt el??rhet engem</h4>
            <p>
              Az al??bbi adatok, linkek [Facebook, ...] alapj??n el??rhettek, 
              vagy pedig a mez??k kit??lt??se ut??n az <span class="color">"Elk??ld"</span> gomb megnyom??s??val
              <br />
              Ha esetleg az <span class="color">??rdekl??d??st felkeltettem</span>, akkor nyugodtan h??vjatok/??rjatok, 
              ??s m??g <span class="color">t??bb inform??ci??t</span> tudok mondani a jelen tud??somr??l
            </p>
            <div class="contact-info">
              <div class="contact-item">
                <div class="icon">
                  <i class="fas fa-map-marker-alt"></i>
                  Elhelyezked??s:
                </div>
                <p>
                  <span>Szombathely</span>
                </p>
              </div>
              <div class="contact-item">
                <div class="icon">
                  <i class="fas fa-envelope"></i>
                  <span>Email:</span>
                </div>
                <p>
                  <span>oradam86@gmail.com</span>
                </p>
              </div>
              <div class="contact-item">
                <div class="icon">
                  <i class="fas fa-user-graduate"></i>
                  <span>Tanulm??nyaim:</span>
                </div>
                <p>
                  <span>ELTE SEK</span>
                </p>
              </div>
              <div class="contact-item">
                <div class="icon">
                  <i class="fas fa-phone-alt"></i>
                  <span>Mobil:</span>
                </div>
                <p>
                  <span>06/30-2017316</span>
                </p>
              </div>
              <div class="contact-item">
                <div class="icon">
                  <i class="fas fa-language"></i>
                  <span>Besz??lt nyelvek:</span>
                </div>
                <p>
                  <span>Magyar, Angol</span>
                </p>
              </div>
            </div>
            <div class="contact-icons">
              <div class="contact-icon">
                <a href="https://www.facebook.com/profile.php?id=100009870428509" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/oradam86/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://github.com/JAM5BOCsAdi" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCYGlVtACi_4kXvJIvf7Xaqg" target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="right-contact">
            <!--action="mailto:jam5bo@inf.elte.hu"-->
            <form
              action="connection.php"
              method="post"
              id="contact-form"
              class="contact-form"
            >
              <span class="error">K??telez??en kit??ltend??</span>
              <div class="input-control i-c-2">
                <input
                  type="text"
                  placeholder="N??v... [Max 30 karakter]"
                  id="name"
                  name="name"
                  maxlength="30"
                  required
                />
                <input
                  type="email"
                  placeholder="E-mail... [Max 30 karakter]"
                  id="email"
                  name="email"
                  maxlength="30"
                  required
                />
              </div>
              <div class="input-control">
                <input
                  type="text"
                  placeholder="T??rgy... [Max 20 karakter]"
                  id="subject"
                  name="subject"
                  maxlength="20"
                  required
                />
              </div>
              <div class="input-control">
                <textarea
                  id="textarea"
                  name="textarea"
                  placeholder="Megjegyz??s... [Max 500 karakter]"
                  cols="15"
                  rows="8"
                  maxlength="500"
                ></textarea>
              </div>
              <div class="submit-reset-btn">
                <div class="main-btn-reset" onclick="myFunctionReset()">
                  <span class="btn-text">T??r??l</span>
                  <span class="btn-icon">
                    <i class="far fa-arrow-alt-circle-left"></i>
                    <!--<i class="fas fa-download"></i>-->
                  </span>
                </div>
                <div class="main-btn-submit" onclick="myFunctionSubmit()">
                  <span class="btn-text">Elk??ld</span>
                  <span class="btn-icon">
                    <i class="far fa-arrow-alt-circle-right"></i>
                    <!--<i class="fas fa-download"></i>-->
                  </span>
                </div>
              </div>
              <div class="admin-container">
                <a href="login.php" class="admin-button" id="admin-button"
                  >Admin</a
                >
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
    <div class="controls">
      <div class="control active active-btn" data-id="home">
        <i class="fas fa-home"></i>
      </div>
      <div class="control active" data-id="about">
        <i class="fas fa-user"></i>
      </div>
      <div class="control active" data-id="portfolio">
        <i class="fas fa-briefcase"></i>
      </div>
      <div class="control active" data-id="blogs">
        <i class="fas fa-newspaper"></i>
      </div>
      <div class="control active" data-id="contact">
        <i class="fas fa-envelope-open"></i>
      </div>
    </div>
    <div class="theme-btn active">
      <i class="fas fa-adjust"></i>
    </div>
    <script src="./app.js"></script>
    <?php 
      if(isset($_SESSION['response'])){

      
    ?>
    <script>
      
      window.onload = function(){
        //console.log("K??sz");
        setTimeout(function(){
          const respons = '<?php echo $_SESSION['response']; ?>';
          alert(respons);
          
          console.log("K??sz");
        }, 1000);
      } 
    </script>

    <?php 
      $_SESSION['response'] = null;
      }
    ?>

  </body>
</html>
