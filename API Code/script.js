const getBooks = (callback) => {


    const request = new XMLHttpRequest();
    
    request.addEventListener('readystatechange', () => {
        // console.log(request, request.readState);
        if (request.readyState === 4 && request.status === 200) {
            //Parse the responseText into JSON format
            const data = JSON.parse(request.responseText);
            
            
            console.log(data.items[0].volumeInfo.title)
            console.log(data.items[0].volumeInfo.authors)
            console.log(data.items[0].volumeInfo.publisher)
            console.log(data.items[0].volumeInfo.publishedDate)

            let title = data.items[0].volumeInfo.title
            let author = data.items[0].volumeInfo.authors
            let publisher = data.items[0].volumeInfo.publisher
            let publishedDate = data.items[0].volumeInfo.publishedDate
            let pic = data.items[0].volumeInfo.imageLinks.thumbnail
            
            document.getElementById("image").innerHTML = pic;
            document.getElementById("title").innerHTML = title;
            document.getElementById("author").innerHTML = author;
            document.getElementById("publisher").innerHTML = publisher;
            document.getElementById("pubDate").innerHTML = publishedDate;
            


            // function testJson(element, value) {
            //     for (index in element) {
            //         // console.log(index)
                    
            //         let obj = element[index]
            //         if (value == index) {
            //             console.log(index + " : is friendly? " + obj.title)
            //             break
            //         }
            //     }
                
            // }
                
            // testJson(itemType, value)
            

            // callback(undefined,data);

        } else if (request.readyState === 4) {
            callback('could not fetch data', undefined);
        }
    });

    request.open('GET', 'https://www.googleapis.com/books/v1/volumes?q=Harry-Potter-Philosopher');
    request.send();
}
getBooks((err, data) => {
    console.log('callback fired');
    if(err) {
        console.log(err);
    } else {
        console.log(data);
    }
});