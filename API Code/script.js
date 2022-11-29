// 'use strict';
// require('dotenv').config()

// const axios = require('axios');
// const fs = require('fs');

// const {GOOGLE_BOOKS_KEY} = process.env;

// const lists = {
//     "getting-first-100-customers": ["Harry Potter"]

// }

// const books = {}
// const saveBooks = async() => {
//     for (const key in lists) {
//         let booksInCategory = []
//         for(const bookTitle of lists[key]) {
//             const volume = await get(`https://www.googleapis.com/books/v1/volumes?q=${bookTitle}&key=${GOOGLE_BOOKS_KEY}&maxResults=1`)

//             const { data } = volume
//             console.log({ data: data.items[0] })

//             if (data && data.items && data.items.length > 0) {
//                 const book = await get(data.items[0].selfLink)
//                 console.log({ book })
//                 booksInCategory.push(book.data)

//             } else {
//                 console.info(`${bookTitle} not found`)
//             }
//         }
//         books[key] = booksInCategory
//     }
//     writeFileSync('./generator/data.json', JSON.stringify(books));
// }
// saveBooks()
const getTodos = (callback) => {


    const request = new XMLHttpRequest();

    request.addEventListener('readystatechange', () => {
        // console.log(request, request.readState);
        if (request.readyState === 4 && request.status === 200) {
            //Parse the responseText into JSON format
            const data = JSON.parse(request.responseText);
            callback(undefined,data);
        } else if (request.readyState === 4) {
            callback('could not fetch data', undefined);
        }
    });

    request.open('GET', 'https://www.googleapis.com/books/v1/volumes?q=Harry Potter');
    request.send();
}
getTodos((err, data) => {
    console.log('callback fired');
    if(err) {
        console.log(err);
    } else {
        console.log(data);
    }
});