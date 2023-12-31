var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination-custom",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
  },
});

var Tawk_API = Tawk_API || {},
  Tawk_LoadStart = new Date();
(function () {
  var s1 = document.createElement("script"),
    s0 = document.getElementsByTagName("script")[0];
  s1.async = true;
  s1.src = "https://embed.tawk.to/6322fdd354f06e12d894e192/1gd0av1bg";
  s1.charset = "UTF-8";
  s1.setAttribute("crossorigin", "*");
  s0.parentNode.insertBefore(s1, s0);
})();

var onloadCallback = function () {
  grecaptcha.render("html_element", {
    sitekey: "6Lc_tw8pAAAAAOSpUt-sJT6mXiPQsfEDRTidqhV-",
  });
};

window.addEventListener("DOMContentLoaded", (event) => {
  /* Sticky Nav */
  $(window).scroll(function () {
    var height = $(".header").height();
    var scrollTop = $(window).scrollTop();

    if (scrollTop >= height) {
      $(".header").addClass("solid-nav-anim");
      $(".header").addClass("shadow-md");
    } else {
      $(".header").removeClass("solid-nav-anim");
      $(".header").removeClass("shadow-md");
    }
  });

  /* Particle JS */
  if (document.getElementById("particles-js")) {
    particlesJS("particles-js", {
      particles: {
        number: {
          value: 72,
          density: { enable: true, value_area: 1763.753266952075 },
        },
        color: { value: "#bb372a" },
        shape: {
          type: "circle",
          stroke: { width: 0, color: "#000000" },
          polygon: { nb_sides: 5 },
          image: { src: "img/github.svg", width: 100, height: 100 },
        },
        opacity: {
          value: 0.3,
          random: false,
          anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
        },
        size: {
          value: 5,
          random: true,
          anim: { enable: false, speed: 40, size_min: 0.1, sync: false },
        },
        line_linked: {
          enable: true,
          distance: 150,
          color: "#bb372a",
          opacity: 0.3,
          width: 2,
        },
        move: {
          enable: true,
          speed: 6,
          direction: "none",
          random: false,
          straight: false,
          out_mode: "out",
          bounce: false,
          attract: { enable: false, rotateX: 600, rotateY: 1200 },
        },
      },
      interactivity: {
        detect_on: "canvas",
        events: {
          onhover: { enable: false, mode: "repulse" },
          onclick: { enable: false, mode: "push" },
          resize: true,
        },
        modes: {
          grab: { distance: 400, line_linked: { opacity: 1 } },
          bubble: {
            distance: 400,
            size: 20,
            duration: 2,
            opacity: 8,
            speed: 3,
          },
          repulse: { distance: 200, duration: 0.4 },
          push: { particles_nb: 4 },
          remove: { particles_nb: 2 },
        },
      },
      retina_detect: true,
    });
  }
});
