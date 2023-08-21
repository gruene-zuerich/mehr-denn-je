if (document.querySelector(".mdj-splash-modal")) {
    let modal = document.querySelector(".mdj-splash-modal");
    let blind = document.querySelector(".mdj-splash-blind");
    let close = modal.querySelector(".mdj-splash-modal__close");

    setTimeout(function () {
        document.documentElement.style.overflow = "hidden";
        modal.animate([
            {
                opacity: 0,
                transform: "translateY(100%)"
            },
            {
                opacity: 1,
                transform: "translateY(0)"
            }
        ], {
            duration: 500,
            fill: "forwards",
            easing: "ease-in-out"
        });
        blind.animate([
            {
                opacity: 0,
                visibility: "hidden"
            },
            {
                opacity: 0.75,
                visibility: "visible"
            }
        ], {
            duration: 500,
            fill: "forwards",
            easing: "ease-in-out"
        });
    }, 4000);

    close.addEventListener("click", function () {
        document.documentElement.style.overflow = "auto";
        modal.animate([
            {
                opacity: 1,
                transform: "translateY(0)"
            },
            {
                opacity: 0,
                transform: "translateY(100%)"
            }
        ], {
            duration: 500,
            fill: "forwards",
            easing: "ease-in-out"
        });
        blind.animate([
            {
                opacity: 0.75,
                visibility: "visible"
            },
            {
                opacity: 0,
                visibility: "hidden"
            }
        ], {
            duration: 500,
            fill: "forwards",
            easing: "ease-in-out"
        });

        setTimeout(function () {
            modal.remove();
            blind.remove();
        }, 500);
    });
}
