'use strict';
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('currentyear').insertAdjacentHTML("afterbegin", new Date().getFullYear());
});