<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3Chain.ai</title>
    <link rel="shortcut icon" type="image/png" href="Image_used\landing_page\logo.png" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
	  <link rel="stylesheet" href="scss/styles.scss"/>
	  <link rel="stylesheet" href="css/animation.css"/>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
      integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous">
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    
    <!-- Header-->
    <?php include 'includes/header.php';?>

    <!-- Hero -->
    <?php include 'includes/hero.php' ?>

    <!--Get started -->
    <?php include 'includes/get-started.php' ?>

    <!-- About US -->
    <?php include 'includes/about-us.php' ?>

    <!-- Achievements-->
    <?php include 'includes/achievements.php' ?>

    <!-- Features -->
    <?php include 'includes/features.php' ?>
    

    <!-- Pricing Plan -->
    <?php include 'includes/pricing-plan.php' ?>



    <!-- Start learning -->
    <?php include 'includes/start-learning.php' ?>

    <!-- Footer -->
    <?php include 'includes/footer.php' ?>
    
    <script>
      new Rellax(".btc-illustration", {
        horizontal: true,
      });
      new Rellax("#gpu-illustration", {
        horizontal: true,
      });
      function redirectToLoginPage() {
        window.location.href = 'login.php';
      }

    </script>
  </body>
</html>
