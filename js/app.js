/*******Burger******/

document.querySelector('.burger').addEventListener('click', function () {
  document.querySelector('.burger', '.menu').classList.toggle('active');
  document.querySelector('.menu').classList.toggle("open");
  document.querySelector('body').classList.toggle("fixed");
});

// END BURGER SCRIPTS



// NEED HELP PAGE SCRIPTS
const accordionHeader = document.querySelectorAll('.programs-first-kids-hospice__inner__all-accordions__accordion__header');

accordionHeader.forEach(accordionHeader => {
  accordionHeader.addEventListener('click', event => {
    const currentActiveHeader = document.querySelector('.programs-first-kids-hospice__inner__all-accordions__accordion__header.active');
    if (currentActiveHeader && currentActiveHeader !== accordionHeader) {
      currentActiveHeader.classList.toggle('active');
      currentActiveHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionHeader.classList.toggle('active');
    const accordionBody = accordionHeader.nextElementSibling;

    if (accordionHeader.classList.contains('active')) {
      accordionBody.style.maxHeight = accordionBody.scrollHeight + 'px';
    } else {
      accordionBody.style.maxHeight = 0;
    }
  });
});
// END NEED HELP PAGE SCRIPTS


const accordionEntity = document.querySelectorAll('.blc-programs-toggle__inner__all-accordions__accordion__header');

accordionEntity.forEach(accordionEntitys => {
  accordionEntitys.addEventListener('click', event => {
    const currentActiveHeader = document.querySelector('.blc-programs-toggle__inner__all-accordions__accordion__header.active');
    if (currentActiveHeader && currentActiveHeader !== accordionEntitys) {
      currentActiveHeader.classList.toggle('active');
      currentActiveHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionEntitys.classList.toggle('active');
    const accordionBody = accordionEntitys.nextElementSibling;

    if (accordionEntitys.classList.contains('active')) {
      accordionBody.style.maxHeight = accordionBody.scrollHeight + 'px';
    } else {
      accordionBody.style.maxHeight = 0;
    }
  });
});
// END LEGAL-ENTITY SCRIPTS


// INDIVIDUALS PAGE SCRIPTS
// window.forEach(window => {
window.addEventListener("load", function () {
  const btn = document.querySelector(".individuals_link");
  const window = document.querySelector(".btn-modal");
  const windowClose = document.querySelector(".off");

  btn.addEventListener("click", function () {
    window.classList.toggle("active");
  });

  windowClose.addEventListener("click", function () {
    window.classList.remove("active");

  });
});


window.addEventListener("load", function () {
  const btn2 = document.querySelector(".individuals_link2");
  const window2 = document.querySelector(".btn-modal2");
  const windowClose2 = document.querySelector(".off2");

  btn2.addEventListener("click", function () {
    window2.classList.toggle("active");
  });

  windowClose2.addEventListener("click", function () {
    window2.classList.remove("active");

  });
});

window.addEventListener("load", function () {
  const btn3 = document.querySelector(".individuals_link3");
  const window3 = document.querySelector(".btn-modal3");
  const windowClose3 = document.querySelector(".off3");

  btn3.addEventListener("click", function () {
    window3.classList.toggle("active");
  });

  windowClose3.addEventListener("click", function () {
    window3.classList.remove("active");

  });
});

window.addEventListener("load", function () {
  const btn4 = document.querySelector(".individuals_link4");
  const window4 = document.querySelector(".btn-modal4");
  const windowClose4 = document.querySelector(".off4");

  btn4.addEventListener("click", function () {
    window4.classList.toggle("active");
  });

  windowClose4.addEventListener("click", function () {
    window4.classList.remove("active");

  });
});
// });


//Main ourkids slider
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 1,
  speed: 500,
  slidesToScroll: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    300: {
      slidesPerView: 'auto',
      spaceBetween: 30
    },
    500: {
      slidesPerView: 1,
      spaceBetween: 70
    },
    672: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    700: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 50
    },
    885: {
      slidesPerView: 3,
      spaceBetween: 8
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    1192: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  }
});






