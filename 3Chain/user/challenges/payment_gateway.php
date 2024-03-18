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
    <link rel="stylesheet" href="assets/payment_gateway.css" />
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
            <div class="payment-gateway">
                <div class="container">

                    <div class="card-container">

                        <div class="front">
                            <div class="image">
                                <img src="./assets/image/chip.png" alt="">
                                <img src="./assets/image/visa.png" alt="">
                            </div>
                            <div class="card-number-box">################</div>
                            <div class="flexbox">
                                <div class="box">
                                    <span>Card holder</span>
                                    <div class="card-holder-name">Full name</div>
                                </div>
                                <div class="box">
                                    <span>Expires</span>
                                    <div class="expiration">
                                        <span class="exp-month">MM</span>
                                        <span class="exp-year">YY</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="stripe"></div>
                            <div class="box">
                                <span>CVV</span>
                                <div class="cvv-box"></div>
                                <img src="image/visa.png" alt="">
                            </div>
                        </div>

                    </div>

                    <form action="">
                        <div class="inputBox">
                            <span>Card number</span>
                            <input type="text" maxlength="16" class="card-number-input">
                        </div>
                        <div class="inputBox">
                            <span>Card holder</span>
                            <input type="text" class="card-holder-input">
                        </div>
                        <div class="flexbox">
                            <div class="inputBox">
                                <span>Expiration MM</span>
                                <select name="" id="" class="month-input">
                                    <option value="month" selected disabled>Month</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="inputBox">
                                <span>Expiration YY</span>
                                <select name="" id="" class="year-input">
                                    <option value="year" selected disabled>year</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </div>
                            <div class="inputBox">
                                <span>CVV</span>
                                <input type="text" maxlength="4" class="cvv-input">
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="submit-btn">
                    </form>

                </div>






                <script>
                    document.querySelector('.card-number-input').oninput = () => {
                        document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
                    }

                    document.querySelector('.card-holder-input').oninput = () => {
                        document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
                    }

                    document.querySelector('.month-input').oninput = () => {
                        document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
                    }

                    document.querySelector('.year-input').oninput = () => {
                        document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
                    }

                    document.querySelector('.cvv-input').onmouseenter = () => {
                        document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
                        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
                    }

                    document.querySelector('.cvv-input').onmouseleave = () => {
                        document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
                        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
                    }

                    document.querySelector('.cvv-input').oninput = () => {
                        document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
                    }
                </script>

            </div>


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