

<footer>
  <div>
    <div class="row">

      <!-- Services Column 1 -->
      <div class="col-md-4">
        <h4 class="mb-3">Service</h4>
        <ul class="list-unstyled">
          <li><i class="fas fa-car me-2"></i><a href="Urbania-Hire-in-Pune.php">Urbania Hire in Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="Urbania-On-Rent-In-Pune.php">Urbania On Rent In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="Urbania-On-Rent-In-Mumbai.php">Urbania On Rent In Mumbai</a></li>
          <li><i class="fas fa-car me-2"></i><a href="Urbania-On-Rent-In-Shirdi.php">Urbania On Rent In Shirdi</a></li>
          <li><i class="fas fa-car me-2"></i><a href="Tempo-Traveller-On-Rent-For-Outstation.php">Tempo Traveller On Rent For Outstation</a></li>
          <li><i class="fas fa-car me-2"></i><a href="17-Seater-On-Rent-In-Pune.php">17 Seater On Rent In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="20-Seater-On-Rent-In-Pune.php">20 Seater On Rent In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">13 Seater On Rent In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">15 Seater On Rent In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">10 Seater On Rent In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Urbania On Rent In Nashik</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">17 Seater Mini Bus On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">32 Seater Bus On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Luxury Mini Bus On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Luxury 32 Seater Bus On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Tata Winger On Rent in Pune</a></li>      </div>

      <!-- Services Column 2 -->
      <div class="col-md-4">
        <h4 class="mb-3">Service</h4>
        <ul class="list-unstyled">
          <li><i class="fas fa-car me-2"></i><a href="#">Luxury Tempo Traveller On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">AC Tempo Traveller On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">AC Bus On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Car Rental Services In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Innova Crysta On Rent In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="Tempo-Traveller-On-Rent-In-Pune.php">Tempo Traveller On Rent In Pune</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Pune to Mahabaleshwar Tempo Traveller On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Pune to Bhimashankar Tempo Traveller On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Pune to Shirdi Tempo Traveller On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Pune to Ashtavinayak Darshan Tempo Traveller</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Tempo Traveller Hire For Corporate Picnic</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Pune to Konkan Darshan Tempo Traveller On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Pune to Jyotirlinga Darshan Tempo Traveller Hire</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Pune to Mumbai Darshan Tempo Traveller On Rent</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Tempo Traveller On Rent For Pune Darshan</a></li>
          <li><i class="fas fa-car me-2"></i><a href="#">Tata Winger Hire in Pune</a></li>      </div>

      <!-- Contact Info -->
      <div class="col-md-4">
      <h4 class="mb-3">Service</h4>

        <h4 class="mb-3 col-og">Shree Travels</h4>
        <h5>Phone:</h5>
          <i class="fas fa-phone me-2"></i> +91 7875774499<br>
          <i class="fas fa-phone me-2"></i> +91 7620411277
        </p>
        <h5>Email:</h5>
        <i class="fas fa-envelope me-2"></i> pmargale83@gmail.com</p>
        <h5>Address:</h5>
          Shop no 12, Barate complex near,<br>
          Vandevi temple opp Ashok, Samrat school,<br>
          Karve Nagar, Pune 411052
        </p>
        <h5>Our Location:</h5>
        <div class="ratio ratio-16x9">
          <iframe 
            src="https://www.google.com/maps?q=Karve+Nagar,+Pune&output=embed"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>

    </div>


  </div>
</footer>
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
function openCustomLightbox(src) {
    document.getElementById('customLightboxImg').src = src;
    document.getElementById('customLightbox').style.display = 'flex';
}
function closeCustomLightbox() {
    document.getElementById('customLightbox').style.display = 'none';
}

  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>