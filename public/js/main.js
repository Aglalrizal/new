let signupBtn = document.getElementById("signupBtn");
let loginBtn = document.getElementById("loginBtn");
let nameField = document.getElementById("nameField");
let title = document.getElementById("title");
let signupForm = document.getElementById("signupForm");

loginBtn.onclick = function(){
    nameField.style.maxHeight = "0";
    title.innerHTML = "Log In";
    signupBtn.classList.add("disable");
    loginBtn.classList.remove("disable");
}

signupBtn.onclick = function(){
    nameField.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    signupBtn.classList.remove("disable");
    loginBtn.classList.add("disable");
}

// signupForm.addEventListener('keypress', function (e) {
//     if (e.key === 'Enter') {
//         window.location.href = 'index.html';
//     }
// });

//   if (e.key === 'Enter') {
//       window.location.href = 'index.html';
//   }
//   });
var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
  });

/* function init(){
    let tmbl_heart = document.querySelector('#tmbl_heart');

    tmbl_heart.addEventListener('click', () => {
    alert(' Dimasukkan ke Favorite ');
    });
} 

window.addEventListener('load', init()); */


window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}

document.querySelector('#search-icon').onclick = () => {
  document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () => {
  document.querySelector('#search-form').classList.remove('active');
}