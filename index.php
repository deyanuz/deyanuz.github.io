<?php include 'connections.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="logo1.png">
  <link rel="stylesheet" href="style.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Zunayed Khan</title>
</head>

<body>

  <header class="l-header">
    <nav class="nav bd-grid">
      <div class="nav__toggle" id="nav-toggle">
        <i class="bx bx-menu bx-sm"></i>
      </div>
      <div>
        <a href="#" class="nav__logo">Zunayed</a>
      </div>
      <div class="nav__menu" id="nav-menu">
        <div class="nav__close" id="nav-close">
          <i class="bx bx-x"></i>
        </div>

        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link active">HOME</a>
          </li>
          <li class="nav__item">
            <a href="#about" class="nav__link">ABOUT</a>
          </li>
          <li class="nav__item">
            <a href="#education" class="nav__link">EDUCATION</a>
          </li>
          <li class="nav__item">
            <a href="#skills" class="nav__link">SKILLS</a>
          </li>

          <li class="nav__item">
            <a href="#works" class="nav__link">WORK</a>
          </li>
          <li class="nav__item">
            <a href="#contact" class="nav__link">CONTACT</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="l-main">
    <section class="home" id="home">
      <div class="home__container bd-grid">
        <div class="home__data">
          <div class="home__img">
            <img src=<?php echo $data['image'] ?> />
          </div>
          <h1 class="home__title">
            <?php echo $data['user_name'] ?>
          </h1>
          <span class="home__profession">
            <?php echo $data['jobDescription'] ?>
          </span>
          <div class="home-social">

            <?php
            if ($data['facebook']) {
              ?>
              <a href=<?= $data['facebook'] ?> target="_blank" class="home__social-link"><i
                  class="bx bxl-facebook"></i></a>
              <?php
            }
            ?>
            <?php
            if ($data['twitter']) {
              ?>
              <a href=<?= $data['twitter'] ?> target="_blank" class="home__social-link"><i class="bx bxl-twitter"></i></a>
              <?php
            }
            ?>
            <?php
            if ($data['instagram']) {
              ?>
              <a href=<?= $data['instagram'] ?> target="_blank" class="home__social-link"><i
                  class="bx bxl-instagram"></i></a>
              <?php
            }
            ?>
            <?php
            if ($data['linkedin']) {
              ?>
              <a href=<?= $data['linkedin'] ?> target="_blank" class="home__social-link"><i
                  class="bx bxl-linkedin"></i></a>
              <?php
            }
            ?>
            <?php
            if ($data['github']) {
              ?>
              <a href=<?= $data['github'] ?> target="_blank" class="home__social-link"><i class="bx bxl-github"></i></a>
              <?php
            }
            ?>
            <?php
            if ($data['dribble']) {
              ?>
              <a href=<?= $data['dribble'] ?> target="_blank" class="home__social-link"><i class="bx bxl-dribbble"></i></a>
              <?php
            }
            ?>

          </div>
          <a download="" href="#" class="button home__button">Download CV</a>
        </div>
      </div>
    </section>

    <section class="about section" id="about">
      <span class="section-subtitle">MY INTRO</span>
      <h2 class="section-title">ABOUT ME</h2>
      <div class="about__container">
        <div class="about__data">
          <p class="about__description">
            <?= $dataAbout['description'] ?>
          </p>
          <img src=<?= $dataAbout['image'] ?> alt="" class="about__img" />
        </div>

        <div>
          <div class="about__information">
            <h3 class="about__information-title">Hobbies</h3>
            <?php
            if ($dataAbout['hobby1']) {
              ?>
              <div class="about__information-data">
                <i class="bx bx-camera about__information-icon"></i>
                <span>
                  <?= $dataAbout['hobby1'] ?>
                </span>
              </div>
              <?php
            }
            ?>
            <?php
            if ($dataAbout['hobby2']) {
              ?>
              <div class="about__information-data">
                <i class="bx bx-briefcase about__information-icon"></i>
                <span>
                  <?= $dataAbout['hobby2'] ?>
                </span>
              </div>
              <?php
            }
            ?>
            <?php
            if ($dataAbout['hobby2']) {
              ?>
              <div class="about__information-data">
                <i class="bx bx-pen about__information-icon"></i>
                <span>
                  <?= $dataAbout['hobby3'] ?>
                </span>
              </div>
              <?php
            }
            ?>
          </div>
          <div class="about__information">
            <h3 class="about__information-title">Achievements</h3>
            <?php
            if ($dataAbout['achievement1']) {
              ?>
              <div class="about__information-data">
                <i class="bx bx-medal about__information-icon"></i>
                <div>
                  <span class="about__information-subtitle">
                    <?= $dataAbout['achievement1'] ?>
                  </span>
                  <span class="about__information-subtitle-small">
                    <?= $dataAbout['achiNote1'] ?>
                  </span> <br>
                  <a href=<?= $dataAbout['achiLink1'] ?> class="link">View Cirtification</a>
                </div>
              </div>
              <?php
            }
            ?>
            <?php
            if ($dataAbout['achievement2']) {
              ?>
              <div class="about__information-data">
                <i class="bx bx-medal about__information-icon"></i>
                <div>
                  <span class="about__information-subtitle">
                    <?= $dataAbout['achievement2'] ?>
                  </span>
                  <span class="about__information-subtitle-small">
                    <?= $dataAbout['achiNote2'] ?>
                  </span><br>
                  <a href=<?= $dataAbout['achiLink2'] ?> class="link">View Cirtification</a>
                </div>
              </div>
              <?php
            }
            ?>
            <?php
            if ($dataAbout['achievement3']) {
              ?>
              <div class="about__information-data">
                <i class="bx bx-medal about__information-icon"></i>
                <div>
                  <span class="about__information-subtitle">
                    <?= $dataAbout['achievement3'] ?>
                  </span>
                  <span class="about__information-subtitle-small">
                    <?= $dataAbout['achiNote3'] ?>
                  </span><br>
                  <a href=<?= $dataAbout['achiLink3'] ?> class="link">View Cirtification</a>
                </div>
              </div>
              <?php
            }
            ?>


          </div>
        </div>
      </div>
    </section>

    <section class="education section" id="education">
      <p><br /></p>
      <span class="section-subtitle">QUALIFICATION</span>
      <h2 class="section-title">MY EDUCATION</h2>
      <div class="education__container bd-grid">

        <?php
        $index = 0;
        while (true) {
          $sqlEducation = "SELECT * FROM `education`WHERE `education`.`idx` = $index";
          $resultEducation = mysqli_query($conn, $sqlEducation);

          if (mysqli_num_rows($resultEducation) > 0) {
            $dataAbout = mysqli_fetch_assoc($resultEducation);
            ?>

            <div class="education__content">
              <div>
                <h3 class="education__year">
                  <?= $dataAbout['year'] ?>
                </h3>
                <span class="education__university">
                  <?= $dataAbout['uni'] ?>
                </span>
              </div>
              <div class="education__time">
                <span class="education__rounder"></span>
                <span class="education__line"></span>
              </div>
              <div>
                <h3 class="education__race">
                  <?= $dataAbout['race'] ?>
                </h3>
                <span class="education__speciality">
                  <?= $dataAbout['specialty'] ?>
                </span>
              </div>
            </div>

            <?php
          } else {
            break;
          }
          $index++;
        }
        ?>
      </div>
      <p><br /><br /><br /></p>
    </section>

    <section class="skills section" id="skills">
      <h2 class="section-title">MY EXPERTISE</h2>
      <div class="skills__container bd-grid">
        <div class="skills__content">
          <style>
            .s0 {
              width: 0%;
            }
          </style>
          <h3 class="skills__subtitle">FRONTEND</h3>

          <?php
          $sqlSkills = "SELECT * FROM `skills`WHERE `skills`.`f/b` = 'f'";
          $resultSkills = mysqli_query($conn, $sqlSkills);

          if (mysqli_num_rows($resultSkills) > 0) {
            while ($dataSkills = mysqli_fetch_assoc($resultSkills)) {
              ?>

              <div class="skills__data">
                <span class="skills__name">
                  <?= $dataSkills['name'] ?>
                </span>
                <span class="skills__number">
                  <?= $dataSkills['level'] . '%' ?>
                </span>
                <span class="skills__bar s0"></span>
              </div>
              <?php
            }
          }
          ?>
        </div>
        <div class="skills__content">
          <h3 class="skills__subtitle">BACKEND</h3>

          <?php
          $sqlSkills = "SELECT * FROM `skills`WHERE `skills`.`f/b` = 'b'";
          $resultSkills = mysqli_query($conn, $sqlSkills);

          if (mysqli_num_rows($resultSkills) > 0) {
            while ($dataSkills = mysqli_fetch_assoc($resultSkills)) {
              ?>

              <div class="skills__data">
                <span class="skills__name">
                  <?= $dataSkills['name'] ?>
                </span>
                <span class="skills__number">
                  <?= $dataSkills['level'] . '%' ?>
                </span>
                <span class="skills__bar s0"></span>
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
      <h2 class="section-title"><br />Things I'm skilled at</h2>
      <div class="forte__container bd-grid">
        <div class="forte__content">
          <i class="bx bx-code forte__icon"></i>
          <h3 class="forte__title">Web Design</h3>
          <p class="forte__description">
            Versatile web developer with expertise in HTML, CSS, JavaScript,
            and framework, dedicated to crafting efficient, user-friendly
            websites.
          </p>
        </div>
        <div class="forte__content">
          <i class="bx bx-server forte__icon"></i>
          <h3 class="forte__title">Backend Development</h3>
          <p class="forte__description">
            Versatile web developer with expertise in HTML, CSS, JavaScript,
            and framework, dedicated to crafting efficient, user-friendly
            websites.
          </p>
        </div>
        <div class="forte__content">
          <i class="bx bxl-android forte__icon"></i>
          <h3 class="forte__title">App Development</h3>
          <p class="forte__description">
            Versatile web developer with expertise in HTML, CSS, JavaScript,
            and framework, dedicated to crafting efficient, user-friendly
            websites.
          </p>
        </div>
        <div class="forte__content">
          <i class="bx bx-pencil forte__icon"></i>
          <h3 class="forte__title">Content Writing</h3>
          <p class="forte__description">
            Versatile web developer with expertise in HTML, CSS, JavaScript,
            and framework, dedicated to crafting efficient, user-friendly
            websites.
          </p>
        </div>
        <div class="forte__content">
          <i class="bx bx-data forte__icon"></i>
          <h3 class="forte__title">Database</h3>
          <p class="forte__description">
            Versatile web developer with expertise in HTML, CSS, JavaScript,
            and framework, dedicated to crafting efficient, user-friendly
            websites.
          </p>
        </div>
        <div class="forte__content">
          <i class="bx bx-brain forte__icon"></i>
          <h3 class="forte__title">Problem Solving</h3>
          <p class="forte__description">
            Versatile web developer with expertise in HTML, CSS, JavaScript,
            and framework, dedicated to crafting efficient, user-friendly
            websites.
          </p>
        </div>
      </div>
    </section>

    <section class="works section" id="works">
      <span class="section-subtitle">My Portfolio</span>
      <h2 class="section-title">Recent Works</h2>
      <div class="work__container bd-grid">
        <?php
        $index = 0;
        while (true) {
          $sqlWork = "SELECT * FROM `work`WHERE `work`.`idx` = $index";
          $resultWork = mysqli_query($conn, $sqlWork);

          if (mysqli_num_rows($resultWork) > 0) {
            $dataWork = mysqli_fetch_assoc($resultWork);
            ?>


            <div class="work__img">
              <img src=<?= $dataWork['image'] ?> alt="" />
              <div class="work__data">
                <a href=<?= $dataWork['link'] ?> target="_blank" class="work__link"><i class="bx bx-link-alt"></i></a>
                <span class="work__title">
                  <?= $dataWork['title'] ?>
                </span>
              </div>
            </div>
            <?php
          } else {
            break;
          }
          $index++;
        }
        ?>

      </div>
    </section>

    <section class="contact section" id="contact">
      <span class="section-subtitle">Contact Me</span>
      <h2 class="section-title">Get In Touch</h2>
      <div class="contact__container bd-grid">
        <form action="" class="contact__form">
          <div class="contact__inputs">
            <input type="text" placeholder="Name" class="contact__input" />
            <input type="mail" placeholder="Email" class="contact__input" />
          </div>
          <textarea name="" id="" cols="0" rows="10" placeholder="Message" class="contact__input"></textarea>
          <input type="submit" value="Send Message" class="button contact__button" />
        </form>
        <div>
          <div class="contact__info">
            <h3 class="contact__subtitle">Call Me</h3>
            <span class="contact__text">999-000-123</span>
          </div>
          <div class="contact__info">
            <h3 class="contact__subtitle">E-mail</h3>
            <span class="contact__text">zunayed2007046@stud.kuet.ac.bd</span>
            <span class="contact__text">zunayedkhanofficial@gmail.com</span>
          </div>
          <div class="contact__info">
            <h3 class="contact__subtitle">Location</h3>
            <span class="contact__text">KUET Road, Khulna</span>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer section">
    <div class="footer__container bd-grid">
      <h1 class="footer__title">Zunayed</h1>
      <p class="footer__description">
        I am Zunayed and this is my personal website. Thank you for visiting!
      </p>
      <p class="footer__copy">© Copyright ©2024 All rights reserved</p>
    </div>
  </footer>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="functions.js"></script>
</body>

</html>