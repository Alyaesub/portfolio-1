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

	// Si on arrive sur la page avec une URL type /competences :
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

/////////// code JS qui gére le menu burger

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

//dynamism imges
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

//feedback pour envoie de mail via le form
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
