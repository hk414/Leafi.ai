<?php
include 'database/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $email = isset($_POST["emailaddress"]) ? $_POST["emailaddress"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    $username = htmlspecialchars(strip_tags(trim($username)));
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars(strip_tags(trim($password)));

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($query) === TRUE) {
      $query2 = "SELECT * FROM users WHERE email='$email'";
      $result = $conn->query($query2);
  
      if ($result && $result->num_rows > 0) {
          $row = $result->fetch_assoc();
  
          $_SESSION["user_id"] = $row["id"];
          $_SESSION["user_email"] = $row["email"];
          echo "<script>alert('User registered successfully'); window.location.href='user/html/index.php';</script>";
          exit();
          
      } 
  
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
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
</head>
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
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="user-assets/images/logos/logo.png" width="50" alt="">
                </a>
                <p class="text-center">3Chain</p>
                <form action="" method="post">
                  <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" id="username" name="username" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                      <label for="emailaddress" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="emailaddress" name="emailaddress" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="signup">Register</button>
                  <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-4 mb-0 fw-bold">Already have an account ?</p>
                      <a class="text-primary fw-bold ms-2" href="login.php">Login</a>
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