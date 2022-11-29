<?php
function openDB()
{
    $host = "localhost";
    $user = "root";
    $password = "Trouble139";
    $database = "book_store_database";
    $con = new mysqli($host, $user, $password, $database);
    return $con;
}
function sortBy($filter)
{
    $host = "localhost";
    $user = "root";
    $password = "Trouble139";
    $database = "book_store_database";
    $con = new mysqli($host, $user, $password, $database);
    $books =  mysqli_query($con, "SELECT * FROM catalog ORDER BY " . $filter); ?>
    <script type="text/javascript">
        const container = document.getElementById('container');
        container.replaceChildren();
    </script>
    <form method="post">
        <h1>Sort By:</h1>
        <input type="submit" name="Name" class="button" value="Name" />
        &nbsp;
        <input type="submit" name="Author" class="button" value="Author" />
        &nbsp;
        <input type="submit" name="Price" class="button" value="Price" />
    </form>
    <?php
    $covers = scandir('Book-covers');
    while ($row = mysqli_fetch_array($books)) {
    ?>
        <div class="card">
            <br>
            <img src="Book-covers/<?php
                                    $cover = $row["ISBN"] . ".jpg";
                                    foreach ($covers as $pic) {

                                        if ($pic == ($cover)) {
                                            printf($cover . "\"");
                                        }
                                    }
                                    ?>" alt="" style="width:100%">
            <h1><?php echo ($row["Name"]) ?></h1>
            <p class="price"><?php echo ($row["Price"]) ?></p>
            <p><?php echo ($row["Author_first"] . " " . $row["Authors_Last"]) ?></p>
            <p><button>Add to Cart</button></p>
            <br>
        </div>
    <?php
    }
}

function budgetSortBy($filter)
{
    $host = "localhost";
    $user = "root";
    $password = "Trouble139";
    $database = "book_store_database";
    $con = new mysqli($host, $user, $password, $database);
    $books =  mysqli_query($con, "SELECT * FROM budget_books ORDER BY " . $filter); ?>
    <script type="text/javascript">
        const container = document.getElementById('container');
        container.replaceChildren();
    </script>
    <form method="post">
        <h1>Sort By:</h1>
        <input type="submit" name="name" class="button" value="name" />
        &nbsp;
        <input type="submit" name="price" class="button" value="price" />
    </form>
    <?php
    $covers = scandir('Book-covers');
    while ($row = mysqli_fetch_array($books)) {
    ?>
        <div class="card">
            <br>
            <img src="Book-covers/<?php
            $code =  mysqli_query($con, "SELECT * FROM catalog");
                                    while ($row2 = mysqli_fetch_array($code)) {
                                        if ($row2["Name"] == $row["name"]) {
                                            $cover = $row2["ISBN"] . ".jpg";
                                            foreach ($covers as $pic) {

                                                if ($pic == ($cover)) {
                                                    printf($cover . "\"");
                                                }
                                            }
                                        }
                                    }
                                    ?>" alt="" style="width:100%">
            <h1><?php echo ($row["name"]) ?></h1>
            <p class="price"><?php echo ($row["price"]) ?></p>
            <p><button>Add to Cart</button></p>
            <br>
        </div>
<?php
    }
}

?>