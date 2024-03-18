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
    <link rel="stylesheet" href="../assets/css/forum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .done-icon {
            color: green;
        }

        .undone-icon {
            color: red;
        }
    </style>

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

            <!-- Community Start-->
            <div class="container-fluid">
                <div class="left-section">
                    <!-- My Community -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">My Community</h5>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line1">PUBLIC</p>
                                    <p class="line2">web3gether</p>
                                    <p class="line3">32.3k members</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line1">PRIVATE</p>
                                    <p class="line2">CryptoCohort</p>
                                    <p class="line3">32.920 members</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/picture3.png" alt="">
                                <div class="description">
                                    <p class="line1">PUBLIC</p>
                                    <p class="line2">BlockchainBridge</p>
                                    <p class="line3">32.14k members</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Events</h5>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line1">23 March 2024</p>
                                    <p class="line2">Web3 Summit</p>
                                    <p class="line3">827 people have joined this event</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line1">24 April 2024</p>
                                    <p class="line2">Blockchain Hackathon</p>
                                    <p class="line3">182 people have joined this event</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line1">19 May 2024</p>
                                    <p class="line2">Crypto Trading Masterclass</p>
                                    <p class="line3">393 people have joined this event</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line1">20 september 2024</p>
                                    <p class="line2">NFT Art Exhibition</p>
                                    <p class="line3">62 people have joined this event</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line1">7 October 2024</p>
                                    <p class="line2">Web3 Gaming Expo</p>
                                    <p class="line3">192 people have joined this event</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Popular Tags -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Popular Tags</h5>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line2">#design</p>
                                    <p class="line3">2,323 posted by this tag</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line2">#travel</p>
                                    <p class="line3">519 posted by this tag</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line2">#javascript</p>
                                    <p class="line3">4,483 posted by this tag</p>
                                </div>
                            </div>
                            <div class="community-content">
                                <img src="../assets/images/image_forum/community1.jpg" alt="">
                                <div class="description">
                                    <p class="line2">#bitcoins</p>
                                    <p class="line3">6,089 posted by this tag</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-section">
                    <div class="post">
                        <img src="../assets/images/profile/user-1.jpg" alt="">
                        <div class="share-post-container">
                            <input class="share-post" type="text" placeholder="Share your thoughts or a post">
                            <img class="img1" src="../assets/images/image_forum/image-search-icon.png" alt="">
                            <img class="img2" src="../assets/images/image_forum/sticker-icon.png" alt="">
                        </div>
                    </div>
                    <!-- Post here -->
                    <div class="posted">
                        <div class="profile">
                            <img src="../assets/images/image_forum/picture3.png" alt="">
                            <div class="detail">
                                <p>BlockchainBridge</p>
                                <div class="status">
                                    <img src="../assets/images/profile/user-1.jpg" alt="">
                                    <p style="color: #3162da;">Ang Fanny &#124;</p>
                                    <p style="margin-left: 2px"> 1 day ago</p>
                                </div>
                            </div>
                        </div>
                        <p class="caption">Hi, there! The Blockchain Hackathon is an exciting and collaborative event that brings together developers, blockchain enthusiasts, and innovators to explore the limitless possibilities of blockchain tech.</p>
                        <img class="post-picture" src="../assets/images/image_forum/ori_post1.jpeg" alt="">
                        <div class="liked">
                            <p>323 likes &#183; 22 comments</p>
                        </div>

                        <div class="action">
                            <div class="left">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <p>Like</p>
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                <p>Comment</p>
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                <p>Save</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                <p>Share</p>
                            </div>
                        </div>
                    </div>
                    <div class="posted">
                        <div class="profile">
                            <img src="../assets/images/image_forum/picture3.png" alt="">
                            <div class="detail">
                                <p>BlockchainBridge</p>
                                <div class="status">
                                    <img src="../assets/images/profile/user-1.jpg" alt="">
                                    <p style="color: #3162da;">Ang Fanny &#124;</p>
                                    <p style="margin-left: 2px"> 1 day ago</p>
                                </div>
                            </div>
                        </div>
                        <p class="caption">Hi, there! The Blockchain Hackathon is an exciting and collaborative event that brings together developers, blockchain enthusiasts, and innovators to explore the limitless possibilities of blockchain tech.</p>
                        <img class="post-picture" src="../assets/images/image_forum/ori_post2.jpeg" alt="">
                        <div class="liked">
                            <p>323 likes &#183; 22 comments</p>
                        </div>

                        <div class="action">
                            <div class="left">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <p>Like</p>
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                <p>Comment</p>
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                <p>Save</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                <p>Share</p>
                            </div>
                        </div>
                    </div>
                    <div class="posted">
                        <div class="profile">
                            <img src="../assets/images/image_forum/picture3.png" alt="">
                            <div class="detail">
                                <p>BlockchainBridge</p>
                                <div class="status">
                                    <img src="../assets/images/profile/user-1.jpg" alt="">
                                    <p style="color: #3162da;">Ang Fanny &#124;</p>
                                    <p style="margin-left: 2px"> 1 day ago</p>
                                </div>
                            </div>
                        </div>
                        <p class="caption">Hi, there! The Blockchain Hackathon is an exciting and collaborative event that brings together developers, blockchain enthusiasts, and innovators to explore the limitless possibilities of blockchain tech.</p>
                        <img class="post-picture" src="../assets/images/image_forum/ori_post1.jpeg" alt="">
                        <div class="liked">
                            <p>323 likes &#183; 22 comments</p>
                        </div>

                        <div class="action">
                            <div class="left">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <p>Like</p>
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                <p>Comment</p>
                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                <p>Save</p>
                            </div>
                            <div class="right">
                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                <p>Share</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- <div class="events">test2</div>
                    <div class="popular-tags">test3</div> -->
        </div>
        <!-- Community end -->



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