document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu toggle
  const mobileMenuBtn = document.getElementById("mobile-menu-btn")
  const mobileMenu = document.getElementById("mobile-menu")

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden")
    })
  }

  // Hero slider functionality
  const heroSlides = document.querySelectorAll(".hero-slide")
  let currentSlide = 0

  if (heroSlides.length > 1) {
    function showSlide(index) {
      heroSlides.forEach((slide, i) => {
        if (i === index) {
          slide.style.opacity = "1"
          slide.style.zIndex = "1"
        } else {
          slide.style.opacity = "0"
          slide.style.zIndex = "0"
        }
      })
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % heroSlides.length
      showSlide(currentSlide)
    }

    // Initialize first slide
    showSlide(0)

    // Auto-advance slides every 5 seconds
    setInterval(nextSlide, 5000)

    // Add slide indicators
    const heroContainer = document.querySelector(".hero")
    if (heroContainer) {
      const indicators = document.createElement("div")
      indicators.className = "hero-indicators"
      indicators.style.cssText = `
                position: absolute;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                gap: 10px;
                z-index: 10;
            `

      heroSlides.forEach((_, index) => {
        const indicator = document.createElement("button")
        indicator.className = "hero-indicator"
        indicator.style.cssText = `
                    width: 12px;
                    height: 12px;
                    border-radius: 50%;
                    border: 2px solid white;
                    background: ${index === 0 ? "white" : "transparent"};
                    cursor: pointer;
                    transition: all 0.3s ease;
                `

        indicator.addEventListener("click", () => {
          currentSlide = index
          showSlide(currentSlide)
          updateIndicators()
        })

        indicators.appendChild(indicator)
      })

      heroContainer.appendChild(indicators)

      function updateIndicators() {
        const indicatorButtons = indicators.querySelectorAll(".hero-indicator")
        indicatorButtons.forEach((btn, index) => {
          btn.style.background = index === currentSlide ? "white" : "transparent"
        })
      }
    }
  }

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()
      const target = document.querySelector(this.getAttribute("href"))
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })

  // Form submission handling
  const forms = document.querySelectorAll("form")
  forms.forEach((form) => {
    form.addEventListener("submit", function (e) {
      // Add form validation here if needed
      console.log("Form submitted:", this)
    })
  })

  // Dropdown menu functionality
  const dropdowns = document.querySelectorAll(".dropdown")
  dropdowns.forEach((dropdown) => {
    const menu = dropdown.querySelector(".dropdown-menu")
    let timeout

    dropdown.addEventListener("mouseenter", () => {
      clearTimeout(timeout)
      if (menu) {
        menu.style.opacity = "1"
        menu.style.visibility = "visible"
        menu.style.transform = "translateY(0)"
      }
    })

    dropdown.addEventListener("mouseleave", () => {
      timeout = setTimeout(() => {
        if (menu) {
          menu.style.opacity = "0"
          menu.style.visibility = "hidden"
          menu.style.transform = "translateY(-10px)"
        }
      }, 150)
    })
  })

  // Scroll to top functionality
  const scrollToTopBtn = document.getElementById("scroll-to-top")
  if (scrollToTopBtn) {
    window.addEventListener("scroll", () => {
      if (window.pageYOffset > 300) {
        scrollToTopBtn.style.display = "block"
      } else {
        scrollToTopBtn.style.display = "none"
      }
    })

    scrollToTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      })
    })
  }
})
