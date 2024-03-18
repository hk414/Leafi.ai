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
    <div class="logo" style="cursor: pointer;" onclick="redirectToIndex()">
      <img style="max-height: 40px;" src="Image_used\landing_page\logo.png" alt="3Chain brand logo" />
      <span class="text text--small">leafi.ai</span>
    </div>
    <nav>
      <ul class="list list--inline">
        <li class="list__item text text--small text--regular" onclick="redirectToPage('index.php#get-started')">Get Started</li>
        <li class="list__item text text--small text--regular" onclick="redirectToPageAndScroll('index.php#about-us')">About</li>
        <li class="list__item text text--small text--regular" onclick="redirectToPageAndScroll('index.php#our-features')">Features</li>
        <li class="list__item text text--small text--regular" onclick="redirectToPageAndScroll('index.php#pricing-plan-container')">Plans</li>
        <li class="list__item text text--small text--regular" onclick="redirectToPageAndScroll('index.php#start-learning')">Contact</li>
      </ul>
      <button class="btn2 btn--link text text--small text--medium" onclick="window.location.href='login.php'">Login</button>
      <span class="vertical-line"></span>
      <button class="btn2 btn--accent text--small text--medium" onclick="window.location.href='register.php'">Register For Free</button>
    </nav>
  </div>
  <script>
    function redirectToIndex() {
      window.location.href = 'index.php';
    }
  </script>