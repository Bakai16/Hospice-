// Volunteering
const titleVolunteering = document.querySelectorAll(
  ".accordions__inner__item__title"
);
titleVolunteering.forEach((titleVolunteering) => {
  titleVolunteering.addEventListener("click", (event) => {
    const activeTitleVolunteering = document.querySelector(
      ".accordions__inner__item__title.active"
    );
    if (
      activeTitleVolunteering &&
      activeTitleVolunteering !== titleVolunteering
    ) {
      activeTitleVolunteering.classList.toggle("active");
      activeTitleVolunteering.nextElementSibling.style.maxHeight = 0;
    }
    titleVolunteering.classList.toggle("active");
    const accordionBodyVolunteering = titleVolunteering.nextElementSibling;
    if (titleVolunteering.classList.contains("active")) {
      accordionBodyVolunteering.style.maxHeight =
        accordionBodyVolunteering.scrollHeight + "px";
    } else {
      accordionBodyVolunteering.style.maxHeight = 0;
    }
  });
});

// Volunteering Page Script
// ======================================
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 20,
  nav: true,
  navText: ["< ", " >"],
  dots: true,
  autoplay: true,
  autoplayTimeout: 5000,
  slideBy: 1,
  dotsSpeed: 50,
  dotsEach: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

// ======================================
// End Volunteering Page Script
