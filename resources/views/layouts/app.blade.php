<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optiemus Unmanned System</title>
  <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/ous-blue.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/ous-blue.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/qc.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/optiemus.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/whyus.css') }}" />
    <style>
    .hero .btn {
      padding: 10px 55px;
      background: linear-gradient(90deg, #0E4D78, #0A1F31);
      border-radius: 100px;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      transition: all 0.4s ease-in-out;
      position: relative;
      overflow: hidden;
    }

    /* Hover Effects */
    .hero .btn:hover {
      transform: scale(1.1);
      background: linear-gradient(90deg, #0A1F31, #0E4D78);
    }

    /* Glass Shine Effect */
    .hero .btn::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.3);
      transform: skewX(-30deg);
      transition: left 0.6s ease-in-out;
    }

    .hero .btn:hover::before {
      left: 100%;
    }


    .hero-content .btn:hover {
      background: #2CB98B;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: url('images/Slice\ 1\ \(8\).jpg') center/cover no-repeat;
    }

    .hero-left {
      min-height: 50vh;
    }

    .hero-right {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 2rem;
      /* background: rgba(255, 255, 255, 0.8); */
      align-items: flex-start;
    }

    .hero-content {
      color: #fff;
      padding: 450px 0px 60px 60px;
      border-radius: 10px;
    }

    /* p.lead{
  margin-left:90px;
} */
    .hero p {
      font-size: 30px;
      margin-bottom: 1.5rem;
      color: #000000;
      font-weight: 600;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        text-align: center;
        padding: 2rem 1rem;
      }

      .hero-left {
        min-height: 30vh;
        width: 100%;
      }

      .hero-right {
        align-items: center;
        text-align: center;
        padding: 1.5rem;
      }

      .hero-right button {
        width: 100%;
      }
    }
  </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ asset('images/logo/ous-blue.png') }}" style="width: 130px" /></a>
    </div>
    <ul class="nav-menu">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/why-us') }}">Why Us</a></li>
      <li>
        <a href="#">Products &#9662;</a>
        <ul class="dropdown">
          <li>
            <a href="{{ url('/defence-drone') }}">Defence Drone &#9656;</a>
            <ul class="sub-dropdown">
              <li><a href="{{ url('/vajra-qc-20') }}">Vajra QC 20</a></li>
              <li><a href="{{ url('/vajra-qc-65') }}">Vajra QC 65</a></li>
              <li><a href="{{ url('/vajra-qc-100') }}">Vajra QC 100</a></li>
              <li><a href="{{ url('/marak-pl-70') }}">Marak PL 70</a></li>
              <li><a href="{{ url('/darsh') }}">Darsh</a></li>
              <li><a href="{{ url('/ajeya-vt-80') }}">Ajeya VT 80</a></li>
            </ul>
          </li>
          <li>
            <a href="{{ url('/agriculture-drone') }}">Agriculture Drone &#9656;</a>
            <ul class="sub-dropdown">
              <li><a href="{{ url('/agri-shakti-10-l') }}">Agri Shakti 10L</a></li>
              <li><a href="{{ url('/agri-shakti-16-l') }}">Agri Shakti 16L</a></li>
              <li><a href="{{ url('/vajra-qc-p20') }}">Vajra QC P20</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="{{ url('/application') }}">Applications &#9662;</a>
        <ul class="dropdown">
          <li><a href="{{ url('/disaster-management') }}">Disaster Management</a></li>
          <li><a href="{{ url('/logistic') }}">Logistic</a></li>
          <li><a href="{{ url('/mapping-survey') }}">Mapping & Survey</a></li>
          <li><a href="{{ url('/agriculture') }}">Agriculture</a></li>
          <li><a href="{{ url('/asset-management') }}">Asset Management</a></li>
        </ul>
      </li>
      <li><a href="{{ url('/services') }}">Services</a></li>
      <li><a href="#">Career</a></li>
    </ul>
    <button class="contact-btn"><a href="{{ url('/contact') }}" style="text-decoration:none; color:#ffffff;">Contact
        Us</a></button>
    <div class="hamburger">&#9776;</div>
  </header>
  <div class="mobile-nav">
    <span class="close-menu">&times;</span>
    <ul>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/why-us') }}">Why Us</a></li>
      <li>
        <a href="#" class="toggle-dropdown">Products &#9662;</a>
        <ul class="mobile-dropdown">
          <li>
            <a href="#" class="toggle-dropdown">Defence Drone &#9656;</a>
            <ul class="mobile-sub-dropdown">
              <li><a href="{{ url('/vajra-qc-20') }}">Vajra QC 20</a></li>
              <li><a href="{{ url('/vajra-qc-65') }}">Vajra QC 65</a></li>
              <li><a href="{{ url('/vajra-qc-100') }}">Vajra QC 100</a></li>
              <li><a href="{{ url('/marak-pl-70') }}">Marak PL 70</a></li>
              <li><a href="{{ url('/darsh') }}">Darsh</a></li>
              <li><a href="{{ url('/ajeya-vt-80') }}">Ajeya VT 80</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="toggle-dropdown">Agriculture Drone &#9656;</a>
            <ul class="mobile-sub-dropdown">
              <li><a href="{{ url('/agri-shakti-10-l') }}">Agri Shakti 10L</a></li>
              <li><a href="{{ url('/agri-shakti-16-l') }}">Agri Shakti 16L</a></li>
              <li><a href="{{ url('/vajra-qc-p20') }}">Vajra QC P20</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" class="toggle-dropdown">Applications &#9662;</a>
        <ul class="mobile-dropdown">
          <li><a href="{{ url('/disaster-management') }}">Disaster Management</a></li>
          <li><a href="{{ url('/logistic') }}">Logistic</a></li>
          <li><a href="{{ url('/mapping-survey') }}">Mapping & Survey</a></li>
          <li><a href="{{ url('/agriculture') }}">Agriculture</a></li>
          <li><a href="{{ url('/asset-management') }}">Asset Management</a></li>
        </ul>
      </li>
      <li><a href="{{ url('/service') }}">Services</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </div>
  <script>
    document
      .querySelector(".hamburger")
      .addEventListener("click", function () {
        document.querySelector(".mobile-nav").classList.add("active");
      });

    document
      .querySelector(".close-menu")
      .addEventListener("click", function () {
        document.querySelector(".mobile-nav").classList.remove("active");
      });

    document.addEventListener("click", function (event) {
      let mobileNav = document.querySelector(".mobile-nav");
      let hamburger = document.querySelector(".hamburger");
      if (
        !mobileNav.contains(event.target) &&
        !hamburger.contains(event.target)
      ) {
        mobileNav.classList.remove("active");
      }
    });

    document.querySelectorAll(".toggle-dropdown").forEach((item) => {
      item.addEventListener("click", function (event) {
        event.preventDefault();
        this.parentElement.classList.toggle("active");
      });
    });
  </script>
  <div class="containermarquee">
    <div class="marquee">
      <div class="track">
        <div class="content">&nbsp;Experience cutting-edge drone technology with precision, reliability, and innovative
          design.</div>
      </div>
    </div>
  </div>

    <!-- Main Content -->
    <div>
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer class="footer">
            <div class="container">
                <div class="row footer-content">
                    <div class="col-md-2 footer-logo d-flex align-items-start">
                        <img src="images/ous-blue.png" alt="Company Logo">
                    </div>
                    <div class="col-md-2 footer-links">
                        <ul>
                            <li><strong class="font-lii">Useful Links</strong></li>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="why-us.php">Why Us</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="career.php">Career</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 footer-links">
                        <ul>
                            <li><strong class="font-lii">Drones</strong></li>
                            <li><a href="vajra-qc-20.php">Vajra QC 20</a></li>
                            <li><a href="vajra-qc-65.php">Vajra QC 65</a></li>
                            <li><a href="ajeya-vt-80.php">Ajeya VT 80</a></li>
                            <li><a href="agri-shakti-10-l.php">Agri Shakti 10L</a></li>
                            <li><a href="agri-shakti-16-l.php">Agri Shakti 16L</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 footer-links">
                        <ul>
                            <li><strong class="font-lii">Applications</strong></li>
                            <li><a href="logistic.php">Logistic</a></li>
                            <li><a href="agriculture.php">Agricultute</a></li>
                            <li><a href="mapping-survey.php">Mapping & Survey</a></li>
                            <li><a href="asset-management.php">Asset Management</a></li>
                            <li><a href="disaster-management.php">Disaster Management</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 footer-contact d-flex flex-column">
                        <p class="mb-2 address"><strong>Address:</strong> K-20, Second Floor, Lajpat Nagar-II, New
                            Delhi-110024</p>
                        <div class="footer-social">
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="footer-op">2025 Optiemus Unmanned Systems</p>
                <div class="language-selection">
                    <label for="language">Language:</label>
                    <select id="language" class="language-dropdown">
                        <option value="en">English</option>
                        <option value="es">Spanish</option>
                        <option value="fr">French</option>
                        <option value="de">German</option>
                    </select>
                </div>
            </div>
        </footer>

        <!--Footer end-->
