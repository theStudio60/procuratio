  var isTouch = 'ontouchstart' in window || navigator.maxTouchPoints;

  if (isTouch) {
      document.body.classList.add('isTouch');
      //  document.getElementById("masthead").classList.remove("header");
      //  document.getElementById("masthead").classList.remove("header-mobile");

  };
  //AOS.init();
  AOS.init({
      disable: 'mobile',

      debounceDelay: 500, // the delay on debounce used while resizing window (advanced)


      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      // once: true, // whether animation should happen only once - while scrolling down
      mirror: true, // whether elements should animate out while scrolling past them


  });

  function openMenu() {
      document.getElementById("overlayMenu").classList.remove("mobile-menu--hidden");
      document.getElementById("overlayMenu").classList.add("mobile-menu--visible");

      document.getElementById("burger").classList.remove("header-mobile__burger--visible");
      document.getElementById("burger").classList.add("header-mobile__burger--hidden");

      document.getElementById("close").classList.remove("header-mobile__burger--hidden");
      document.getElementById("close").classList.add("header-mobile__burger--visible");

      preventScroll();
  }

  function closeMenu() {
      document.getElementById("overlayMenu").classList.remove("mobile-menu--visible");
      document.getElementById("overlayMenu").classList.add("mobile-menu--hidden");

      document.getElementById("burger").classList.remove("header-mobile__burger--hidden");
      document.getElementById("burger").classList.add("header-mobile__burger--visible");

      document.getElementById("close").classList.remove("header-mobile__burger--visible");
      document.getElementById("close").classList.add("header-mobile__burger--hidden");

      enableScroll();
  }

  const popupAlert = document.querySelector('.popup');
  // window.onload = function() {
  //popupAlert.classList.add("popup--visible");
  //};

  function closePopup() {
      popupAlert.classList.remove("popup--visible");
      popupAlert.classList.add("popup--hidden");
  }

  document.addEventListener("DOMContentLoaded", function() {
      var links = document.querySelectorAll(".navbar-nav li a:not([href='#'])");
      for (var x = 0; x < links.length; x++) {
          links[x].onclick = function() {
              closeMenu();
          }
      }
  });

  function preventScroll() {
      // Get the current page scroll position 
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      // if any scroll is attempted, set this to the previous value 
      window.onscroll = function() {
          window.scrollTo(scrollLeft, scrollTop);
      };
      //    window.addEventListener("wheel", function(e) { e.preventDefault(); }, { passive: false });
  };

  function enableScroll() {
      window.onscroll = function() {};
  };


  document.addEventListener("DOMContentLoaded", function() {
      var lazyloadImages;

      if ("IntersectionObserver" in window) {
          lazyloadImages = document.querySelectorAll(".lazy");
          var imageObserver = new IntersectionObserver(function(entries, observer) {
              entries.forEach(function(entry) {
                  if (entry.isIntersecting) {
                      var image = entry.target;
                      image.classList.remove("lazy");
                      imageObserver.unobserve(image);
                  }
              });
          });

          lazyloadImages.forEach(function(image) {
              imageObserver.observe(image);
          });
      } else {
          var lazyloadThrottleTimeout;
          lazyloadImages = document.querySelectorAll(".lazy");

          function lazyload() {
              if (lazyloadThrottleTimeout) {
                  clearTimeout(lazyloadThrottleTimeout);
              }

              lazyloadThrottleTimeout = setTimeout(function() {
                  var scrollTop = window.pageYOffset;
                  lazyloadImages.forEach(function(img) {
                      if (img.offsetTop < (window.innerHeight + scrollTop)) {
                          img.src = img.dataset.src;
                          img.classList.remove('lazy');
                      }
                  });
                  if (lazyloadImages.length == 0) {
                      document.removeEventListener("scroll", lazyload);
                      window.removeEventListener("resize", lazyload);
                      window.removeEventListener("orientationChange", lazyload);
                  }
              }, 20);
          }

          document.addEventListener("scroll", lazyload);
          window.addEventListener("resize", lazyload);
          window.addEventListener("orientationChange", lazyload);
      }
  })



  ;


  var scrollToTopBtn = document.querySelector(".button--scrollToTop")
  var rootElement = document.documentElement

  function handleScroll() {
      // Do something on scroll
      var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
      if ((rootElement.scrollTop / scrollTotal) > 0.50) {
          // Show button
          scrollToTopBtn.classList.add("showBtn")
      } else {
          // Hide button
          scrollToTopBtn.classList.remove("showBtn")
      }
  }

  function scrollToTop() {
      // Scroll to top logic
      rootElement.scrollTo({
          top: 0,
          behavior: "smooth"
      })
  }
  scrollToTopBtn.addEventListener("click", scrollToTop);
  document.addEventListener("scroll", handleScroll);