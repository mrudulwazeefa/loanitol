document.addEventListener("DOMContentLoaded", function () {

  /* ---------------- Counter Animation ---------------- */
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
          if (!isNaN(targetValue)) {
            animateCounter(countElement, targetValue);
            observer.unobserve(countElement);
          }
        }
      });
    }, { root: null, threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
  }

  /* ---------------- Sticky Navbar Shadow ---------------- */
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.style.boxShadow = window.scrollY > 50
        ? 'rgba(149, 157, 165, 0.2) 0px 4px 24px'
        : 'none';
      navbar.style.backgroundColor = '#ffffff';
    });
  }

  /* ---------------- Dropdown Icon Rotation ---------------- */
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

  /* ---------------- Dropdown Submenu Toggle ---------------- */
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

      if (clickedSubmenu) clickedSubmenu.classList.toggle('show');

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

  /* ---------------- Accordion Toggle Icons ---------------- */
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

  /* ---------------- Scroll Arrows ---------------- */
  function updateArrowVisibility() {
    const container = document.querySelector('.scroll-container');
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');
    if (!container || !leftArrow || !rightArrow) return;

    leftArrow.style.display = container.scrollLeft <= 0 ? 'none' : 'block';
    rightArrow.style.display = container.scrollLeft + container.clientWidth >= container.scrollWidth
      ? 'none'
      : 'block';
  }

  const scrollContainer = document.querySelector('.scroll-container');
  if (scrollContainer) {
    scrollContainer.addEventListener('scroll', updateArrowVisibility);
    updateArrowVisibility();
  }

  /* ---------------- Smooth Scroll Nav Links ---------------- */
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

  /* ---------------- Scrollspy + Fluid Container ---------------- */
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

  /* ---------------- Show More / Less Buttons ---------------- */
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

  const showMorevideo = document.getElementById("showMorevideo");
  if (showMorevideo) {
    showMorevideo.addEventListener("click", function () {
      const hiddenCols = document.querySelectorAll(".hidden-cols");
      if (hiddenCols.length > 0) {
        const isVisible = hiddenCols[0].style.display === "block";
        hiddenCols.forEach(col => col.style.display = isVisible ? "none" : "block");
        this.textContent = isVisible ? "Show More" : "Hide Videos";
      }
    });
  }

  const showMoreReels = document.getElementById("showMoreReels");
  if (showMoreReels) {
    showMoreReels.addEventListener("click", function () {
      const hiddenCols = document.querySelectorAll(".hidden-cols-reels");
      if (hiddenCols.length > 0) {
        const isVisible = hiddenCols[0].style.display === "block";
        hiddenCols.forEach(col => col.style.display = isVisible ? "none" : "block");
        this.textContent = isVisible ? "Show More" : "Hide Videos";
      }
    });
  }

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

  /* ---------------- Popup Functions ---------------- */
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

  /* ---------------- Video Modal Autoplay ---------------- */
  const modals = document.querySelectorAll(".modal");
  modals.forEach(modal => {
    const video = modal.querySelector("video");
    modal.addEventListener("shown.bs.modal", () => {
      if (video) {
        video.muted = false;
        video.currentTime = 0;
        video.play().catch(err => console.log("Autoplay blocked:", err));
      }
    });
    modal.addEventListener("hide.bs.modal", () => {
      if (video) {
        video.pause();
        video.currentTime = 0;
      }
    });
  });

  /* ---------------- Search Input Animation (1 & 2) ---------------- */
  function initSearchAnimation(iconId, inputId, placeholderText) {
    const icon = document.getElementById(iconId);
    const input = document.getElementById(inputId);
    if (!icon || !input) return;

    icon.style.transition = 'width 0.3s ease, height 0.3s ease, transform 0.3s cubic-bezier(0.4,0,0.2,1)';
    input.style.transition = 'width 0.5s ease';

    const showPlaceholder = () => input.classList.add('show-placeholder');
    const hidePlaceholder = () => input.classList.remove('show-placeholder');

    icon.addEventListener('click', e => {
      e.stopPropagation();
      icon.style.fill = (icon.style.fill === '#ed102c' || icon.style.fill === 'rgb(237, 16, 44)') ? 'black' : '#ed102c';

      const isVisible = input.style.display === 'block';
      if (!isVisible) {
        input.placeholder = '';
        hidePlaceholder();
        input.style.display = 'block';
        input.style.width = '0px';
        icon.style.transform = 'translateX(-12px)';

        setTimeout(() => {
          input.style.width = '200px';
          input.style.marginLeft = '0.5rem';
          const delay = window.innerWidth <= 600 ? 100 : 200;
          setTimeout(() => {
            input.placeholder = placeholderText;
            showPlaceholder();
          }, delay);
        }, 10);

        if (window.innerWidth < 500) {
          icon.style.width = '18px';
          icon.style.height = '18px';
        } else {
          icon.style.width = '21px';
          icon.style.height = '21px';
        }
        input.focus();
      } else {
        input.placeholder = '';
        hidePlaceholder();
        input.style.width = '0px';
        input.style.marginLeft = '0.5rem';
        icon.style.transform = 'translateX(0)';
        icon.style.width = '25px';
        icon.style.height = '25px';
        setTimeout(() => {
          input.style.display = 'none';
        }, 300);
      }
    });

    input.addEventListener('input', () => input.value ? hidePlaceholder() : showPlaceholder());
    input.addEventListener('focus', () => { if (input.value) hidePlaceholder(); });
    input.addEventListener('blur', () => { if (!input.value) showPlaceholder(); });

    document.addEventListener('click', e => {
      if (!icon.contains(e.target) && !input.contains(e.target)) {
        input.style.width = '0px';
        input.style.marginLeft = '0.5rem';
        icon.style.transform = 'translateX(0)';
        icon.style.width = '25px';
        icon.style.height = '25px';
        setTimeout(() => input.style.display = 'none', 300);
        icon.style.fill = 'black';
      }
    });
  }

  initSearchAnimation('search-icon1', 'search-input1', 'Search Videos...');
  initSearchAnimation('search-icon2', 'search-input2', 'Search Reels...');
  initSearchAnimation('search-icon3', 'search-input2', 'Search Blog...');

});
