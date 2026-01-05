// Hide loader when page is fully loaded
window.addEventListener("load", () => {
	const loader = document.getElementById("loader");
	if (loader) {
		loader.style.opacity = "0";
		loader.style.transition = "opacity 0.5s ease";
		setTimeout(() => {
			loader.style.display = "none";
		}, 500);
	}
});

document.addEventListener("DOMContentLoaded", () => {
	const links = document.querySelectorAll(".nav-links a");

	links.forEach((link) => {
		link.addEventListener("click", (event) => {
			event.preventDefault(); // Empêche le rechargement

			const url = new URL(link.href);
			const section = url.pathname.replace("/", "");

			// Met à jour l’URL sans recharger
			window.history.pushState({}, "", "/" + section);

			// Scroll vers la section cible
			const target = document.getElementById(section);
			if (target) {
				target.scrollIntoView({
					behavior: "smooth",
				});
			}
		});
	});

	// Si on arrive sur la page avec une URL type  :
	const current = window.location.pathname.replace("/", "");
	if (current) {
		const section = document.getElementById(current);
		if (section) {
			setTimeout(() => {
				section.scrollIntoView({
					behavior: "smooth",
				});
			}, 100);
		}
	}
});

/*
 * code JS qui gére le menu burger
 */

document.addEventListener("DOMContentLoaded", function () {
	const menuToggle = document.getElementById("menu-toggle");
	const navLinks = document.querySelectorAll(".nav-link a");

	navLinks.forEach((link) => {
		link.addEventListener("click", () => {
			// Fermer le menu en décochant le checkbox
			menuToggle.checked = false;
		});
	});
});

/**
 * dynamism imges
 */
const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.add("visible");
		} else {
			entry.target.classList.remove("visible");
		}
	});
});
document
	.querySelectorAll(".fade-in-right, .fade-in-left")
	.forEach((el) => observer.observe(el));

/**
 * MAILLING
 */
const contactForm = document.querySelector("#contact-form");
if (contactForm) {
	contactForm.addEventListener("submit", async (e) => {
		e.preventDefault();
		const form = e.target;
		try {
			const response = await fetch(form.action, {
				method: "POST",
				body: new FormData(form),
			});

			const contentType = response.headers.get("content-type") || "";
			let payload;

			if (contentType.includes("application/json")) {
				payload = await response.json();
			} else {
				const fallbackText = await response.text();
				if (fallbackText.trim().startsWith("<")) {
					throw new Error("Réponse inattendue du serveur.");
				}
				throw new Error(
					fallbackText || "Réponse inattendue du serveur."
				);
			}

			if (!response.ok || payload.status !== "success") {
				throw new Error(
					payload.message || "Une erreur inattendue est survenue."
				);
			}

			alert(payload.message || "Message envoyé.");
			form.reset();
		} catch (error) {
			const message =
				error instanceof Error
					? error.message
					: "Une erreur inattendue est survenue.";
			alert("Oups : " + message);
		}
	});
}

// Theme switcher
document.addEventListener("DOMContentLoaded", () => {
	const switcher = document.querySelector(".theme-switcher");
	if (!switcher) return;

	const toggleButton = switcher.querySelector(".theme-switcher__toggle");
	const closeButton = switcher.querySelector(".theme-switcher__close");
	const options = switcher.querySelectorAll(".theme-option");

	const setActiveOption = (theme) => {
		options.forEach((btn) => {
			const isActive = btn.dataset.theme === theme;
			btn.classList.toggle("is-active", isActive);
			btn.setAttribute("aria-pressed", isActive ? "true" : "false");
		});
	};

	const applyTheme = (theme) => {
		document.body.dataset.theme = theme;
		localStorage.setItem("preferred-theme", theme);
		setActiveOption(theme);
	};

	const savedTheme = localStorage.getItem("preferred-theme") || "dark";
	applyTheme(savedTheme);

	options.forEach((btn) => {
		btn.addEventListener("click", () => {
			const { theme } = btn.dataset;
			if (theme) {
				applyTheme(theme);
			}
		});
	});

	const closePanel = () => switcher.classList.remove("is-open");
	const togglePanel = () => switcher.classList.toggle("is-open");

	if (toggleButton) toggleButton.addEventListener("click", togglePanel);
	if (closeButton) closeButton.addEventListener("click", closePanel);

	document.addEventListener("click", (event) => {
		if (!switcher.classList.contains("is-open")) return;
		if (event.target instanceof Element && switcher.contains(event.target))
			return;
		closePanel();
	});

	document.addEventListener("keydown", (event) => {
		if (event.key === "Escape") closePanel();
	});
});

