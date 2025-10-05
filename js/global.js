// document.addEventListener("DOMContentLoaded", function () {

//   //counter-value
//   const counters = document.querySelectorAll(".counter-item .count");
//   if (counters.length > 0) {

//     function animateCounter(element, targetValue) {
//       const countElement = element;
//       let currentValue = 0;
//       const duration = 2000;
//       const increment = targetValue / (duration / 50);

//       function updateCounter() {
//         if (currentValue < targetValue) {
//           currentValue += increment;
//           countElement.textContent = Math.ceil(currentValue);
//           requestAnimationFrame(updateCounter);
//         } else {
//           countElement.textContent = targetValue;
//         }
//       }

//       updateCounter();
//     }

//     const options = {
//       root: null,
//       threshold: 0.5,
//     };

//     const observer = new IntersectionObserver((entries, observer) => {
//       entries.forEach(entry => {
//         if (entry.isIntersecting) {
//           const countElement = entry.target;
//           const targetValue = parseInt(countElement.getAttribute("data-target"), 10);
//           animateCounter(countElement, targetValue);
//           observer.unobserve(entry.target);
//         }
//       });
//     }, options);

//     counters.forEach(counter => {
//       observer.observe(counter);
//     });
//   }

//   //
  
// // sticky inner page navigation


// });


// document.addEventListener("DOMContentLoaded", function () {
//   // Sticky navbar shadow on scroll
//   const navbar = document.querySelector('.navbar');

//   if (navbar) {
//     window.addEventListener('scroll', () => {
//       if (window.scrollY > 50) {
//         navbar.style.boxShadow = 'rgba(149, 157, 165, 0.2) 0px 4px 24px';
//         navbar.style.backgroundColor = '#ffffff';
//       } else {
//         navbar.style.boxShadow = 'none';
//         navbar.style.backgroundColor = '#ffffff';
//       }
//     });
//   }

//   // Top-level dropdown icon rotation
//   document.querySelectorAll(".nav-item.dropdown").forEach(function (dropdown) {
//     const toggleIcon = dropdown.querySelector(".dropdown-toggle i");
//     if (!toggleIcon) return;

//     toggleIcon.style.transition = "transform 0.3s ease";

//     dropdown.addEventListener("shown.bs.dropdown", function () {
//       toggleIcon.classList.remove('fa-angle-down');
//       toggleIcon.classList.add('fa-minus');
//       toggleIcon.style.transform = "rotate(180deg)";
//     });

//     dropdown.addEventListener("hidden.bs.dropdown", function () {
//       toggleIcon.classList.remove('fa-minus');
//       toggleIcon.classList.add('fa-angle-down');
//       toggleIcon.style.transform = "rotate(0deg)";
//     });
//   });

//   // Submenu toggle
//   document.querySelectorAll('.dropdown-submenu > a').forEach(function (el) {
//     el.addEventListener('click', function (e) {
//       e.preventDefault();
//       e.stopPropagation();

//       const clickedSubmenu = this.nextElementSibling;

//       // Close other open submenus
//       document.querySelectorAll('.dropdown-submenu > .dropdown-menu.show').forEach(function (submenu) {
//         if (submenu !== clickedSubmenu) {
//           submenu.classList.remove('show');
//           const parentLink = submenu.previousElementSibling;
//           const icon = parentLink.querySelector('i');
//           if (icon) {
//             icon.classList.remove('fa-minus');
//             icon.classList.add('fa-angle-down');
//           }
//           parentLink.classList.remove('active');
//         }
//       });

//       // Toggle clicked submenu
//       if (clickedSubmenu && clickedSubmenu.classList.contains('dropdown-menu')) {
//         clickedSubmenu.classList.toggle('show');
//       }

//       // Toggle icon
//       const icon = this.querySelector('i');
//       if (icon) {
//         if (icon.classList.contains('fa-angle-down')) {
//           icon.classList.remove('fa-angle-down');
//           icon.classList.add('fa-minus');
//           this.classList.add('active');
//         } else {
//           icon.classList.remove('fa-minus');
//           icon.classList.add('fa-angle-down');
//           this.classList.remove('active');
//         }
//       }
//     });
//   });
// });


// document.addEventListener("DOMContentLoaded", function () {

//   function togglePopup(openId, closeId) {
//     document.getElementById(closeId).style.display = "none";
//     document.getElementById(openId).style.display = "block";
// }

