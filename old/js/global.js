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
