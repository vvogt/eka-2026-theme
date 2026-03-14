import { animate, spring } from "motion";
import { throttle } from "./throttle";

function MenuScrollHandler(menuContainer, menu) {
    this.menuContainer = menuContainer;
    this.menu = menu;
    this.menuShown = true;
    this.prevScrollPos = window.scrollY;
    this.prevScrollDirection = -1;
    this.scrollPos = window.scrollY;
    this.scrollDirection = -1;
    this.threshold = 40;

    this.init = () => {
        this.setInitialScrollDirection();

        window.addEventListener("scroll", () => {
            throttle(() => {
                this.checkScrollDirection();
            }, 250);
        });

        this.menuContainer.addEventListener('focusin', (e) => {
            if (this.checkFocus(e) && !this.menuShown) {
                this.showMenu();
            }
        });
    }

    this.checkScrollDirection = () => {
        this.scrollPos = window.scrollY;
        this.getScrollDirection();

        if (this.scrollDirection !== this.prevScrollDirection) {
            this.handleMenuPosition(this.scrollDirection, this.prevScrollPos);
        }

        this.prevScrollPos = window.scrollY;
        this.prevScrollDirection = this.scrollDirection;
    }

    this.getScrollDirection = () => {
        if (this.scrollPos > this.prevScrollPos + this.threshold) {
            this.scrollDirection = 1;
            document.body.classList.add('scrolling-down');
        } else if (this.scrollPos < this.prevScrollPos - this.threshold) {
            this.scrollDirection = -1;
            document.body.classList.remove('scrolling-down');
        } else {
            return this.scrollDirection;
        }
    }

    this.handleMenuPosition = (scrollDirection) => {
        if (window.scrollY < 30) {
            /* Not scrolled (top of page) */
            this.showMenu();
        } else if (this.scrollDirection < 0) {
            this.showMenu();
        } else if (this.scrollDirection > 0) {
            this.hideMenu();
        }
    };

    this.showMenu = () => {
        animate(this.menuContainer, { translateY: "0px", }, { easing: spring({ stiffness: 400, damping: 55, mass: 3, velocity: 1000, }) })
        this.menuShown = true;
    }

    this.hideMenu = () => {
        animate(this.menuContainer, { translateY: "-124px", }, { easing: spring({ stiffness: 400, damping: 40, mass: 3, }) })
        this.menu.closeAllSubMenus();
        this.menuShown = false;
    }

    /* check if focus is inside menu */
    this.checkFocus = (e) => {
        if (e.target.closest('.menu-desktop')) {
            return true;
        } else {
            return false;
        }
    }

    this.setInitialScrollDirection = () => {
        if (window.scrollY > 30) {
            document.body.classList.add('scrolling-down');
            this.scrollDirection = 1;
        }
    }

    this.init();
}

export { MenuScrollHandler }