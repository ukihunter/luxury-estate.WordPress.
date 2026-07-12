window.addEventListener("scroll", () => {
  const nav = document.getElementById("main-nav");
  if (window.scrollY > 50) {
    nav.classList.add("scrolled");
    nav.classList.add("shadow-sm");
  } else {
    nav.classList.remove("scrolled");
    nav.classList.remove("shadow-sm");
  }
});

// Simple Parallax and Micro-interactions
document.querySelectorAll("section").forEach((section) => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("opacity-100");
          entry.target.classList.remove("opacity-0", "translate-y-10");
        }
      });
    },
    { threshold: 0.1 },
  );

  section.classList.add(
    "transition-all",
    "duration-1000",
    "ease-out",
    "opacity-0",
    "translate-y-10",
  );
  observer.observe(section);
});

document.addEventListener("DOMContentLoaded", () => {
  const menu = document.getElementById("mobile-menu");
  const openBtn = document.getElementById("mobile-menu-btn");
  const closeBtn = document.getElementById("close-menu");
  const overlay = document.getElementById("mobile-overlay");
  const icon = document.getElementById("menu-icon");

  function openMenu() {
    menu.classList.remove("translate-x-full");
    document.body.classList.add("overflow-hidden");
    icon.textContent = "close";
  }

  function closeMenu() {
    menu.classList.add("translate-x-full");
    document.body.classList.remove("overflow-hidden");
    icon.textContent = "menu";
  }

  openBtn.addEventListener("click", () => {
    if (menu.classList.contains("translate-x-full")) {
      openMenu();
    } else {
      closeMenu();
    }
  });

  closeBtn.addEventListener("click", closeMenu);

  overlay.addEventListener("click", closeMenu);
});
