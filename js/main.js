// Spinner
  var spinner = function () {
    setTimeout(function () {
        if ($('#spinner').length > 0) {
            $('#spinner').removeClass('show');
        }
    }, 1);
};
spinner();

// Back to top button
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});
$('.back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
    return false;
});

(function ($) {
    "use strict";
    
    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('bg-white shadow-sm').css('top', '-1px');
        } else {
            $('.sticky-top').removeClass('bg-white shadow-sm').css('top', '-100px');
        }
    });
    
})(jQuery);


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
    var modalContent = document.querySelector("#exampleModal .modal-content");
    if (modalContent) {
        modalContent.insertBefore(closeButton, modalContent.firstChild);
  
        // Attach a click event listener to close the modal
        closeButton.addEventListener("click", function () {
            $('#exampleModal').modal('hide');
        });
    }
  });