//slider mainpage our-sponsors
$(document).ready(function () {
  $('.blc-sponsor_slider').slick({
    arrows: true,
    dots: true,
    slidesToShow: 4,
    autoplay: true,
    speed: 2000,
    autoplaySpeed: 900,
    responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
});


///main page filter
const filterItem = document.querySelector(".blc-news_control");
const filterImg = document.querySelectorAll(".list-container .vid-list");

window.onload = ()=>{ //after window loaded
  filterItem.onclick = (selectedItem)=>{ //if user click on filterItem div
    if(selectedItem.target.classList.contains("itemz")){ //if user selected item has .item class
      filterItem.querySelector(".activez").classList.remove("activez"); //remove the active class which is in first item
      selectedItem.target.classList.add("activez"); //add that active class on user selected item
      let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
      filterImg.forEach((image) => {
        let filterImges = image.getAttribute("data-name"); //getting image data-name value
        //if user selected item data-name value is equal to images data-name value
        //or user selected item data-name value is equal to "all"
        if((filterImges == filterName) || (filterName == "all")){
          image.classList.remove("hide"); //first remove the hide class from the image
          image.classList.add("show"); //add show class in image
        }else{
          image.classList.add("hide"); //add hide class in image
          image.classList.remove("show"); //remove show class from the image
        }
      });
    }
  };
  for (let i = 0; i < filterImg.length; i++) {
    filterImg[i].setAttribute("onclick", "preview(this)"); //adding onclick attribute in all available images
  }
};


// pagination  main page 
function getPageList(totalPages, page, maxLength) {
  function range(start, end) {
    return Array.from(Array(end - start + 1), (_, i) => i + start);
  }

  var sideWidth = maxLength < 9 ? 1 : 2;
  var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
  var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

  if (totalPages <= maxLength) {
    return range(1, totalPages);
  }

  if (page <= maxLength - sideWidth - 1 - rightWidth) {
    return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages + 1, totalPages));
  }

  if (page >= totalPages - sideWidth - 1 - rightWidth) {
    return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
  }

  return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
}

$(function () {
  var numberOfItems = $(".list-container .vid-list").length;
  var limitPerPage = 8; //How many vid-list items visible per a page
  var totalPages = Math.ceil(numberOfItems / limitPerPage);
  var paginationSize = 5; // How many page elements visible in the pagination
  var currentPage;


  function showPage(whichPage) {
    if (whichPage < 1 || whichPage > totalPages) return false;

    currentPage = whichPage;

    $(".list-container .vid-list").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

    $(".paginationn li").slice(1, -1).remove();


    getPageList(totalPages, currentPage, paginationSize).forEach(item => {
      $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots").toggleClass("activee", item === currentPage).append($("<a>").addClass("page-link").attr({
        href: "javascript:void(0)"
      }).text(item || "...")).insertBefore(".next-page");
    });

    $(".previous-page").toggleClass("disable", currentPage === 1);
    $(".next-page").toggleClass("disable", currentPage === totalPages);
    return true;
  }


  $(".paginationn").append(
    $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({
      href: "javascript:void(0)"
    }).text("Prev")),
    $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({
      href: "javascript:void(0)"
    }).text("Next"))
  );

  $(".list-container").show();
  showPage(2);

  $(document).on("click", ".paginationn li.current-page:not(.activee)", function () {
    return showPage(+$(this).text());
  });

  $(".next-page").on("click", function () {
    return showPage(currentPage + 1);
  });
  $(".previous-page").on("click", function () {
    return showPage(currentPage - 1);
  });
});



///contact form  mainpage
const email = document.querySelector("#email");
const icon1 = document.querySelector(".icon1");
const icon2 = document.querySelector(".icon2");
const error = document.querySelector(".error-text");
let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

function check() {
  if (email.value.match(regExp)) {
    email.style.borderColor = "#27ae60";
    email.style.background = "#eafaf1";
    icon1.style.display = "none";
    icon2.style.display = "block";
    error.style.display = "none";
  } else {
    email.style.borderColor = "#e74c3c";
    email.style.background = "#fceae9";
    icon1.style.display = "block";
    icon2.style.display = "none";
    error.style.display = "block";
  }
  if (email.value == "") {
    email.style.borderColor = "lightgrey";
    email.style.background = "#fff";
    icon1.style.display = "none";
    icon2.style.display = "none";
    error.style.display = "none";
  }
}





/// our kids %
const progressBars = document.querySelectorAll('.progress-bar');

progressBars.forEach(item=> {
  const value = item.dataset.progress;
  item.style.opacity = 1;
  item.style.width = `${value}%`;

  console.log(value);
});



