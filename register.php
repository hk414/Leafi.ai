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
  <?php include 'includes/register-form.html';?>

  <?php include 'includes/footer.php';?>
  <script src="user-assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="user-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>