<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="script.js"></script>
    <form action="/books" method="get">
        <input type="text" name="q">
        <button id="submit">Submit</button>
    </form>

    <h1>The title is <span id="title"></span></h1>
    <h1>The author is <span id="author"></span></h1>
    <h1>The publisher is <span id="publisher"></span></h1>
    <h1>The published date <span id="pubDate"></span></h1>
    
    <img src="<?php $var = '<span id="image"></span>'; 
    $var ?>" alt="">
    
    
    
        
    
    
</body>
</html>