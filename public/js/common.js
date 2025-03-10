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