</body>
<button id="scrollTopBtn" onclick="scrollToTop()">↑</button>
<script src="js/topscroll.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      let scrollTopBtn = document.getElementById("scrollTopBtn");
    
      if (scrollTopBtn) {
        // Ensure the button is hidden by default
        scrollTopBtn.style.display = "none";
    
        // Show or hide button on scroll
        window.addEventListener("scroll", function () {
          if (document.documentElement.scrollTop > 300 || document.body.scrollTop > 300) {
            scrollTopBtn.style.display = "block";
          } else {
            scrollTopBtn.style.display = "none";
          }
        });
    
        // Smooth scroll to top
        scrollTopBtn.addEventListener("click", function () {
          window.scrollTo({ top: 0, behavior: "smooth" });
        });
      }
    });
    
    </script>
    <script>
      //Top Scroll Start
document.addEventListener("DOMContentLoaded", function () {
    let scrollTopBtn = document.getElementById("scrollTopBtn");
  
    if (scrollTopBtn) {
      // Ensure the button is hidden by default
      scrollTopBtn.style.display = "none";
  
      // Show or hide button on scroll
      window.addEventListener("scroll", function () {
        if (document.documentElement.scrollTop > 300 || document.body.scrollTop > 300) {
          scrollTopBtn.style.display = "block";
        } else {
          scrollTopBtn.style.display = "none";
        }
      });
  
      // Smooth scroll to top
      scrollTopBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    }
  });
  
