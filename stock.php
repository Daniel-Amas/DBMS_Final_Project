<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* Dropdown Button */
        .dropbtn {
            background-color: darkorange;
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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
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
    <header class="header" >
        <div class="header-1">
            <a href="index.php" class="logo"><i class="fas fa-book" style="color:orange;size:30;"></i> BookStore</a>

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
                    <a href="orders.php">Orders</a>
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
    <div style="text-align: center;">
        <h4 style="font-size:18px;">Here is all the different Authors and Genres stocked</h4>
        <h1 style="font-size:40px; ">Books Written By:</h1>
        <h3 style="font-size:20px;">
            <?php
            $authors =  mysqli_query($con, "SELECT * FROM authors_stocked");
            while ($row = mysqli_fetch_array($authors)) {
                echo ($row["fname"] . " " . $row["lname"] . "<br>");
            }
            ?>
        </h3>
        <h1 style="font-size:40px; ">Books in these Genres:</h1>
        <h3 style="font-size:20px;">
            <?php
            $Genres =  mysqli_query($con, "SELECT MIN(Genre) AS genre FROM genres GROUP BY Genre");
            while ($row = mysqli_fetch_array($Genres)) {
                
                echo ($row["genre"] . "<br>");
            }
            ?>
        </h3>
        <h1 style="font-size:40px; ">Books published by:</h1>
        <h3 style="font-size:20px;">
            <?php
            $pubs =  mysqli_query($con, "SELECT Name FROM publisher");
            while ($row = mysqli_fetch_array($pubs)) {
                
                echo ($row["Name"] . "<br>");
            }
            ?>
        </h3>
    </div>
    <!-- SWIPER CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- JS SCRIPT -->
    <script src="js/script.js"></script>
</body>

</html>