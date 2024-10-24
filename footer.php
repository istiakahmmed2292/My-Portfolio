<!-- Footer -->
<section class="w3l-footer py-sm-5 py-4">
  <div class="container">
    <div class="footer-content">
      <div class="row">
        <div class="col-lg-8 footer-left">
          <p class="m-0">Istiak Ahmmed  © Copyright 2020. Design by <a href="https://itmsofts.com">ITM SOFTS</a></p>
        </div>
        <div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
          <ul class="social m-0 p-0">
			<li><a target="_blank" href="https://twitter.com/SiyamIstiak"><span class="fa fa-twitter"></span></a></li> 
            <li><a target="_blank" href="https://github.com/istiakahmmed"><span class="fa fa-github"></span></a></li>
            <li><a target="_blank" href="https://www.facebook.com/istiak.legend"><span class="fa fa-facebook-official"></span></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/in/istiakahmmed/"><span class="fa fa-linkedin-square"></span></a></li>
            <li><a target="_blank" href="https://wa.me/qr/O3WRDMYGV44JB1"><span class="	fa fa-whatsapp"></span></a></li>
            <!--
            <li><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
            <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>		

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<!-- //Footer -->


<!-- all js scripts and files here -->

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<script src="assets/js/jquery-3.3.1.min.js"></script><!-- default jQuery -->

<!-- /typig-text-->
<script>
  const typedTextSpan = document.querySelector(".typed-text");
  const cursorSpan = document.querySelector(".cursor");

  const textArray = ["Freelancer", "Full-stack Web Developer","Network Engineer"];
  const typingDelay = 200;
  const erasingDelay = 10;
  const newTextDelay = 100; // Delay between current and next text
  let textArrayIndex = 0;
  let charIndex = 0;

  function type() {
    if (charIndex < textArray[textArrayIndex].length) {
      if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
      typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
      charIndex++;
      setTimeout(type, typingDelay);
    } else {
      cursorSpan.classList.remove("typing");
      setTimeout(erase, newTextDelay);
    }
  }

  function erase() {
    if (charIndex > 0) {
      // add class 'typing' if there's none
      if (!cursorSpan.classList.contains("typing")) {
        cursorSpan.classList.add("typing");
      }
      typedTextSpan.textContent = textArray[textArrayIndex].substring(0, 0);
      charIndex--;
      setTimeout(erase, erasingDelay);
    } else {
      cursorSpan.classList.remove("typing");
      textArrayIndex++;
      if (textArrayIndex >= textArray.length) textArrayIndex = 0;
      setTimeout(type, typingDelay);
    }
  }

  document.addEventListener("DOMContentLoaded", function () { // On DOM Load initiate the effect
    if (textArray.length) setTimeout(type, newTextDelay + 250);
  });
</script>
<!-- //typig-text-->

<!-- services owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for services -->
<script>
  $(document).ready(function () {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        700: {
          items: 1,
          nav: false
        },
        1090: {
          items: 3,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for services -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        },
        1000: {
          items: 2,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- video popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- //video popup -->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>