//Top Scroll End

//Application image animation start
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll("img.rad");

    const options = {
      root: null, // Observe relative to the viewport
      rootMargin: "0px",
      threshold: 0.5 // Trigger when at least 50% of the element is visible
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = "translateX(0)";
          entry.target.style.transition = "opacity 0.5s ease-in-out, transform 0.5s ease-in-out";
        } else {
          if (entry.target.classList.contains("left")) {
            entry.target.style.transform = "translateX(-50px)";
          } else {
            entry.target.style.transform = "translateX(50px)";
          }
          entry.target.style.opacity = 0;
        }
      });
    }, options);

    images.forEach(image => {
      image.style.opacity = 0;
      if (image.classList.contains("left")) {
        image.style.transform = "translateX(-50px)";
      } else {
        image.style.transform = "translateX(50px)";
      }
      observer.observe(image);
    });
  });

//Animation image animation end



//header code start
document
.querySelector(".hamburger")
.addEventListener("click", function () {
  document.querySelector(".mobile-nav").classList.add("active");
});

document
.querySelector(".close-menu")
.addEventListener("click", function () {
  document.querySelector(".mobile-nav").classList.remove("active");
});

document.addEventListener("click", function (event) {
let mobileNav = document.querySelector(".mobile-nav");
let hamburger = document.querySelector(".hamburger");
if (
  !mobileNav.contains(event.target) &&
  !hamburger.contains(event.target)
) {
  mobileNav.classList.remove("active");
}
});

document.querySelectorAll(".toggle-dropdown").forEach((item) => {
item.addEventListener("click", function (event) {
  event.preventDefault();
  this.parentElement.classList.toggle("active");
});
});

//header code end


//optienest image product page
// Query elements only within #optienest-wrapper to avoid collisions
const optienestImages = document.querySelectorAll('#optienest-wrapper .optienest-img');
const optienestDots = document.querySelectorAll('#optienest-wrapper .optienest-dots span');
let optienestIndex = 0;

function updateSlides() {
  optienestImages.forEach((img, i) => {
    // offset = distance from the current (active) slide
    const offset = (i - optienestIndex + optienestImages.length) % optienestImages.length;

    if (offset === 0) {
      // Active slide
      img.style.zIndex = optienestImages.length;
      img.style.transform = 'translateX(0) rotateY(0) scale(1)';
    } else {
      // Stacked slides behind the active one
      const xShift = 30 * offset;     // 30% offset per step
      const rotation = -10 * offset;  // -10deg rotation per step
      const scale = 1 - offset * 0.1;

      img.style.zIndex = optienestImages.length - offset;
      img.style.transform = `translateX(${xShift}%) rotateY(${rotation}deg) scale(${scale})`;
    }
  });

  // Update dots to reflect the active slide
  optienestDots.forEach((dot, idx) => {
    dot.classList.toggle('active', idx === optienestIndex);
  });
}

function prevSlide() {
  optienestIndex = (optienestIndex - 1 + optienestImages.length) % optienestImages.length;
  updateSlides();
}

function nextSlide() {
  optienestIndex = (optienestIndex + 1) % optienestImages.length;
  updateSlides();
}

// Initialize the Optienest carousel
updateSlides();


//optienest end

