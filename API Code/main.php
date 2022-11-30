<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script defer src="google.js"></script>

    <form action="/" id="form" method="GET">
        <label for="book">Book</label>
        <input id="book" name="book" type="text">
        <button id="submit">Submit</button>
    </form>

    <!-- <script>
        const wrapper = document.querySelector('.wrapper'),
            form = wrapper.querySelectorAll('.form'),
            submitInput = form[0].querySelector('input[type="submit"]');
        

        function getDataForm(e) {
            e.preventDefault();
            var formData = new FormData(form[0]);
        }
    </script> -->

    <img id="hunger_image" src="" alt="">
    <h1 id="hunger_title">The title is</h1>
    <h1>The author is <span id="hunger_author"></span></h1>
    <h1>The publisher is <span id="hunger_publisher"></span></h1>
    <h1>The published date <span id="hunger_pubDate"></span></h1>
    
    <img id="thief_image" src="" alt="">
    <h1 id="thief_title">The title is</h1>
    <h1>The author is <span id="thief_author"></span></h1>
    <h1>The publisher is <span id="thief_publisher"></span></h1>
    <h1>The published date <span id="thief_pubDate"></span></h1>

    <?php 
        $host = "localhost";
        $user = "root";
        $password = "root";
        $database = "book-store-database";

        global $host,$user, $password, $database;
        $con = new mysqli($host, $user, $password, $database);
        return $con;

        $books =  mysqli_query($con, "SELECT * FROM catalog ORDER BY " . "Name");
        echo ($books);
    ?>
    
    
    
    <!-- <img id="hunger_image" src="" alt="">
    <h1 id="hunger_title">The title is</h1>
    <h1>The author is <span id="hunger_author"></span></h1>
    <h1>The publisher is <span id="hunger_publisher"></span></h1>
    <h1>The published date <span id="hunger_pubDate"></span></h1> -->
    
    
    
    

    
    
        
    
    
</body>
</html>