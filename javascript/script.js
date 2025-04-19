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