//payload product page
    document.addEventListener("DOMContentLoaded", function () {
        let currentIndex = 1;
        const items = document.querySelectorAll(".payload-carousel-item");
        const dots = document.querySelectorAll(".pp-dot");
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");

        function updateCarousel(newIndex) {
            items.forEach((item, i) => {
                item.classList.remove("pp-active", "pp-prev", "pp-next");
                if (i === newIndex) {
                    item.classList.add("pp-active");
                } else if (i === (newIndex - 1 + items.length) % items.length) {
                    item.classList.add("pp-prev");
                } else if (i === (newIndex + 1) % items.length) {
                    item.classList.add("pp-next");
                }
            });
            currentIndex = newIndex;
            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === newIndex);
            });
        }

        prevButton.addEventListener("click", function () {
            let newIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
            updateCarousel(newIndex);
        });

        nextButton.addEventListener("click", function () {
            let newIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
            updateCarousel(newIndex);
        });

        dots.forEach((dot, index) => {
            dot.addEventListener("click", function () {
                updateCarousel(index);
            });
        });
    });

//payload end



//product 360 degree image
    const images = [
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00001.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00002.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00003.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00004.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00005.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00006.jpg"
    ];
    
    let currentIndex = 0;
    let scale = 1;
    let isDragging = false;
    let startX = 0;
    
    const popup = document.getElementById("threepopup");
    const closeBtn = document.getElementById("closePopup");
    const viewer = document.getElementById("viewer");
    const overlay = document.getElementById("overlay");
    
    function openPopup() {
        popup.style.display = "flex";
        overlay.style.display = "block";
        loadImages();
    }
    
    function closePopup() {
        popup.style.display = "none";
        overlay.style.display = "none";
        viewer.innerHTML = "";
    }
    
    closeBtn.addEventListener("click", closePopup);
    overlay.addEventListener("click", closePopup);
    
    function loadImages() {
        viewer.innerHTML = "";
        images.forEach((src, index) => {
            const img = document.createElement("img");
            img.src = src;
            img.dataset.index = index;
            if (index === 0) img.style.display = "block";
            viewer.appendChild(img);
        });
    }

    // Enable image scrolling and zooming via buttons
    viewer.addEventListener("mousedown", (e) => {
        isDragging = true;
        startX = e.clientX;
    });

    viewer.addEventListener("mouseup", () => {
        isDragging = false;
    });

    viewer.addEventListener("mousemove", (e) => {
        if (!isDragging) return;
        const delta = e.clientX - startX;
        startX = e.clientX;
        currentIndex = (currentIndex + (delta > 0 ? -1 : 1) + images.length) % images.length;
        updateImage();
    });

    function updateImage() {
        document.querySelectorAll(".viewer img").forEach((img, index) => {
            img.style.display = index === currentIndex ? "block" : "none";
        });
    }

    document.getElementById("zoomIn").addEventListener("click", () => {
        scale += 0.1;
        viewer.style.transform = `scale(${scale})`;
    });

    document.getElementById("zoomOut").addEventListener("click", () => {
        scale = Math.max(1, scale - 0.1);
        viewer.style.transform = `scale(${scale})`;
    });
//product 360 end

//Feature waypoint based navigation start
const tabs = document.querySelectorAll(".tab");
const videos = document.querySelectorAll(".gallery_items");
let currentTabIndex = 0;

function switchTab(index) {
  document.querySelector(".tab.active").classList.remove("active");
  document.querySelector(".gallery_items.active").classList.remove("active");

  tabs[index].classList.add("active");
  videos[index].classList.add("active");

  let newVideo = videos[index].querySelector("video");
  newVideo.currentTime = 0;
  newVideo.play();
  currentTabIndex = index;
  autoSwitchTab();
}

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    switchTab(parseInt(tab.dataset.index));
  });
});

function autoSwitchTab() {
  let activeVideo = videos[currentTabIndex].querySelector("video");
  activeVideo.onended = () => {
    let nextIndex = (currentTabIndex + 1) % videos.length;
    switchTab(nextIndex);
  };
}

autoSwitchTab();

//Feature waypoint based navigation end


//common big video on all pages
const video = document.getElementById("video");
const playButton = document.getElementById("playButton");
const playIcon = playButton.querySelector("i");

playButton.addEventListener("click", function () {
  if (video.paused) {
    video.play();
    video.loop = true; // Enable looping
    playIcon.classList.remove("fa-play");
    playIcon.classList.add("fa-pause");
  } else {
    video.pause();
    video.currentTime = 0; // Reset video to start
    playIcon.classList.remove("fa-pause");
    playIcon.classList.add("fa-play");
  }
});

//common video end


//Just hero below image right side of the product page
document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".img-fluid.rounded");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("in-view");
        entry.target.classList.remove("out-of-view");
      } else {
        entry.target.classList.add("out-of-view");
        entry.target.classList.remove("in-view");
      }
    });
  }, { threshold: 0.3 }); // Adjust threshold for earlier/later appearance

  images.forEach((img) => observer.observe(img));
});

//hero below image end
    </script>
    <!-- <script src="{{ asset('js/commmon.js') }}"></script> -->

</html>