const proj_nav =document.querySelectorAll(".proj-link");
const proj_content =document.querySelectorAll(".proj-display");
proj_nav.forEach((star) => {
  star.addEventListener("click", () => {
    removeActiveStar();
    star.classList.add("active");
    const activeContent= document.querySelector(`#${star.id}-content`);
    removeActiveContent();
    activeContent.classList.add("active");
  })
})

function removeActiveStar(){
  proj_nav.forEach((star) => {
    star.classList.remove("active");
  })
}

function removeActiveContent(){
    proj_content.forEach((star) => {
    star.classList.remove("active");
  })
}

const toggleMenu = document.querySelector(".toggle__menu");
const headerBot = document.querySelector(".header__nav ul");
const closing = document.querySelector(".header__nav ul li a")
toggleMenu.addEventListener("click", () => {
  toggleMenu.classList.toggle("open");
  headerBot.classList.toggle("open");
    headerBot.style=("transition: .5s ease");
});

const actclosing =document.querySelectorAll(".closed");
actclosing.forEach((sara) => {
  sara.addEventListener("click", () => {
    removeActiveclose();
    sara.classList.add("active");
    headerBot.classList.remove("open");
    toggleMenu.classList.remove("open");
    headerBot.style=("transition: .5s ease");
  })
});
function removeActiveclose(){
  actclosing.forEach((sara) => {
    sara.classList.remove("active");
  })
};

var slider = tns({
    container: '.my-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    controls: false,
  });

  var slider = tns({
    container: '.my-slider1',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    controls: false,
  });

var toTopButton = document.getElementById("to-top-button");

    // When the user scrolls down 200px from the top of the document, show the button
    window.onscroll = function () {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    }

    // When the user clicks on the button, smoothy scroll to the top of the document
    function goToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth', });
        removeActiveclose();
        const home = document.getElementById('#home-link');
        home.classList.add('active');
    }
