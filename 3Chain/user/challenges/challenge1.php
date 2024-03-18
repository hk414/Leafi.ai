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
    <link rel="stylesheet" href="assets/challenge.css" />
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
            <div class="container-quiz">
                <h1>Financial Literacy Quiz</h1>
                <!-- <p>Create a quiz covering various aspects of personal finance, including topics such as budgeting, investing, saving for retirement, managing debt, and understanding financial terms. Participants can take the quiz individually or in teams, with prizes awarded to those who score the highest.
                </p> -->
                <div class="start_btn"><button>Start Quiz</button></div>

                <!-- Info Box -->
                <div class="info_box">
                    <div class="info-title"><span>Some Rules of this Quiz</span></div>
                    <div class="info-list">
                        <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
                        <div class="info">2. Once you select your answer, it can't be undone.</div>
                        <div class="info">3. You can't select any option once time goes off.</div>
                        <div class="info">4. You can't exit from the Quiz while you're playing.</div>
                        <div class="info">5. You'll get points on the basis of your correct answers.</div>
                    </div>
                    <div class="buttons">
                        <button class="quit">Exit Quiz</button>
                        <button class="restart">Continue</button>
                    </div>
                </div>
                <div class="margin"></div>
                <!-- Quiz Box -->
                <div class="quiz_box">
                    <header>
                        <div class="title">Financial Literacy Quiz</div>
                        <div class="timer">
                            <div class="time_left_txt">Time Left</div>
                            <div class="timer_sec">15</div>
                        </div>
                        <div class="time_line"></div>
                    </header>
                    <section>
                        <div class="que_text">
                            <!-- Here I've inserted question from JavaScript -->
                        </div>
                        <div class="option_list">
                            <!-- Here I've inserted options from JavaScript -->
                        </div>
                    </section>

                    <!-- footer of Quiz Box -->
                    <footer>
                        <div class="total_que">
                            <!-- Here I've inserted Question Count Number from JavaScript -->
                        </div>
                        <button class="next_btn">Next Que</button>
                    </footer>
                </div>

                <!-- Result Box -->
                <div class="result_box">
                    <div class="icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div class="complete_text">You've completed the Quiz!</div>
                    <div class="score_text">
                        <!-- Here I've inserted Score Result from JavaScript -->
                    </div>
                    <div class="buttons">
                        <button class="restart">Replay Quiz</button>
                        <button class="quit">Quit Quiz</button>
                    </div>
                </div>

                <!-- Inside this JavaScript file I've inserted Questions and Options only -->
                <script src="js/questions.js"></script>

                <!-- Inside this JavaScript file I've coded all Quiz Codes -->
                <script src="js/script.js"></script>

            </div>



            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <!-- Footer -->
            <?php include '../includes/footer.html'; ?>

            <!-- Chatbot -->
            <?php include '../includes/chatbot.html'; ?>
        </div>
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