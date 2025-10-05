function togglePopup(openId, closeId) {
    document.getElementById(closeId).style.display = "none";
    document.getElementById(openId).style.display = "block";
}

function closePopup(id) {
    document.getElementById(id).style.display = "none";
}




// sticky inner page navigation

const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.style.boxShadow = 'rgba(149, 157, 165, 0.2) 0px 4px 24px';
        navbar.style.backgroundColor = '#ffffff';  
    } else {
        navbar.style.boxShadow = 'none';
        navbar.style.backgroundColor = '#ffffff'; 
    }
});


//navigation 

document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".nav-item.dropdown").forEach(function(dropdown) {
        const toggleIcon = dropdown.querySelector(".dropdown-toggle i");

        toggleIcon.style.transition = "transform 0.3s ease";

        dropdown.addEventListener("shown.bs.dropdown", function() {
            toggleIcon.classList.remove('fa-angle-down');
            toggleIcon.classList.add('fa-minus');
            toggleIcon.style.transform = "rotate(180deg)";
        });

        dropdown.addEventListener("hidden.bs.dropdown", function() {
            toggleIcon.classList.remove('fa-minus');
            toggleIcon.classList.add('fa-angle-down');
            toggleIcon.style.transform = "rotate(0deg)";
        });
    });
});


// dropdown

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.dropdown-submenu > a').forEach(function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        // Close all other submenus
        const allSubmenus = document.querySelectorAll('.dropdown-submenu > .dropdown-menu');
        allSubmenus.forEach(function (submenu) {
          if (submenu !== this.nextElementSibling && submenu.classList.contains('show')) {
            submenu.classList.remove('show');
            const parentLink = submenu.previousElementSibling;
            const icon = parentLink.querySelector('i');
            parentLink.classList.remove('active');
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-angle-down');
          }
        }, this);

        // Toggle the clicked submenu
        const submenu = this.nextElementSibling;
        if (submenu && submenu.classList.contains('dropdown-menu')) {
          submenu.classList.toggle('show');
        }

        // Toggle icon rotation and change
        const icon = this.querySelector('i');
        if (icon.classList.contains('fa-angle-down')) {
          icon.classList.remove('fa-angle-down');
          icon.classList.add('fa-minus');
          this.classList.add('active');
        } else {
          icon.classList.remove('fa-minus');
          icon.classList.add('fa-angle-down');
          this.classList.remove('active');
        }
      });
    });
  });
















// accordion-button

const accordionButtons = document.querySelectorAll('.accordion-button');

  accordionButtons.forEach(button => {
    button.addEventListener('click', function () {
      const icon = this.querySelector('i');
      const allIcons = document.querySelectorAll('.accordion-button i');

      allIcons.forEach(icn => {
        icn.classList.remove('fa-minus', 'rotate');
        icn.classList.add('fa-plus');
      });


      setTimeout(() => {
        if (!this.classList.contains('collapsed')) {
          icon.classList.remove('fa-plus');
          icon.classList.add('fa-minus', 'rotate');
        } else {
          icon.classList.remove('fa-minus', 'rotate');
          icon.classList.add('fa-plus');
        }
      }, 300); 
    });
  });


  // sticky nav
function scrollNav(amount) {
    const container = document.querySelector('.scroll-container');
    container.scrollBy({ left: amount, behavior: 'smooth' });
    setTimeout(updateArrowVisibility, 300);
  }

  function updateArrowVisibility() {
    const container = document.querySelector('.scroll-container');
    const leftArrow = document.querySelector('.right-arrow');
    const rightArrow = document.querySelector('.left-arrow');
    leftArrow.style.display = container.scrollLeft <= 0 ? 'none' : 'block';
    rightArrow.style.display = container.scrollLeft + container.clientWidth >= container.scrollWidth ? 'none' : 'block';
  }

  window.addEventListener('load', () => {
    updateArrowVisibility();
  });

  document.querySelector('.scroll-container').addEventListener('scroll', updateArrowVisibility);

  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const id = this.getAttribute('href').substring(1);
      const target = document.getElementById(id);
      const offset = 100;
      const top = target.offsetTop - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });

  // Toggle .container ↔ .container-fluid on scroll
  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    const navBar = document.getElementById('scrolling-nav');

    if (scrollY > 300) {
      navBar.classList.remove('container');
      navBar.classList.add('container-fluid', 'full');
    } else {
      navBar.classList.remove('container-fluid', 'full');
      navBar.classList.add('container');
    }

    // Scrollspy logic
    const sections = document.querySelectorAll('.section');
    const navLinks = document.querySelectorAll('.nav-link');

    sections.forEach(section => {
      const top = section.offsetTop - 120;
      const bottom = top + section.offsetHeight;
      if (scrollY >= top && scrollY < bottom) {
        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href').substring(1) === section.id) {
            link.classList.add('active');
            centerTab(link);
          }
        });
      }
    });
  });

  function centerTab(link) {
    const scrollContainer = document.querySelector('.scroll-container');
    const linkOffsetLeft = link.offsetLeft;
    const linkWidth = link.offsetWidth;
    const containerWidth = scrollContainer.clientWidth;
    const scrollLeft = linkOffsetLeft - (containerWidth / 2) + (linkWidth / 2);
    scrollContainer.scrollTo({ left: scrollLeft, behavior: 'smooth' });
  }


//showMoreBtn 

document.getElementById("showMoreBtn").addEventListener("click", function() {
  let hiddenCols = document.querySelectorAll(".hidden-cols");
  let isHidden = hiddenCols[0].style.display === "none" || hiddenCols[0].style.display === "";
  
  hiddenCols.forEach(col => col.style.display = isHidden ? "block" : "none");
  this.textContent = isHidden ? "Show Less Service" : "View More Service";
});


// why choose loanitol

document.getElementById("chooseshowMoreBtn").addEventListener("click", function() {
let hideCols = document.querySelectorAll(".hide-cols");
let isHidden = hideCols[0].style.display === "none" || hideCols[0].style.display === "";

hideCols.forEach(col => col.style.display = isHidden ? "block" : "none");
this.textContent = isHidden ? "Show Less" : "View More";
});


// counter load

 function animateCounter(element, targetValue) {
    const countElement = element;
    let currentValue = 0;
    const duration = 2000;
    const increment = targetValue / (duration / 50); 

    function updateCounter() {
      if (currentValue < targetValue) {
        currentValue += increment;
        countElement.textContent = Math.ceil(currentValue);
        requestAnimationFrame(updateCounter);
      } else {
        countElement.textContent = targetValue;
      }
    }

    updateCounter();
  }

  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter-item .count");

    const options = {
      root: null, 
      threshold: 0.5, 
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const countElement = entry.target;
          const targetValue = parseInt(countElement.getAttribute("data-target"), 10);
          animateCounter(countElement, targetValue);
          observer.unobserve(entry.target); 
        }
      });
    }, options);

    counters.forEach(counter => {
      observer.observe(counter);
    });
  });