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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <div class="header-1">
            <a href="#" class="logo"><i class="fas fa-book"></i> BookStore</a>

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
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#survey">Survey</a>
                <a href="#newdrops">New Drops</a>
                <a href="#featured">Featured</a>
                <a href="#genres">Genres</a>
            </nav>
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores nam dignissimos cumque, alias nulla ullam vero voluptates rem eum esse.</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <?php
                    $books = mysqli_query($con, "SELECT * FROM catalog");
                    ?>
                    <a class="swiper-slide" alt="">
                        <h1><?php
                            $row = $books->fetch_array();
                            printf($row['Name'] . "<br>" . $row['Author_first'] . " " . $row['Authors_Last'] . "<br>Genre: " . $row['Genre']);
                            ?></h1>
                    </a>
                    <a class="swiper-slide" alt="">
                        <h1><?php
                            $row = $books->fetch_array();
                            printf($row['Name'] . "<br>" . $row['Author_first'] . " " . $row['Authors_Last'] . "<br>Genre: " . $row['Genre']);
                            ?></h1>
                    </a>
                    <a class="swiper-slide" alt="">
                        <h1><?php
                            $row = $books->fetch_array();
                            printf($row['Name'] . "<br>" . $row['Author_first'] . " " . $row['Authors_Last'] . "<br>Genre: " . $row['Genre']);
                            ?></h1>
                    </a>
                    <a class="swiper-slide" alt="">
                        <h1><?php
                            $row = $books->fetch_array();
                            printf($row['Name'] . "<br>" . $row['Author_first'] . " " . $row['Authors_Last'] . "<br>Genre: " . $row['Genre']);
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
            <span>Featured Books</span>
        </h1>
        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Fantasy/FanBook11.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Fantasy/FanBook5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Non-Fiction/NficBook14.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Non-Fiction/NficBook4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Fiction/FicBook4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Fiction/FicBook13.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Young-Adult/YaBook5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Young-Adult/YaBook8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Young-Adult/YaBook3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="images/Fantasy/FanBook8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    <!-- FEATURED END -->


    <!-- SWIPER CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- JS SCRIPT -->
    <script src="js/script.js"></script>
</body>

</html>