<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>

    new Swiper(".swiper", {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    // -------------
    document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    let hasCounted = false;

    const runCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const increment = target / 100;

      const updateCount = () => {
        const current = +counter.innerText.replace(/[^\d]/g, '');
        if (current < target) {
          counter.innerText = Math.ceil(current + increment).toLocaleString() + '+';
          setTimeout(updateCount, 30);
        } else {
          counter.innerText = target.toLocaleString() + '+';
        }
      };

      updateCount();
    };

    const statsElement = document.getElementById('stats');
    if (statsElement) {
      const observerStat = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !hasCounted) {
            counters.forEach(counter => runCounter(counter));
            hasCounted = true;
            observerStat.disconnect();
          }
        });
      }, {
        threshold: 0.3
      });

      observerStat.observe(statsElement);
    }
  });
    
    // ---------------
    const slides = document.querySelectorAll('.hero-slide');
    let currentIndex = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) slide.classList.add('active');
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      showSlide(currentIndex);
    }

    setInterval(nextSlide, 5000);
    // -----------
    document.addEventListener("DOMContentLoaded", () => {
  const observerNew = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      console.log("Observed:", entry.target);
      if (entry.isIntersecting) {
        console.log("Showing:", entry.target); 
        entry.target.classList.add('show');
        observerNew.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });

  document.querySelectorAll('.fade-in-on-scroll').forEach(el => {
    observerNew.observe(el);
  });
});
// ----------
const navToggle = document.getElementById('navToggle');
const navMenu = document.querySelector('.navs');

// Toggle mobile menu
navToggle.addEventListener('click', () => {
  navMenu.classList.toggle('active');
});

// Dropdown toggle on mobile
const listItems = document.querySelectorAll('.navs > li');

listItems.forEach(item => {
  const submenu = item.querySelector('.drops');
  if (submenu) {
    item.addEventListener('click', e => {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        // Toggle show class only on this item, remove from others
        listItems.forEach(i => {
          if (i !== item) i.classList.remove('show');
        });
        item.classList.toggle('show');
      }
    });
  }
});

  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>