<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3Chain.ai</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/chatbot.css" />
  <link rel="stylesheet" href="../assets/css/generate.css">
  <link rel="stylesheet" href="../assets/css/styles2.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    .done-icon {
      color: green;
    }

    .undone-icon {
      color: red;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <?php include '../includes/sidebar.html'; ?>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">

      <!--  Header Start -->
      <?php include '../includes/header.html'; ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid h-100">
          <div class="row justify-content-center h-100">
            <div class="col-md-8 col-xl-6 chat">
              <div class="card">
                <div class="card-header msg_head">
                  <div class="d-flex bd-highlight">
                    <div class="img_cont">
                      <img src="../assets/images/logos/chatbot.png" class="rounded-circle user_img">
                      <span class="online_icon"></span>
                    </div>
                    <div class="user_info">
                      <span>leafi.ai AI Assistant</span>
                      <p>8 Messages</p>
                    </div>
                    <!-- <div class="video_cam">
                      <span><i class="fas fa-video"></i></span>
                      <span><i class="fas fa-phone"></i></span>
                    </div> -->
                  </div>
                  <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                  <div class="action_menu">
                    <ul>
                      <li><i class="fas fa-search"></i> Search</li>
                      <li><i class="fas fa-trash"></i> Clear chat</li>
                      <!-- <li><i class="fas fa-plus"></i> Add to group</li>
                      <li><i class="fas fa-ban"></i> Block</li> -->
                    </ul>
                  </div>
                </div>
                <div class="card-body msg_card_body">
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="../assets/images/logos/chatbot.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                      Hi, how can I help you today?
                      <span class="msg_time">3:23 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      What is GOinvest in tng ewallet?
                      <span class="msg_time_send">3:24 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img src="../assets/images/profile/user-1.jpg" class="rounded-circle user_img_msg">
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="../assets/images/logos/chatbot.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                      GOinvest offers a revolutionary investment experience that combines unmatched convenience, affordability, and flexibility. With an incredibly low entry point of just RM10, GOinvest ensures that anyone, regardless of their financial background, can embark on their investment journey without barriers. What truly sets GOinvest apart is the absence of a lock-in period for a select suite of funds, empowering users to have full control over their investments and make decisions that align with their financial goals.

                      GOinvest proudly collaborates with two renowned fund houses, ASNB and Principal, ensuring a diverse range of investment opportunities that cater to varying risk appetites.
                      <span class="msg_time">3:24 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      How can I initiate GOinvest on ASNB?
                      <span class="msg_time_send">3:26 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img src="../assets/images/profile/user-1.jpg" class="rounded-circle user_img_msg">
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="../assets/images/logos/chatbot.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                      1. Click on GOinvest.
                      <img src="../assets/images/image_generate/GOinvest-ASNB-step1.svg" alt="">
                    </div>
                  </div>

                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="../assets/images/logos/chatbot.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                      2. Choose ASNB.
                      <img src="../assets/images/image_generate/GOinvest-ASNB-step2.svg" alt="">
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="../assets/images/logos/chatbot.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                      3. Give consent to Touch ‘n Go eWallet to link your account
                      <img src="../assets/images/image_generate/GOinvest-ASNB-step3.svg" alt="">
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="../assets/images/logos/chatbot.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                      4. You can now access your ASNB portfolio
                      <img src="../assets/images/image_generate/GOinvest-ASNB-step4.svg" alt="">
                      <span class="msg_time">3:26 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      Ok, thanks for your info.
                      <span class="msg_time_send">3:28 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img src="../assets/images/profile/user-1.jpg" class="rounded-circle user_img_msg">
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="../assets/images/logos/chatbot.png" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                      You are welcome.
                      <span class="msg_time">3:28 AM, Today</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="input-group">
                    <div class="input-group-append">
                      <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                    </div>
                    <input name="" class="form-control type_msg" placeholder="Type your message..."></input>
                    <div class="input-group-append">
                      <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="scripts.js"></script>
        <script>
          $(document).ready(function() {
            $('#action_menu_btn').click(function() {
              $('.action_menu').toggle();
            });
          });
        </script>
        <!-- Footer -->
        <?php include '../includes/footer.html'; ?>

        <!-- Chatbot -->
        <?php include '../includes/chatbot.html'; ?>

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