// function closePopup(id) {
//     document.getElementById(id).style.display = "none";
// }
//   // Accordion Buttons
//   const accordionButtons = document.querySelectorAll('.accordion-button');
//   if (accordionButtons.length > 0) {
//     accordionButtons.forEach(button => {
//       button.addEventListener('click', function () {
//         const icon = this.querySelector('i');
//         const allIcons = document.querySelectorAll('.accordion-button i');

//         allIcons.forEach(icn => {
//           icn.classList.remove('fa-minus', 'rotate');
//           icn.classList.add('fa-plus');
//         });

//         setTimeout(() => {
//           if (!this.classList.contains('collapsed')) {
//             icon.classList.remove('fa-plus');
//             icon.classList.add('fa-minus', 'rotate');
//           } else {
//             icon.classList.remove('fa-minus', 'rotate');
//             icon.classList.add('fa-plus');
//           }
//         }, 300);
//       });
//     });
//   }

//   // Scroll container arrows
//   function scrollNav(amount) {
//     const container = document.querySelector('.scroll-container');
//     if (container) {
//       container.scrollBy({ left: amount, behavior: 'smooth' });
//       setTimeout(updateArrowVisibility, 300);
//     }
//   }

//   function updateArrowVisibility() {
//     const container = document.querySelector('.scroll-container');
//     const leftArrow = document.querySelector('.right-arrow');
//     const rightArrow = document.querySelector('.left-arrow');

//     if (container && leftArrow && rightArrow) {
//       leftArrow.style.display = container.scrollLeft <= 0 ? 'none' : 'block';
//       rightArrow.style.display = container.scrollLeft + container.clientWidth >= container.scrollWidth ? 'none' : 'block';
//     }
//   }

//   // Scroll container scroll event
//   const scrollContainer = document.querySelector('.scroll-container');
//   if (scrollContainer) {
//     scrollContainer.addEventListener('scroll', updateArrowVisibility);
//     updateArrowVisibility(); // on page load
//   }

//   // Smooth scroll for nav links
//   const navLinks = document.querySelectorAll('.nav-link');
//   if (navLinks.length > 0) {
//     navLinks.forEach(link => {
//       link.addEventListener('click', function (e) {
//         const id = this.getAttribute('href');
//         if (id && id.startsWith("#")) {
//           e.preventDefault();
//           const target = document.getElementById(id.substring(1));
//           if (target) {
//             const offset = 100;
//             const top = target.offsetTop - offset;
//             window.scrollTo({ top, behavior: 'smooth' });
//           }
//         }
//       });
//     });
//   }

//   // Sticky navbar container-fluid toggle + scrollspy
//   const navBar = document.getElementById('scrolling-nav');
//   const sections = document.querySelectorAll('.section');

//   window.addEventListener('scroll', () => {
//     const scrollY = window.scrollY;

//     if (navBar) {
//       if (scrollY > 300) {
//         navBar.classList.remove('container');
//         navBar.classList.add('container-fluid', 'full');
//       } else {
//         navBar.classList.remove('container-fluid', 'full');
//         navBar.classList.add('container');
//       }
//     }

//     // Scrollspy logic
//     if (sections.length > 0 && navLinks.length > 0) {
//       sections.forEach(section => {
//         const top = section.offsetTop - 120;
//         const bottom = top + section.offsetHeight;
//         if (scrollY >= top && scrollY < bottom) {
//           navLinks.forEach(link => {
//             link.classList.remove('active');
//             if (link.getAttribute('href').substring(1) === section.id) {
//               link.classList.add('active');
//               centerTab(link);
//             }
//           });
//         }
//       });
//     }
//   });

//   function centerTab(link) {
//     const scrollContainer = document.querySelector('.scroll-container');
//     if (scrollContainer && link) {
//       const linkOffsetLeft = link.offsetLeft;
//       const linkWidth = link.offsetWidth;
//       const containerWidth = scrollContainer.clientWidth;
//       const scrollLeft = linkOffsetLeft - (containerWidth / 2) + (linkWidth / 2);
//       scrollContainer.scrollTo({ left: scrollLeft, behavior: 'smooth' });
//     }
//   }