// Experience Carousel
document.addEventListener("DOMContentLoaded", () => {
	const track = document.getElementById("experience-track");
	const prevButton = document.getElementById("experience-prev");
	const nextButton = document.getElementById("experience-next");
	const dotsContainer = document.getElementById("experience-dots");

	if (!track || !prevButton || !nextButton || !dotsContainer) return;

	const items = Array.from(track.children);
	let currentIndex = 0;
	let itemsPerView = 1;

	// Calcule le nombre d'items visibles selon la largeur de l'écran
	const calculateItemsPerView = () => {
		const width = window.innerWidth;
		if (width >= 768) return 2;
		return 1;
	};

	// Crée les dots de navigation
	const createDots = () => {
		dotsContainer.innerHTML = "";
		const totalDots = Math.ceil(items.length / itemsPerView);

		for (let i = 0; i < totalDots; i++) {
			const dot = document.createElement("button");
			dot.classList.add("experience-carousel__dot");
			dot.setAttribute("aria-label", `Aller au groupe ${i + 1}`);
			if (i === 0) dot.classList.add("active");

			dot.addEventListener("click", () => goToSlide(i));
			dotsContainer.appendChild(dot);
		}
	};

	// Met à jour la position du carousel
	const updateCarousel = () => {
		const itemWidth = items[0].offsetWidth;
		const gap = 24; // 1.5rem = 24px
		const offset = -(currentIndex * (itemWidth + gap));
		track.style.transform = `translateX(${offset}px)`;

		// Met à jour les dots
		const dots = dotsContainer.querySelectorAll(
			".experience-carousel__dot"
		);
		const activeDotIndex = Math.floor(currentIndex / itemsPerView);
		dots.forEach((dot, index) => {
			dot.classList.toggle("active", index === activeDotIndex);
		});

		// Gère l'état des boutons
		const maxIndex = Math.max(0, items.length - itemsPerView);
		prevButton.disabled = currentIndex === 0;
		nextButton.disabled = currentIndex >= maxIndex;
	};

	// Navigation vers un slide spécifique
	const goToSlide = (dotIndex) => {
		currentIndex = dotIndex * itemsPerView;
		const maxIndex = Math.max(0, items.length - itemsPerView);
		currentIndex = Math.min(currentIndex, maxIndex);
		updateCarousel();
	};

	// Navigation précédent
	prevButton.addEventListener("click", () => {
		if (currentIndex > 0) {
			currentIndex -= itemsPerView;
			currentIndex = Math.max(0, currentIndex);
			updateCarousel();
		}
	});

	// Navigation suivant
	nextButton.addEventListener("click", () => {
		const maxIndex = Math.max(0, items.length - itemsPerView);
		if (currentIndex < maxIndex) {
			currentIndex += itemsPerView;
			currentIndex = Math.min(currentIndex, maxIndex);
			updateCarousel();
		}
	});

	// Support du swipe tactile
	let touchStartX = 0;
	let touchEndX = 0;

	track.addEventListener("touchstart", (e) => {
		touchStartX = e.changedTouches[0].screenX;
	});

	track.addEventListener("touchend", (e) => {
		touchEndX = e.changedTouches[0].screenX;
		handleSwipe();
	});

	const handleSwipe = () => {
		const swipeThreshold = 50;
		if (touchStartX - touchEndX > swipeThreshold) {
			// Swipe left (next)
			nextButton.click();
		} else if (touchEndX - touchStartX > swipeThreshold) {
			// Swipe right (prev)
			prevButton.click();
		}
	};

	// Support des touches clavier
	document.addEventListener("keydown", (e) => {
		if (e.key === "ArrowLeft") prevButton.click();
		if (e.key === "ArrowRight") nextButton.click();
	});

	// Réinitialise le carousel au redimensionnement
	let resizeTimeout;
	window.addEventListener("resize", () => {
		clearTimeout(resizeTimeout);
		resizeTimeout = setTimeout(() => {
			const newItemsPerView = calculateItemsPerView();
			if (newItemsPerView !== itemsPerView) {
				itemsPerView = newItemsPerView;
				currentIndex = 0;
				createDots();
				updateCarousel();
			}
		}, 250);
	});

	// Initialisation
	itemsPerView = calculateItemsPerView();
	createDots();
	updateCarousel();
});
