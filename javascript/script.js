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
		if (event.target instanceof Element && switcher.contains(event.target)) return;
		closePanel();
	});

	document.addEventListener("keydown", (event) => {
		if (event.key === "Escape") closePanel();
	});
});
