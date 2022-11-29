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
                    <a href="orders.php">Orders</a>
                </div>
            </div>
        </div>



    </header>
    <!-- HEADER END -->

    <!-- LOGIN FORM -->
    <div class="login-form-container">
        <div id="close-login-btn" class="fas fa-times"></div>
        <form action="index.php" method="post">
            <h3>Sign In</h3>
            <span>E-mail</span>
            <input type="email" name="" id="" placeholder="Your Email" class="box" required>
            <span>Password</span>
            <input type="password" name="" placeholder="Your Password" id="" class="box" required>
            <div class="checkbox">
            </div>
            <input type="submit" value="submit" class="btn">
            <p>Forgot Password? <a href="#">Click Here</a></p>
            <p>Don't have an account? <a href="#">Create one</a></p>
        </form>
    </div>

    <div class="content" style="text-align:center">
        <form action="orders.php" method="post">
            <h3 style="font-size:20px">Enter your order number to see your order</h3>
            <span>Order #</span><br>
            <input style="background:bisque;" type="order" name="order" id="order" placeholder="Order" class="box" required>
            <input type="submit" name="Submit" />
        </form>
        <?php
        if (isset($_POST['Submit'])) {
            $orderNum = $_POST['order'];
            $orders = mysqli_query($con, "SELECT * FROM order_info");
            while ($row = mysqli_fetch_array($orders)) {
                if ($row["Order_id"] == $orderNum) {
                    echo ("<br><br>
                  <h2>Order #</h2>
                  <p>" . $row['Order_id'] . "</p><br>
                  <h2>Address</h2>
                  <p>" . $row['Address'] . "</p><br>
                  <h2>Price</h2>
                  <p>" . $row['Price'] . "</p><br>
                  <h2>Items</h2>
                  <p>" . $row['Items'] . "</p><br>"
                    );
                }
            }
        }

        ?>
    </div>
    </div>

    <!-- FEATURED END -->


    <!-- SWIPER CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- JS SCRIPT -->
    <script src="js/script.js"></script>
</body>

</html>