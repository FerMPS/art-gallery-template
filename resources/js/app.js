import "./bootstrap";

/**
 * Lógica Global de la Galería
 */

// --- NAVEGACIÓN MÓVIL ---
window.toggleMobileMenu = function () {
    const menu = document.getElementById("mobile-menu");
    const icon = document.getElementById("menu-icon");
    if (!menu || !icon) return;

    const isHidden = menu.classList.contains("translate-x-full");
    if (isHidden) {
        menu.classList.replace("translate-x-full", "translate-x-0");
        icon.style.transform = "rotate(90deg)";
        document.body.style.overflow = "hidden";
    } else {
        menu.classList.replace("translate-x-0", "translate-x-full");
        icon.style.transform = "rotate(0deg)";
        document.body.style.overflow = "auto";
    }
};

// --- MODAL DE COTIZACIÓN ---
window.openModal = function (img, title, desc) {
    const modal = document.getElementById("quoteModal");
    const content = document.getElementById("modalContent");
    if (!modal || !content) return;

    document.getElementById("modalImg").src = img;
    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalDesc").innerText = `"${desc}"`;

    modal.classList.replace("hidden", "flex");
    document.body.style.overflow = "hidden";

    setTimeout(() => {
        content.classList.remove("scale-95", "opacity-0");
        content.classList.add("scale-100", "opacity-100");
    }, 10);
};

window.closeModal = function () {
    const modal = document.getElementById("quoteModal");
    const content = document.getElementById("modalContent");
    if (!modal || !content) return;

    // ERROR CORREGIDO AQUÍ:
    content.classList.remove("scale-100", "opacity-100");
    content.classList.add("scale-95", "opacity-0");

    document.body.style.overflow = "auto";

    setTimeout(() => {
        modal.classList.replace("flex", "hidden");
    }, 500);
};

// --- INTERACCIÓN DE GALERÍA (TAP MÓVIL) ---
window.handleCardClick = function (card) {
    if (window.matchMedia("(pointer: coarse)").matches) {
        if (card.classList.contains("active-mobile")) return;

        document.querySelectorAll(".js-card").forEach((c) => {
            c.classList.remove("active-mobile");
        });
        card.classList.add("active-mobile");
    }
};

// --- INICIALIZACIÓN ---
document.addEventListener("DOMContentLoaded", () => {
    // Cerrar cuadros informativos al tocar fuera
    document.addEventListener("click", (e) => {
        if (!e.target.closest(".js-card")) {
            document.querySelectorAll(".js-card").forEach((c) => {
                c.classList.remove("active-mobile");
            });
        }
    });

    // AOS Init
    if (typeof AOS !== "undefined") {
        AOS.init({
            duration: 700,
            once: true,
            offset: 100,
            easing: "ease-out-quad",
            disable: () => window.innerWidth < 768,
        });
    }
});

window.addEventListener("load", () => {
    if (typeof AOS !== "undefined") AOS.refresh();
});
