<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3Chain</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
	  <link rel="stylesheet" href="scss/styles.scss"/>
	  <link rel="stylesheet" href="css/animation.css"/>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
      integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    
    <!-- Header-->
    <header class="header">

    <!-- User Types -->
    <div class="user-types">
        <ul class="list list--inline">
            <li class="list__item text text--verysmall">For Individuals</li>
            <li class="list__item text text--verysmall">For Businesses</li>
            <li class="list__item text text--verysmall">For Universities</li>
            <li class="list__item text text--verysmall">For Governments</li>
        </ul>
    </div>

      <!-- Top Header -->
      <div class="header__top">
        <div class="logo">
          <img style="max-height: 40px;"src="Image_used\landing_page\logo.png" alt="3Chain brand logo" />
          <span class="text text--medium">3Chain</span>
        </div>
        <nav>
          <ul class="list list--inline">
            <li class="list__item text text--small text--regular">Get Started</li>
            <li class="list__item text text--small text--regular">Features</li>
            <li class="list__item text text--small text--regular">Plans</li>
            <li class="list__item text text--small text--regular">About</li>
            <li class="list__item text text--small text--regular">Contact</li>
          </ul>
          <button class="btn2 btn--link text text--small text--medium">Login</button>
          <span class="vertical-line"></span>
          <button class="btn2 btn--accent text--small text--medium">Register For Free</button>
        </nav>
      </div>
      <!-- Header Body -->
      <div class="header__body">
        <div class="grid grid--1x2 grid--centered grid-gap--small">
          <div class="value-proposition">
            <!-- <div class="badge-container">
              <span class="badge badge--dark text--small">75% Save</span>
              <span class="text text--small text--regular text--white">For the Black Friday weekend</span>
            </div> -->
            <!-- <h1 class="value-proposition__title">3Chain</h1> -->
            <h1 class="value-proposition__title ">
                3Chain
                <span class="text-switcher text text--small" data-hold-time="1000" data-switch-content='[ " - Web3 ", " - Blockchain "," - FinTech "]'></span>
            </h1>
            <p class="text text--small text--regular">Explore the Future of Learning. Immerse yourself in a dynamic world of blockchain education. Discover, Learn, and Master Web3 technologies with interactive challenges, AI-guided assistance, and a vibrant community. Join us in shaping the digital landscape of tomorrow.</p>
            <button class="value-proposition__button btn btn--flex btn--accent">
              <span class="text--standart text--medium">Start Learning</span>
              <div class="chiron-icon-container">
                <img src="images/chevron-right.svg" alt="Right Icon" />
              </div>
            </button>
          </div>
          <img src="Image_used/landing_page/hero_image_2.png" alt="Learn illustration" class="btc-illustration" data-rellax-horizontal-speed="-2" data-rellax-vertical-scroll-axis="x"/>
        </div>
      </div>
      <img class="background-item-1" src="images/background-item-1.svg" alt="" />
      <img class="background-item-2" src="images/background-item-2.svg" alt="" />
    </header>


    <!--Get started -->
    <section class="get-started" id="get-started">
      <h2 class="section-title">Get Started</h2>
        <div class="card-container">
          <div class="card">
            <a href="#!" class="front" >
              <p class="text title--small">Step 1: Register & Verify Account.</p>
            </a>
            <div class="back">
              <div>
                <p class="text text--smallcloser">Begin your journey into the world of 3Chain by creating your personalized account or logging in to unlock exclusive access to our immersive blockchain learning platform.</p>
                <button class="value-proposition__button btn btn--accent">Start Learning</button>
              </div>
            </div>
          </div>
          <div class="card">
            <a href="#!" class="front" >
            <p class="text title--small">Step 2: Explore Blockchain Concepts.</p>
            </a>
            <div class="back">
              <div>
                <p class="text text--smallcloser ">Navigate through our interactive modules and unlock the secrets of decentralized networks, smart contracts, and token economies. Engage with cutting-edge content designed to expand your understanding and ignite your curiosity.</p>
                <button class="value-proposition__button btn btn--accent">Start Learning</button>
              </div>
            </div>
          </div>
          <div class="card">
            <a href="#!" class="front" >
            <p class="text title--small">Step 3: Earn Certificate.</p>
            </a>
            <div class="back">
              <div>
                <p class="text text--smallcloser">Validate your mastery of Web3 and blockchain concepts by completing our comprehensive learning modules. Achieve proficiency and unlock certification badges that showcase your expertise to the world. Empower yourself with credentials recognized across industries and join the ranks of blockchain innovators.</p>
                <button class="value-proposition__button btn btn--accent">Start Learning</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        <
    </section>

    <!-- About US -->
    <section class="about-us" id="about-us">
      <div class="grid grid--1x2 grid--centered">
        <img id="gpu-illustration" src="Image_used\landing_page\get_started_background.png" alt="Illustration of gpu"  data-rellax-speed="3" data-rellax-percentage="0.5" />
        <div class="banner">
          <h2 class="banner__title">About Us</h2>
          <p class="banner__text text text--smallcloser text--regular text--muted">Our mission is to empower individuals with the tools and knowledge needed for financial well-being. We are passionate advocates for financial literacy, recognizing it as the cornerstone for making informed and impactful financial decisions. </p>
            
          <p class="banner__text text text--smallcloser text--regular text--muted">At 3Chain, we strive to cultivate financial awareness, skills, and attitudes that lead to a lifetime of sound financial choices. Our goal is to equip individuals with the capabilities to navigate their financial journeys successfully, ensuring sustained improvements in their quality of life.</p>
          <!-- <button class="btn btn--accent">
            <span class="text--standart text--medium">Register For Free</span>
          </button> -->
        </div>
      </div>
      <img class="background-item-3" src="images/background-item-3.svg" alt="" />
      <img class="background-item-4" src="images/background-item-4.svg" alt="" />
      <img class="background-item-5" src="images/background-item-5.svg" alt="" />
    </section>

    <!-- Achievements-->
    <section class="about-us-2">
      <!-- Media Objects -->
      <div class="media-container" id="triggerSection">
        <div class="media">
          <div class="icon-container">
            <svg class="media-icon">
              <use xlink:href="images/media-icons-sprite.svg#person"></use>
            </svg>
          </div>
          <div>
            <h2 id="count-individual-learners">1</h2>
            <p class="text text--small text--regular text--muted">Individual Learners</p>
          </div>
        </div>
        <div class="media">
          <div class="icon-container">
            <svg class="media-icon">
              <use xlink:href="images/media-icons-sprite.svg#bar-chart"></use>
            </svg>
          </div>
          <div>
            <h2 id="count-universities-partners">1</h2>
            <p class="text text--small text--regular text--muted">Universities Partners</p>
          </div>
        </div>
        <div class="media">
          <div class="icon-container">
            <svg class="media-icon">
              <use xlink:href="images/media-icons-sprite.svg#earth"></use>
            </svg>
          </div>
          <div>
            <h2 id="count-countries">1</h2>
            <p class="text text--small text--regular text--muted">Countries Engaged</p>
          </div>
        </div>
      </div>
      
      <img class="background-item-3" src="images/background-item-3.svg" alt="" />
      <img class="background-item-4" src="images/background-item-4.svg" alt="" />
      <img class="background-item-5" src="images/background-item-5.svg" alt="" />
    </section>

    <!-- Features -->
    <section class="our-features" id="our-features">
      <h2>Our Features</h2>

      <div class="grid grid--1x2 grid--centered banner-bottom-margin">
        <div class="banner banner--left">
          <h2 class="banner__title">Interactive Learning</h2>
          <p class="banner__text text text--small text--regular text--muted">Engage actively with challenges to reinforce learning and explore complex topics in Web3 and Blockchain at your own pace.</p>
          <button class="btn btn--accent">
            <span class="text--standart text--medium">Discover</span>
          </button>
        </div>
        <img src="Image_used\landing_page\feature-1.png" alt="Interactive Learning" style="width: 80%"/>
      </div>

      <div class="grid grid--1x2 grid--centered banner-bottom-margin">
        <img src="Image_used\landing_page\feature-2.png" alt="Currency statistics" style="width: 80%"/>
        <div class="banner">
          <h2 class="banner__title">AI-Powered Assistance</h2>
          <p class="banner__text text text--small text--regular text--muted">Get personalized support and real-time feedback from our AI assistant.</p>
          <button class="btn btn--accent">
            <span class="text--standart text--medium">Discover</span>
          </button>
        </div>
      </div>

      <div class="grid grid--1x2 grid--centered">
        <div class="banner banner--left">
          <h2 class="banner__title">Immersive Simulation</h2>
          <p class="banner__text text text--small text--regular text--muted">Immerse yourself in a risk-free environment, engaging with Web3 and Blockchain technologies, while enhancing your decision-making skills through the integration of Virtual Reality (VR).</p>
          <button class="btn btn--accent">
            <span class="text--standart text--medium">Learn More</span>
          </button>
        </div>
        <img src="Image_used\landing_page\feature-3.png" alt="Coin tables"  style="width: 100%"/>
      </div>

      <img class="background-item-6" src="images/background-item-6.svg" alt="" />
      <img class="background-item-7" src="images/background-item-7.svg" alt="" />

      <div class="grid grid--1x2 grid--centered banner-bottom-margin">
        <img src="images\btc-illustration.svg" alt="Currency statistics" style="width: 80%"/>
        <div class="banner">
          <h2 class="banner__title">Community Engagement</h2>
          <p class="banner__text text text--small text--regular text--muted">Connect with other learners and experts through discussion forums fostering collaboration and knowledge sharing within our vibrant community.</p>
          <button class="btn btn--accent">
            <span class="text--standart text--medium">Discover</span>
          </button>
        </div>
        
      </div>
    </section>

    

    <!-- Pricing Plan -->
    <section class="pricing-plan-container" id="pricing-plan-container">
      <h1 >Choose The Plan</h1>
      <div class="pricing">
        <div class="plan">
          <h2 class="text title--small">Basic Membership</h2>
          <div class="text text--medium text--regular">Free</div>
          <ul class="features">
            <li><i class="fas fa-check-circle"></i> 3 Free Challenges</li>
            <li><i class="fas fa-times-circle"></i> Limited AI-Assistance</li>
            <li><i class="fas fa-times-circle"></i> No priority support</li>
          </ul>
          <button class="value-proposition__button btn btn--accent basic-button">Discover</button>
          <p>Start learning now</p>
        </div>
        <div class="plan popular">
          <span>Most Popular</span>
          <h2 class="text title--small">Premium Monthly</h2>
          <div class="text text--medium text--regular">RM59/month</div>
          <ul class="features">
            <li><i class="fas fa-check-circle"></i> Unlimited Challenges</li>
            <li><i class="fas fa-check-circle"></i> Unlimited AI-Assistance</li>
            <li><i class="fas fa-check-circle"></i> Email Support</li>
          </ul>
          <button class="value-proposition__button btn btn--accent basic-button">Start 2-day Trial</button>
          <p class="feature-advantage">Cancel anytime</p>
        </div>
        <div class="plan">
          <h2 class="text title--small">Premium Annual</h2>
          <div class="text text--medium text--regular">RM588/year</div>
          <ul class="features">
            <li><i class="fas fa-check-circle"></i> All in monthly plan</li>
            <li><i class="fas fa-check-circle"></i> Certification</li>
            <li><i class="fas fa-check-circle"></i> Access to Forum</li>
          </ul>
          <button class="value-proposition__button btn btn--accent basic-button">Get VIP Access</button>
          <p>7-day money-back guarantee</p>
        </div>
      </div>
    </section>



    <!-- Start learning -->
    <section class="start-learning">
      <div class="learning-container">
        <div class="learning-container__header">
          <h3 class="learning-container__header__title">Start learning now</h3>
          <p class="learning-container__header__description text text--small text--regular">Join now with 3Chain to get the latest news and start learning now</p>
        </div>
        <div class="learning-container__subscribe">
          <input type="text" placeholder="Enter your email" />
          <button class="btn btn--white">Subscribe</button>
        </div>
        <img class="background-item-8" src="images/background-item-8.svg" alt="" />
        <img class="background-item-9" src="images/background-item-9.svg" alt="" />
      </div>
      <img class="background-item-10" src="images/background-item-10.svg" alt="" />
      <img class="background-item-11" src="images/background-item-11.svg" alt="" />
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer__top">
        <div class="footer__top__logo">
          <img src="Image_used\landing_page\logo.png" alt="3Chain brand logo" />
          <span class="text text--medium">3Chain</span>
        </div>
        <div class="footer__top__menu">
          <nav class="nav">
            <p class="nav__title text text--medium">QUICK LINK</p>
            <ul class="nav__list">
              <li class="nav__list__item text text--small text--regular">Home</li>
              <li class="nav__list__item text text--small text--regular">About</li>
              <li class="nav__list__item text text--small text--regular">Team</li>
              <li class="nav__list__item text text--small text--regular">Careers</li>
              <li class="nav__list__item text text--small text--regular">Contact</li>
            </ul>
          </nav>
        </div>
        
        <div class="footer__top__menu">
          <nav class="nav">
            <p class="nav__title text text--medium">LEARN</p>
            <ul class="nav__list">
              <li class="nav__list__item text text--small text--regular">Get Started</li>
              <li class="nav__list__item text text--small text--regular">Features</li>
              <li class="nav__list__item text text--small text--regular">Pricing</li>
              <li class="nav__list__item text text--small text--regular">Login</li>
              <li class="nav__list__item text text--small text--regular">Register</li>
            </ul>
          </nav>
        </div>

        <div class="footer__top__menu">
          <nav class="nav">
            <p class="nav__title text text--medium">LGEAL</p>
            <ul class="nav__list">
              <li class="nav__list__item text text--small text--regular">Privacy</li>
              <li class="nav__list__item text text--small text--regular">Terms</li>
              <li class="nav__list__item text text--small text--regular">Security</li>
            </ul>
          </nav>
        </div>

        <div class="footer__top__payment-systems">
          <p class="payment-systems__title">We accept following payment systems</p>
          <div class="payment-systems__payments">
            <div class="payment-icon-container">
              <img src="images/visa.svg" alt="Visa Card" />
            </div>
            <div class="payment-icon-container">
              <img src="images/mastercard.svg" alt="Master Card" />
            </div>
            <div class="payment-icon-container">
              <img src="images/bitcoin.svg" alt="Bitcoin" />
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="footer__bottom__copyright text text--small text--regular">&copy;2024 3Chain. All rights reserved.</div>
        <div class="footer__bottom__social-media">
          <svg class="social-icon">
            <use xlink:href="images/social-media-sprite.svg#facebook"></use>
          </svg>
          <svg class="social-icon">
            <use xlink:href="images/social-media-sprite.svg#instagram"></use>
          </svg>
          <svg class="social-icon">
            <use xlink:href="images/social-media-sprite.svg#youtube"></use>
          </svg>
          <svg class="social-icon">
            <use xlink:href="images/social-media-sprite.svg#twitter"></use>
          </svg>
          <svg class="social-icon">
            <use xlink:href="images/social-media-sprite.svg#linkedin"></use>
          </svg>
        </div>
      </div>
    </footer>
    
    <script>
      new Rellax(".btc-illustration", {
        horizontal: true,
      });
      new Rellax("#gpu-illustration", {
        horizontal: true,
      });

    </script>
  </body>
</html>
