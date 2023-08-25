import './bootstrap';
import {sliders} from "./_sliders.js";
import {home} from "./_home.js";

const initApp = () => {

    // Sliders
    sliders();

    // Home
    home();

}

// Start Script
document.addEventListener("DOMContentLoaded", initApp);
