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
    <link rel="stylesheet" href="assets/choose_plan.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <?php include 'includes/sidebar.html'; ?>
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">

            <!--  Header Start -->
            <?php include 'includes/header.html'; ?>
            <!--  Header End -->

            <div class="choose-plan">
                <h1>Choose a plan</h1>
                <div class="card-plan">

                    <div class="plan-popular">
                        <h2 class="text title--small">Premium Monthly</h2>
                        <div class="text text--medium text--regular">RM39/month</div>
                        <ul class="features">
                            <li><i class="fas fa-check-circle"></i> Unlimited Challenges</li>
                            <li><i class="fas fa-check-circle"></i> Email Support</li>
                            <li><i class="fas fa-times-circle"></i> Limited AI-Assistance</li>

                        </ul>
                        <button class="value-proposition__button btn btn--accent basic-button" onclick=" redirectToPaymentGateway()">Start 2-day Trial</button>
                        <p class="feature-advantage">Cancel anytime</p>
                    </div>
                    <div class="plan">
                        <h2 class="text title--small">Platinum Monthly</h2>
                        <div class="text text--medium text--regular">RM59/month</div>
                        <ul class="features">
                            <li><i class="fas fa-check-circle"></i> All In Premium Plan</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited AI-Assistance</li>
                            <li><i class="fas fa-check-circle"></i> Access to Forum</li>
                        </ul>
                        <button class="value-proposition__button btn btn--accent basic-button" onclick="redirectToPaymentGateway()">Get VIP Access</button>
                        <p>7-day money-back guarantee</p>
                    </div>
                </div>
            </div>

            <script>
                function redirectToPaymentGateway() {
                    window.location.href = "payment_gateway.php";
                }
            </script>


            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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