//   // Show More Service
//   const showMoreBtn = document.getElementById("showMoreBtn");
//   if (showMoreBtn) {
//     showMoreBtn.addEventListener("click", function () {
//       const hiddenCols = document.querySelectorAll(".hidden-cols");
//       if (hiddenCols.length > 0) {
//         const isHidden = hiddenCols[0].style.display === "none" || hiddenCols[0].style.display === "";
//         hiddenCols.forEach(col => col.style.display = isHidden ? "block" : "none");
//         this.textContent = isHidden ? "Show Less Service" : "View More Service";
//       }
//     });
//   }

//   // Why Choose Loanitol
//   const chooseMoreBtn = document.getElementById("chooseshowMoreBtn");
//   if (chooseMoreBtn) {
//     chooseMoreBtn.addEventListener("click", function () {
//       const hideCols = document.querySelectorAll(".hide-cols");
//       if (hideCols.length > 0) {
//         const isHidden = hideCols[0].style.display === "none" || hideCols[0].style.display === "";
//         hideCols.forEach(col => col.style.display = isHidden ? "block" : "none");
//         this.textContent = isHidden ? "Show Less" : "View More";
//       }
//     });
//   }

// });


document.addEventListener("DOMContentLoaded", function () {
  // Counter animation
  const counters = document.querySelectorAll(".counter-item .count");
  if (counters.length > 0) {
    function animateCounter(element, targetValue) {
      let currentValue = 0;
      const duration = 2000;
      const increment = targetValue / (duration / 50);

      function updateCounter() {
        if (currentValue < targetValue) {
          currentValue += increment;
          element.textContent = Math.ceil(currentValue);
          requestAnimationFrame(updateCounter);
        } else {
          element.textContent = targetValue;
        }
      }

      updateCounter();
    }

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const countElement = entry.target;
          const targetValue = parseInt(countElement.getAttribute("data-target"), 10);
          animateCounter(countElement, targetValue);
          observer.unobserve(countElement);
        }
      });
    }, { root: null, threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
  }

  // Sticky navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.style.boxShadow = window.scrollY > 50 ? 'rgba(149, 157, 165, 0.2) 0px 4px 24px' : 'none';
      navbar.style.backgroundColor = '#ffffff';
    });
  }

  // Dropdown icon rotation
  document.querySelectorAll(".nav-item.dropdown").forEach(dropdown => {
    const toggleIcon = dropdown.querySelector(".dropdown-toggle i");
    if (!toggleIcon) return;

    toggleIcon.style.transition = "transform 0.3s ease";

    dropdown.addEventListener("shown.bs.dropdown", () => {
      toggleIcon.classList.replace('fa-angle-down', 'fa-minus');
      toggleIcon.style.transform = "rotate(180deg)";
    });

    dropdown.addEventListener("hidden.bs.dropdown", () => {
      toggleIcon.classList.replace('fa-minus', 'fa-angle-down');
      toggleIcon.style.transform = "rotate(0deg)";
    });
  });

  // Dropdown submenu toggle
  document.querySelectorAll('.dropdown-submenu > a').forEach(el => {
    el.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();

      const clickedSubmenu = this.nextElementSibling;

      document.querySelectorAll('.dropdown-submenu > .dropdown-menu.show').forEach(submenu => {
        if (submenu !== clickedSubmenu) {
          submenu.classList.remove('show');
          const parentLink = submenu.previousElementSibling;
          const icon = parentLink.querySelector('i');
          if (icon) {
            icon.classList.replace('fa-minus', 'fa-angle-down');
            parentLink.classList.remove('active');
          }
        }
      });

      if (clickedSubmenu) {
        clickedSubmenu.classList.toggle('show');
      }

      const icon = this.querySelector('i');
      if (icon) {
        if (icon.classList.contains('fa-angle-down')) {
          icon.classList.replace('fa-angle-down', 'fa-minus');
          this.classList.add('active');
        } else {
          icon.classList.replace('fa-minus', 'fa-angle-down');
          this.classList.remove('active');
        }
      }
    });
  });

  // Accordion toggle icons
  const accordionButtons = document.querySelectorAll('.accordion-button');
  accordionButtons.forEach(button => {
    button.addEventListener('click', function () {
      const icon = this.querySelector('i');
      document.querySelectorAll('.accordion-button i').forEach(icn => {
        icn.classList.remove('fa-minus', 'rotate');
        icn.classList.add('fa-plus');
      });

      setTimeout(() => {
        if (!this.classList.contains('collapsed')) {
          icon.classList.replace('fa-plus', 'fa-minus');
          icon.classList.add('rotate');
        } else {
          icon.classList.replace('fa-minus', 'fa-plus');
          icon.classList.remove('rotate');
        }
      }, 300);
    });
  });

  // Scroll arrows
  function updateArrowVisibility() {
    const container = document.querySelector('.scroll-container');
    const leftArrow = document.querySelector('.right-arrow');
    const rightArrow = document.querySelector('.left-arrow');
    if (!container || !leftArrow || !rightArrow) return;

    leftArrow.style.display = container.scrollLeft <= 0 ? 'none' : 'block';
    rightArrow.style.display = container.scrollLeft + container.clientWidth >= container.scrollWidth ? 'none' : 'block';
  }

  const scrollContainer = document.querySelector('.scroll-container');
  if (scrollContainer) {
    scrollContainer.addEventListener('scroll', updateArrowVisibility);
    updateArrowVisibility();
  }

  // Smooth scroll nav links
  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function (e) {
      const id = this.getAttribute('href');
      if (id && id.startsWith("#")) {
        e.preventDefault();
        const target = document.getElementById(id.substring(1));
        if (target) {
          const offset = 100;
          const top = target.offsetTop - offset;
          window.scrollTo({ top, behavior: 'smooth' });
        }
      }
    });
  });

  // Scrollspy + fluid container toggle
  const navBar = document.getElementById('scrolling-nav');
  const sections = document.querySelectorAll('.section');
  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;

    if (navBar) {
      navBar.classList.toggle('container-fluid', scrollY > 300);
      navBar.classList.toggle('full', scrollY > 300);
      navBar.classList.toggle('container', scrollY <= 300);
    }

    document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
    sections.forEach(section => {
      const top = section.offsetTop - 120;
      const bottom = top + section.offsetHeight;
      if (scrollY >= top && scrollY < bottom) {
        const activeLink = document.querySelector(`.nav-link[href="#${section.id}"]`);
        if (activeLink) {
          activeLink.classList.add('active');
          centerTab(activeLink);
        }
      }
    });
  });

  function centerTab(link) {
    const container = document.querySelector('.scroll-container');
    if (container && link) {
      const scrollLeft = link.offsetLeft - (container.clientWidth / 2) + (link.offsetWidth / 2);
      container.scrollTo({ left: scrollLeft, behavior: 'smooth' });
    }
  }

  // Show More
  const showMoreBtn = document.getElementById("showMoreBtn");
  if (showMoreBtn) {
    showMoreBtn.addEventListener("click", function () {
      const hiddenCols = document.querySelectorAll(".hidden-cols");
      if (hiddenCols.length > 0) {
        const isHidden = hiddenCols[0].style.display === "none" || hiddenCols[0].style.display === "";
        hiddenCols.forEach(col => col.style.display = isHidden ? "block" : "none");
        this.textContent = isHidden ? "Show Less Service" : "View More Service";
      }
    });
  }

  // Choose More
  const chooseMoreBtn = document.getElementById("chooseshowMoreBtn");
  if (chooseMoreBtn) {
    chooseMoreBtn.addEventListener("click", function () {
      const hideCols = document.querySelectorAll(".hide-cols");
      if (hideCols.length > 0) {
        const isHidden = hideCols[0].style.display === "none" || hideCols[0].style.display === "";
        hideCols.forEach(col => col.style.display = isHidden ? "block" : "none");
        this.textContent = isHidden ? "Show Less" : "View More";
      }
    });
  }

  // Optional: Make togglePopup globally available
  window.togglePopup = function (openId, closeId) {
    const openEl = document.getElementById(openId);
    const closeEl = document.getElementById(closeId);
    if (openEl && closeEl) {
      closeEl.style.display = "none";
      openEl.style.display = "block";
    }
  };

  window.closePopup = function (id) {
    const el = document.getElementById(id);
    if (el) el.style.display = "none";
  };


// video play modal

document.querySelector('#videoModal .modal-body').addEventListener('click', function (e) {
    const video = document.getElementById('localVideo');
    if (!video.contains(e.target)) {
      const modalInstance = bootstrap.Modal.getInstance(document.getElementById('videoModal'));
      modalInstance.hide();
    }
  });
    const video = document.getElementById('localVideo');
    const modal = document.getElementById('videoModal');

    modal.addEventListener('shown.bs.modal', function () {
      video.currentTime = 0;
      video.play();
    });

    modal.addEventListener('hidden.bs.modal', function () {
      video.pause();
      video.currentTime = 0;
    });



});


