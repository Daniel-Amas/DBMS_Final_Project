searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
  searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}
 
window.onscroll = () => {
  searchForm.classList.remove('active');

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }
}

window.onload = () => {
  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }
}

var swiper = new Swiper(".books-slider", {
  loop: true,
  centeredSlides: true,
  autoplay:{
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
    slidesPerView: 1,
    },
    768: {
    slidesPerView: 2,
    },
    1024: {
    slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});
  
var swiper = new Swiper(".arrivals-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
  
const getHunger = (callback) => {


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

