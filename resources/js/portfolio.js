document.addEventListener("DOMContentLoaded", () => {

    /*
    =========================================
    Smooth navigation
    =========================================
    */

    const sections = document.querySelectorAll("section");

    sections.forEach((section) => {

        section.addEventListener("click", (event) => {

            const target = event.target.closest("[data-target]");

            if (!target) {
                return;
            }

            const id = target.dataset.target;

            document
                .getElementById(id)
                ?.scrollIntoView({
                    behavior: "smooth"
                });

        });

    });


    /*
    =========================================
    Project cards
    =========================================
    */

    const projectCards =
        document.querySelectorAll(".project-card");

    projectCards.forEach((card) => {

        card.addEventListener("click", () => {

            card.classList.toggle("selected");

        });

    });

});