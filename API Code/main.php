<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="error"></div>
    <script defer src="google.js"></script>

    <!-- <form action="/" id="form" method="GET"> -->
        <label for="book">Book</label>
        <input id="book" name="book" type="text" class="bookClass">
        <button id="submit" onclick="getText()" >Submit</button>
    <!-- </form> -->

    <?php
        $host = "localhost";
        $user = "root";
        $password = "root";
        $database = "book-store-database";

        global $host, $user, $password, $database;
        $con = new mysqli($host, $user, $password, $database);
        $ISBN = $_COOKIE["Code"];
        $Title = $_COOKIE["Title"];
        mysqli_query($con, "INSERT INTO books (Name, ISBN) VALUES ('" . $Title . "', '" .$ISBN . "');");
    ?>

    <script>
        
        function getText() {
            let input = document.getElementsByClassName("bookClass")[0].value;
            const getBook = (callback) => {
            var url = "https://www.googleapis.com/books/v1/volumes?q=";
            url += input;
            alert(url);
            const request = new XMLHttpRequest();

            request.addEventListener('readystatechange', () => {
                // console.log(request, request.readState);
                if (request.readyState === 4 && request.status === 200) {
                    //Parse the responseText into JSON format
                    const data = JSON.parse(request.responseText);
                    
                    let title = data.items[0].volumeInfo.title
                    let author = data.items[0].volumeInfo.authors
                    let publisher = data.items[0].volumeInfo.publisher
                    let publishedDate = data.items[0].volumeInfo.publishedDate
                    let img = data.items[0].volumeInfo.imageLinks.thumbnail
                    let desc = data.items[0].volumeInfo.description
                    
                    createCookie("Thief", title, "1");

                    document.getElementById("image").src = img;
                    document.getElementById("title").innerHTML = title;
                    document.getElementById("author").innerHTML = author;
                    document.getElementById("publisher").innerHTML = publisher;
                    document.getElementById("pubDate").innerHTML = publishedDate;
                    document.getElementById("desc").innerHTML = desc;
                    

                } else if (request.readyState === 4) {
                    callback('could not fetch data', undefined);
                }
            });

            request.open('GET', url);
            request.send();
            }
            getBook((err, data) => {
                console.log('callback fired');
                if(err) {
                    console.log(err);
                } else {
                    console.log(data);
                }
            });
            
            
        }
        



    </script>

    <img id="image" src="" alt="">
    <h1 id="title">The title is</h1>
    <h1>The author is <span id="author"></span></h1>
    <h1>The publisher is <span id="publisher"></span></h1>
    <h1>The published date <span id="pubDate"></span></h1>
    <h1>Description <span id="desc"></span></h1>
    
</body>
</html>