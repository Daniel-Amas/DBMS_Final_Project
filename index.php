<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <?php
    require_once('functions.php');
    $con = openDB();
    ?>
    <style>
        /* Dropdown Button */
.dropbtn {
  background-color:darkorange;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <div class="header-1">
            <a href="index.php" class="logo"><i class="fas fa-book"></i> BookStore</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search" id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                <a href="index.php">Home</a>    
                <a href="catalog.php">Browse</a>
                <a href="stock.php">Types</a>
                <a href="budget.php">Budget Books</a>
                </div>
            </div>
        </div>



    </header>
    <!-- HEADER END -->

    <!-- BOTTOM NAVBAR -->
    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#survey" class="fas fa-blog"></a>
        <a href="#newdrops" class="fas fa-tags"></a>
        <a href="#featured" class="fas fa-star"></a>
        <a href="#genres" class="fas fa-bars"></a>
    </nav>

    <!-- LOGIN FORM -->
    <div class="login-form-container">
        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>Sign In</h3>
            <span>Username</span>
            <input type="email" name="" id="" placeholder="Your Email" class="box">
            <span>Password</span>
            <input type="password" name="" placeholder="Your Password" id="" class="box">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Remember Me</label>
            </div>
            <input type="submit" value="Sign In" class="btn">
            <p>Forgot Password? <a href="#">Click Here</a></p>
            <p>Don't have an account? <a href="#">Create one</a></p>
        </form>
    </div>

    <!-- HOME SECTION -->
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>Content</h3>
                <p>A great selection of books! Come and take a look through to find the best book for you.</p>
                <a href="catalog.php" class="btn">Browse</a>
            </div>
            <div class="swiper books-slider" style="font-family: serif">
                <div class="swiper-wrapper">
                    <?php
                    $books = mysqli_query($con, "SELECT * FROM catalog");
                    $covers = scandir('Book-covers');
                    ?>
                    <a class="swiper-slide" alt="">
                        <h1 style="font-family: serif">
                            <?php
                            $row = $books->fetch_array();
                            printf($row['Name'] . "<br>");

                            printf("<img src=\"Book-covers/");
                            $cover = $row["ISBN"] . ".jpg";
                            foreach ($covers as $pic) {

                                if ($pic == ($cover)) {
                                    printf($cover . "\"");
                                }
                            }
                            printf(" alt=\"\"><br>");

                            printf("By: " . $row['Author_first'] . " " . $row['Authors_Last'] . "<br>Genre: " . $row['Genre']);
                            ?></h1>
                    </a>
                    <a class="swiper-slide" alt="">
                        <h2><?php
                            $row = $books->fetch_array();
                            printf($row['Name'] . "<br>");

                            printf("<img  src=\"Book-covers/");
                            $cover = $row["ISBN"] . ".jpg";
                            foreach ($covers as $pic) {

                                if ($pic == ($cover)) {
                                    printf($cover . "\"");
                                }
                            }
                            printf(" alt=\"\"><br>");

                            printf("By: " . $row['Author_first'] . " " . $row['Authors_Last'] . "<br>Genre: " . $row['Genre']);
                            ?></h1>
                    </a>
                    <a class="swiper-slide" alt="">
                        <h1><?php
                            $row = $books->fetch_array();
                            printf($row['Name'] . "<br>");

                            printf("<img src=\"Book-covers/");
                            $cover = $row["ISBN"] . ".jpg";
                            foreach ($covers as $pic) {

                                if ($pic == ($cover)) {
                                    printf($cover . "\"");
                                }
                            }
                            printf(" alt=\"\"><br>");

                            printf("By: " . $row['Author_first'] . " " . $row['Authors_Last'] . "<br>Genre: " . $row['Genre']);
                            ?></h1>
                    </a>
                    <a class="swiper-slide" alt="">
                        <h1><?php
                            $row = $books->fetch_array();
                            printf($row['Name'] . "<br>");

                            printf("<img src=\"Book-covers/");
                            $cover = $row["ISBN"] . ".jpg";
                            foreach ($covers as $pic) {

                                if ($pic == ($cover)) {
                                    printf($cover . "\"");
                                }
                            }
                            printf(" alt=\"\"><br>");

                            printf("By: " . $row['Author_first'] . " " . $row['Authors_Last'] . "<br>Genre: " . $row['Genre']);
                            ?></h1>
                    </a>
                </div>
                <img src="images/stand.png" alt="" class="stand">
            </div>
        </div>
    </section>
    <!-- HOME SECTION END -->
    <!-- ICONS SECTION -->
    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>Quick Delivery</h3>
                <p>Order Nowwwww!!!</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>Secure Payment</h3>
                <p>Not Sketchy At All</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>Easy Returns</h3>
                <p>JK! No Returns</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 Support</h3>
                <p>Don't Call, I'm Sleep</p>
            </div>
        </div>
    </section>
    <!-- ICONS SECTION END -->
    <!-- FEATURED -->
    <section id="featured" class="featured">
        <h1 class="heading">
            <span>Reviews</span>
        </h1>
        <div class="swiper featured-slider">

            <div class="swiper-wrapper">
                <?php
                $reviews =  mysqli_query($con, "SELECT * FROM reviews");
                while ($row = mysqli_fetch_array($reviews)) {
                    echo ("
                    <div class=\"swiper-slide box\">
                    <div class=\"image\">
                    <h1>
                    ");
                    $books = mysqli_query($con, "SELECT * FROM catalog");

                    while ($row2 = mysqli_fetch_array($books)) {
                        if ($row2["ISBN"] == $row["BookID"]) {
                            echo ($row2["Name"] . "<br><br>");
                        }
                    }
                    printf("<img src=\"Book-covers/");
                    $cover = $row["BookID"] . ".jpg";
                    foreach ($covers as $pic) {

                        if ($pic == ($cover)) {
                            printf($cover . "\"");
                        }
                    }
                    printf(" alt=\"\"><br>");
                    echo ($row["Rating"] . "<br>" . $row["Review"] . "<br><br></h1></div></div>");
                }
                ?>


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        </div>



        </div>
    </section>
    <!-- FEATURED END -->


    <!-- SWIPER CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- JS SCRIPT -->
    <script src="js/script.js"></script>
</body>

</html>