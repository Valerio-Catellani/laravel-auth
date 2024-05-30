import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);





document.addEventListener('DOMContentLoaded', function () {
    const headerHandler = new HypeNav(document.getElementById('hype-custom-nav'));

    // Aggiungi un listener per il clic sul pulsante di ricerca
    document.getElementById('hype-nav-search-button').addEventListener('click', function (event) {
        headerHandler.toggleMenu('hype-nav-search-bar-input', event.currentTarget);
    });

    // Aggiungi un listener per il clic sul pulsante di chiusura della ricerca
    document.getElementById('hype-nav-login-button').addEventListener('click', function (event) {
        headerHandler.toggleMenu('hype-nav-login-bar-input', event.currentTarget);
    });

    document.getElementById('hype-nav-kebab-button').addEventListener('click', function (event) {
        headerHandler.toggleMenu('hype-nav-kebab-menu', event.currentTarget);
    });
});

class HypeNav {
    constructor(hypeElement) {
        this.hypeElement = hypeElement;
        this.openElement = '';
        this.eventTarget = {
            orignaltemplate: '',
            eventElement: ''
        }
        this.initialPositionWindow = 0;
        this.updateScrollPosition = this.updateScrollPosition.bind(this);
        this.render = this.render.bind(this);
        window.addEventListener('scroll', this.updateScrollPosition);
        this.render();
    }

    checkMovement() {
        return this.initialPositionWindow !== 0; //return true or false
    }

    updateScrollPosition() {
        const currentScrollPosition = window.scrollY;
        if (currentScrollPosition !== this.initialPositionWindow || this.openMenu !== '') {
            this.initialPositionWindow = currentScrollPosition;
            this.render();
        }
    }

    toggleMenu(menuItem, eventTarget) {
        const menuToOpen = document.getElementById(menuItem);
        if (this.openElement === menuToOpen) {
            menuToOpen.classList.toggle('d-none');
            eventTarget.classList.remove('active-color');
            eventTarget.innerHTML = this.eventTarget.orignaltemplate;
            this.hypeElement.classList.remove('border-opened-menu');
            this.openElement = '';
        } else {
            this.closeAll();
            this.openElement = menuToOpen;
            this.eventTarget.eventElement = eventTarget;
            this.eventTarget.orignaltemplate = eventTarget.innerHTML;
            //console.log(this.eventTarget);
            eventTarget.classList.add('active-color');
            eventTarget.innerHTML = '<i class="fa-solid fa-xmark"></i>';
            menuToOpen.classList.toggle('d-none');
            this.hypeElement.classList.add('border-opened-menu');
        }

    }

    closeAll() {
        this.openElement !== '' ? this.openElement.classList.add('d-none') : '';
        if (this.eventTarget.eventElement !== '') {
            this.eventTarget.eventElement.classList.remove('active-color');
            this.eventTarget.eventElement.innerHTML = this.eventTarget.orignaltemplate;
        }
    }

    render() {
        const renderElement = this.hypeElement;
        renderElement.classList.toggle('window-movement', this.checkMovement());
    }
}

