<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>OverTV - Helpcenter</title>
    <link href="assets/image/icon-logo1.png" rel="icon" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link href="assets/css/channel.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/helpcenter.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Poppins"
    />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="assets/css/swipercss.min.css" />
  </head>
  <script
    src="https://challenges.cloudflare.com/turnstile/v0/api.js"
    defer
  ></script>
  <body>
    <!-- ======= Header ======= -->
    <?php
      include 'common/header.php';
      ?>
    <!-- End Header -->
    <div class="wrapper">
      <div class="hero-helpcenter">
        <div class="container">
          <div class="helpcenter-content wow fadeInUp" data-wow-delay="0.1s">
            <h2 data-i18n="how_can_we_help_title">How can we help?</h2>
            <form>
              <input type="text" name="search" placeholder="Pesquisa" />
            </form>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="video-section">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 data-i18n="help_needed_title">Precisa de ajuda?</h1>
            <p class="mx-wd" data-i18n="help_description">
              Clique em um tópico abaixo para começar, rever recursos e fluxos
              de trabalho ou solucionar um problema.
            </p>
          </div>
        </div>
        <div class="help-content">
          <div class="help-section-1 wow fadeInUp" data-wow-delay="0.1s">
            <h3 data-i18n="help_topics_title">Help Topics</h3>
            <div class="help-topic">
              <div class="item">
                <a href="helpcenter/general.php"
                  ><span><img src="assets/svg/general-icon.svg" alt="" /></span
                  ><span data-i18n="general_topic">General</span></a
                >
              </div>
              <div class="item">
                <a href="helpcenter/settings.php"
                  ><span><img src="assets/svg/setting-icon.svg" alt="" /></span
                  ><span data-i18n="settings_topic">Settings</span></a
                >
              </div>
              <div class="item">
                <a href="helpcenter/accounts.php"
                  ><span
                    ><img src="assets/svg/accounts-icon.svg" alt="" /></span
                  ><span data-i18n="account_topic">Account</span></a
                >
              </div>
              <div class="item">
                <a href="helpcenter/digital-signage.php"
                  ><span
                    ><img src="assets/svg/digital-signage.svg" alt="" /></span
                  ><span data-i18n="digital_signage_topic"
                    >Digital Signage</span
                  ></a
                >
              </div>
              <div class="item">
                <a href="helpcenter/content.php"
                  ><span><img src="assets/svg/content.svg" alt="" /></span
                  ><span data-i18n="content_topic">Content</span></a
                >
              </div>
              <div class="item">
                <a href="helpcenter/advertising.php"
                  ><span><img src="assets/svg/advertising.svg" alt="" /></span
                  ><span data-i18n="advertising_topic">Advertising</span></a
                >
              </div>
            </div>
          </div>
          <div class="popular-articles wow fadeInUp" data-wow-delay="0.1s">
            <h3 data-i18n="popular_articles_title">Popular Articles</h3>
            <ul>
              <li data-i18n="article_1">
                How to Use the Carousel to Add an Image Slideshow to Your
                Startup Template
              </li>
              <li data-i18n="article_2">
                How to Customize WooCommerce Email Templates Using a Postcards
                Email Template
              </li>
              <li data-i18n="article_3">
                How to Upload Your Startup Website to GitHub Pages
              </li>
              <li data-i18n="article_4">
                How to Add a Page Scroll Progress Bar at the Top of Your Startup
                Webpage
              </li>
              <li data-i18n="article_5">
                How to Send a Postcards Email Template with Gmail
              </li>
            </ul>
            <h3 class="support-text" data-i18n="need_support_title">
              Need Support?
            </h3>
            <ul>
              <li data-i18n="support_description">
                Can't find the answer you're looking for? Don't worry we're here
                to help!
              </li>
            </ul>
            <button data-i18n="contact_support_button">Contact Support</button>
          </div>
        </div>
        <?php
      include 'common/footer.php';
      ?>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
      var swiper = new Swiper(".text-slider", {
        slidesPerView: 4,
        spaceBetween: 10,

        speed: 3000,
        autoplay: {
          delay: 0,
          // reverseDirection: true,
        },

        loop: true,
        equalHeight: true,

        allowTouchMove: false,
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          2000: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
      });

      var swiper = new Swiper(".text-slider2", {
        slidesPerView: 3,
        spaceBetween: 10,

        speed: 3000,
        autoplay: {
          delay: 0,
          reverseDirection: true,
        },

        loop: true,

        allowTouchMove: false,
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          2000: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
        },
      });

      const items = document.querySelectorAll(".accordion button");

      function toggleAccordion() {
        const itemToggle = this.getAttribute("aria-expanded");

        for (i = 0; i < items.length; i++) {
          items[i].setAttribute("aria-expanded", "false");
        }

        if (itemToggle == "false") {
          this.setAttribute("aria-expanded", "true");
        }
      }

      items.forEach((item) => item.addEventListener("click", toggleAccordion));
    </script>
    <script>
      function scrollToTarget(targetId) {
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({ behavior: "smooth" });
        }
      }
    </script>
    <script>
      document
        .getElementById("contact-form")
        .addEventListener("submit", function (event) {
          event.preventDefault();
          var captcha = document.getElementById("recaptcha");
          var response = grecaptcha.getResponse();

          if (response.length === 0) {
            var errorMsg = document.querySelector(".msg-error");
            if (errorMsg) {
              errorMsg.textContent = "reCAPTCHA is mandatory";
            }
            if (!captcha.classList.contains("error")) {
              captcha.classList.add("error");
            }
          } else {
            var errorMsg = document.querySelector(".msg-error");
            if (errorMsg) {
              errorMsg.textContent = "";
            }
            if (captcha.classList.contains("error")) {
              captcha.classList.remove("error");
            }
            alert("reCAPTCHA marked");
          }
        });
    </script>
    <!-- Start of overtv Zendesk Widget script -->
    <script
      id="ze-snippet"
      src="https://static.zdassets.com/ekr/snippet.js?key=76ef79a5-aae8-4af0-9ca1-a346285c8ceb"
    ></script>
    <!-- End of overtv Zendesk Widget script -->
  </body>
</html>
