const getHunger = (callback) => {


    const request = new XMLHttpRequest();
    var searchString = "Hunger_Games_Trilogy" 
    var url = 'https://www.googleapis.com/books/v1/volumes?q=' + searchString;

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
            
            document.getElementById("hunger_image").src = img;
            document.getElementById("hunger_title").innerHTML = title;
            document.getElementById("hunger_author").innerHTML = author;
            document.getElementById("hunger_publisher").innerHTML = publisher;
            document.getElementById("hunger_pubDate").innerHTML = publishedDate;
            

        } else if (request.readyState === 4) {
            callback('could not fetch data', undefined);
        }
    });

    request.open('GET', url);
    request.send();
}
getHunger((err, data) => {
    console.log('callback fired');
    if(err) {
        console.log(err);
    } else {
        console.log(data);
    }
});

const getThief = (callback) => {


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
            
            createCookie("Thief", title, "1");

            document.getElementById("thief_image").src = img;
            document.getElementById("thief_title").innerHTML = title;
            document.getElementById("thief_author").innerHTML = author;
            document.getElementById("thief_publisher").innerHTML = publisher;
            document.getElementById("thief_pubDate").innerHTML = publishedDate;
            

        } else if (request.readyState === 4) {
            callback('could not fetch data', undefined);
        }
    });

    request.open('GET', 'https://www.googleapis.com/books/v1/volumes?q=The_Book_Thief');
    request.send();
}
getThief((err, data) => {
    console.log('callback fired');
    if(err) {
        console.log(err);
    } else {
        console.log(data);
    }
});
function createCookie(name, value, days) {
    var expires;
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toGMTString();
    }
    else {
      expires = "";
    }
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
  }

