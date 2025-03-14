// Vendor carousel
$('.vendor-carousel').owlCarousel({
    loop: true,
    margin: 45,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayTimeout: 1000, 
    autoplayHoverPause: true,
    autoplaySpeed: 1000,
    smartSpeed: 1000,
    responsive: {
        0:{
            items:2
        },
        576:{
            items:4
        },
        768:{
            items:6
        },
        992:{
            items:8
        }
    }
});

document.addEventListener('DOMContentLoaded', () => {
    "use strict";
  
    // Latest-news-carousel
    $(".latest-news-carousel").owlCarousel({
      autoplay: true,
      smartSpeed: 2000,
      center: false,
      dots: true,
      loop: true,
      margin: 25,
      nav : true,
      navText : [
          '<i class="bi bi-arrow-left"></i>',
          '<i class="bi bi-arrow-right"></i>'
      ],
      responsiveClass: true,
      responsive: {
          0:{
              items:1
          },
          576:{
              items:1
          },
          768:{
              items:2
          },
          992:{
              items:3
          },
          1200:{
              items:4
          }
      }
  });
  
  });

  
document.addEventListener("DOMContentLoaded", function () {
    // Create a new button element
    var closeButton = document.createElement("button");
    closeButton.type = "button";
    closeButton.className = "close d-flex align-items-center justify-content-center";
    closeButton.setAttribute("data-dismiss", "modal");
    closeButton.setAttribute("aria-label", "Close");
  
    // Create an icon element for the close button
    var closeIcon = document.createElement("i");
    closeIcon.className = "bx bx-x";
    closeIcon.setAttribute("aria-hidden", "true");
  
    // Append the icon to the button
    closeButton.appendChild(closeIcon);
  
    // Find the modal content and append the close button
    var modalContent = document.querySelector("#exampleModalJob .modal-content");
    if (modalContent) {
        modalContent.insertBefore(closeButton, modalContent.firstChild);
  
        // Attach a click event listener to close the modal
        closeButton.addEventListener("click", function () {
            $('#exampleModalJob').modal('hide');
        });
    }
  });

  document.addEventListener("DOMContentLoaded", function () {
    // Create a new button element
    var closeButton = document.createElement("button");
    closeButton.type = "button";
    closeButton.className = "close d-flex align-items-center justify-content-center";
    closeButton.setAttribute("data-dismiss", "modal");
    closeButton.setAttribute("aria-label", "Close");
  
    // Create an icon element for the close button
    var closeIcon = document.createElement("i");
    closeIcon.className = "bx bx-x";
    closeIcon.setAttribute("aria-hidden", "true");
  
    // Append the icon to the button
    closeButton.appendChild(closeIcon);
  
    // Find the modal content and append the close button
    var modalContent = document.querySelector("#exampleModalCourse .modal-content");
    if (modalContent) {
        modalContent.insertBefore(closeButton, modalContent.firstChild);
  
        // Attach a click event listener to close the modal
        closeButton.addEventListener("click", function () {
            $('#exampleModalCourse').modal('hide');
        });
    }
  });