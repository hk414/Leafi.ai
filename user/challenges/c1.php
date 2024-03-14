<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3Chain.ai</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/chatbot.css" />
  <link rel="stylesheet" href="../assets/css/styles2.css" />
  <link rel="stylesheet" href="assets/hash.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <?php include 'includes/sidebar.html';?>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">

      <!--  Header Start -->
      <?php include 'includes/header.html';?>
      <!--  Header End -->
      <div class="container-hash">
        <h1>SHA256 Hash</h1>
        <div class="well" id="well1">
          <form class="form-horizontal">

            <div class="form-group">
              <label class="col-sm-2 control-label" for="data">Data:</label>
              <div class="col-sm-10">
                <textarea id="data" class="form-control" rows="10"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="hash">Hash:</label>
              <div class="col-sm-10">
                <input id="hash" class="form-control" type="text" disabled>
              </div>
            </div>

          </form>
        </div>
        
      <button id="toggleDescription" class="btn btn-primary">How It Works</button>

      <div class="descriptions-container">
        <div class="description" id="description1">
          <h3> Learn The Concept</h3>

          <p>The SHA256 hash is a cryptographic function that converts input data into a fixed-size string of characters. It is commonly used for data integrity verification and digital signatures.</p>
        </div>

        <div class="description" id="description2">
          <h3> Learn The Code</h3>
          <p>
            &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"&gt;&lt;/script&gt;
              function sha256(data) {
                return CryptoJS.SHA256(data).toString(CryptoJS.enc.Hex);
              }
            &lt;/script&gt;
          </p>
        </div>
      </div>
    </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
  <script>
    function sha256(data) {
      return CryptoJS.SHA256(data).toString(CryptoJS.enc.Hex);
    }

    function updateHash() {
      const data = document.getElementById('data').value; 
      const hash = sha256(data); 
      document.getElementById('hash').value = hash; 
    }

    document.getElementById('data').addEventListener('input', updateHash);

    document.getElementById('toggleDescription').addEventListener('click', function() {
      var descriptions = document.querySelectorAll('.description');
      descriptions.forEach(function(description) {
        description.style.display = (description.style.display === 'none') ? 'block' : 'none';
      });
    });

  </script>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <!-- Footer -->
      <?php include '../includes/footer.html';?>

      <!-- Chatbot -->
      <?php include '../includes/chatbot.html';?>

    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <script src="../assets/js/chatbot.js"></script>
  
</body>

</html>