// header
document.addEventListener("DOMContentLoaded", function () {
   // make it as accordion for smaller screens
   if (window.innerWidth > 992) {

      document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

         everyitem.addEventListener('mouseover', function (e) {

            let el_link = this.querySelector('a[data-bs-toggle]');

            if (el_link != null) {
               let nextEl = el_link.nextElementSibling;
               el_link.classList.add('show');
               nextEl.classList.add('show');
            }

         });
         everyitem.addEventListener('mouseleave', function (e) {
            let el_link = this.querySelector('a[data-bs-toggle]');

            if (el_link != null) {
               let nextEl = el_link.nextElementSibling;
               el_link.classList.remove('show');
               nextEl.classList.remove('show');
            }


         })
      });

   }
   // end if innerWidth
});
// DOMContentLoaded  end



// carousel 
$('.product__wrap').owlCarousel({
   loop: true,
   margin: 15,
   responsiveClass: true,
   dots: false,
   nav: true,
   navText: ['<i class="las la-arrow-left"></i>', '<i class="las la-arrow-right"></i>'],
   responsive: {
      0: {
         items: 1,
         nav: true
      },
      600: {
         items: 3,
         nav: true
      },
      1000: {
         items: 5,
         nav: true
      }
   }
});

$('.banner-slider').owlCarousel({
   loop: true,
   responsiveClass: true,
   dots: false,
   autoplay: true,
   autoplayTimeout: 3000,
   nav: false,
   responsive: {
      0: {
         items: 1,
      },
      600: {
         items: 1,
         nav: false
      },
      1000: {
         items: 1,
         nav: false
      }
   }
});

$('.about-img').owlCarousel({
   loop: true,
   responsiveClass: true,
   dots: false,
   autoplay: true,
   autoplayTimeout: 3000,
   nav: false,
   responsive: {
      0: {
         items: 1,
      },
      600: {
         items: 1,
         nav: false
      },
      1000: {
         items: 1,
         nav: false
      }
   }
});

// hamburger
// $(document).ready(function () {
//    $('#btn-close').click(function () {
//       $(this).toggleClass('open');
//    });
// });

// scrollup
$(window).scroll(function () {
   if ($(this).scrollTop() > 50) {
      $("#header").addClass("scrollUp");
   } else {
      $("#header").removeClass("scrollUp");
   }
});

// password
// Input field password type show/hide
function showPassword(id, el) {
   let x = document.getElementById(id);
   if (x.type === 'password') {
      x.type = 'text';
      el.innerHTML =
         '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg> ';
   } else {
      x.type = 'password';
      el.innerHTML =
         '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
   }
}

//  Details
$('#plus').click(function add() {
   var $qtde = $("#quantity");
   var a = $qtde.val();

   a++;
   $("#minus").attr("disabled", !a);
   $qtde.val(a);
});
$("#minus").attr("disabled", !$("#quantity").val());

$('#minus').click(function minusButton() {
   var $qtde = $("#quantity");
   var b = $qtde.val();
   if (b >= 1) {
      b--;
      $qtde.val(b);
   } else {
      $("#minus").attr("disabled", true);
   }
});



//  
/* calling script */
$(".xzoom, .xzoom-gallery").xzoom({ tint: '#333', Xoffset: 15 });


// search
$("#search").click(function(){ 
   $("#search-icon").toggle();
 });


//  

 (function($) {
  
   $('#search-button').on('click', function(e) {
     if($('#search-input-container').hasClass('hdn')) {
       e.preventDefault();
       $('#search-input-container').removeClass('hdn')
       return false;
     }
   });
   
   $('#hide-search-input-container').on('click', function(e) {
     e.preventDefault();
     $('#search-input-container').addClass('hdn')
     return false;
   });
   
 })(jQuery);