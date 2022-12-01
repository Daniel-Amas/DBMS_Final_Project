<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background:beige;">
<?php
    require_once('functions.php');
    $con = openDB();
    ?>
    <div id="error"></div>
    <script defer src="google.js"></script>
    <h1>Owner Back End</h1>
    <h2>Enter new books into your database</h2>
    <!-- <form action="/" id="form" method="GET"> -->
        <label for="book">Book</label>
        <input id="book" name="book" type="text" class="bookClass">
        <button id="submit" onclick="getText()" >Submit</button>
    <!-- </form> -->

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
                    
                    let img
                    let title
                    let author
                    let publisher
                    let publishedDate
                    let ISBN
                    let cost
                    
                    try {img = data.items[0].volumeInfo.imageLinks.thumbnail} catch (error) {img = "N/A"}
                    try {title = data.items[0].volumeInfo.title} catch (error) {title = "N/A"}
                    try {author = data.items[0].volumeInfo.authors} catch (error) {author = "N/A"}
                    try {publisher = data.items[0].volumeInfo.publisher} catch (error) {publisher = "N/A"}
                    try {publishedDate = data.items[0].volumeInfo.publishedDate} catch (error) {publishedDate = "N/A"}
                    try {ISBN = data.items[0].volumeInfo.industryIdentifiers[0].identifier} catch (error) {cost = "N/A"}
                    try {cost = data.items[0].saleInfo.listPrice.amount} catch (error) {cost = 0.00}
                    
                    createCookie("Title", title, "1");
                    createCookie("ISBN", ISBN, "1");
                    createCookie("Price", cost, "1");

                    document.getElementById("image").src = img;
                    document.getElementById("title").innerHTML = title;
                    document.getElementById("isbn").innerHTML = ISBN;
                    document.getElementById("author").innerHTML = author;
                    document.getElementById("publisher").innerHTML = publisher;
                    document.getElementById("pubDate").innerHTML = publishedDate;
                    document.getElementById("price").innerHTML = cost;
                    

                } else if (request.readyState === 4)
                {
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
    <h3>Title: <span id="title"></h3>
    <h3>ISBN: <span id="isbn"></h3>
    <h3>Author: <span id="author"></span></h3>
    <h3>Publisher: <span id="publisher"></span></h3>
    <h3>Published Date: <span id="pubDate"></span></h3>
    <h3>List Price: <span id="price"></span></h3>


    <form action="bookAdd.php" method="post">
            <h3 style="font-size:20px">Add to Database</h3>
            <input type="submit" name="Submit" />
        </form>
        <?php
        if (isset($_POST['Submit'])) {
            $ISBN = $_COOKIE["ISBN"];
            $Title = $_COOKIE["Title"];
            $Price = $_COOKIE["Price"];
            mysqli_query($con, "INSERT INTO `books` (`Name`, `ISBN`, `Price`) VALUES ('" . $Title . "', '" .$ISBN . "', '" .$Price . "');");
        }
        ?>
    
    
        
    
    
</body>
</html>
