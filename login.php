<?php
include 'database/connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = isset($_POST["emailaddress"]) ? $_POST["emailaddress"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars(strip_tags(trim($password)));

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_email"] = $row["email"];
            header("Location: user/html/index.php");
            exit();
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }

    $conn->close();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3Chain</title>
  <link rel="shortcut icon" type="image/png" href="user-assets/images/logos/logo.png" />
  <link rel="stylesheet" href="user-assets/css/styles.min.css" />
  <link rel="stylesheet" href="css/login-register.css" />
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script>
      function redirectToPageAndScroll(url) {
        window.location.href = url;

        // Extract the section ID from the URL (assumes it's after the '#')
        var sectionId = url.split('#')[1];

        // Scroll to the section
        var section = document.getElementById(sectionId);
        if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
        }
      }

      function redirectToPage(url) {
        window.location.href = url;
      }
  </script>
</head>
<body>

<?php include 'includes/header.php';?>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="user-assets/images/logos/logo.png" width="50" alt="">
                </a>
                <p class="text-center">3Chain</p>
                <form action="" method="post">
                  <div class="mb-3">
                      <label for="emailaddress" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="emailaddress" name="emailaddress" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="form-check">
                          <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" name="remember" checked>
                          <label class="form-check-label text-dark" for="flexCheckChecked">
                              Remember
                          </label>
                      </div>
                      <a class="text-primary fw-bold" href="./index.php">Forgot Password ?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="login">Login</button>
                  <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-4 mb-0 fw-bold">New to 3Chain?</p>
                      <a class="text-primary fw-bold ms-2" href="register.php">Create an account</a>
                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'includes/footer.php';?>
  <script src="user-assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="user-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>