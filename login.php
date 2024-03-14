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
  <?php include 'includes/login-form.html';?>

  <?php include 'includes/footer.php';?>
  <script src="user-assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="user-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>