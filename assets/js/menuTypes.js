var menuTypes = document.querySelector(".menuTypes");
var menuGenerations = document.querySelector(".menuGenerations");
var types = document.querySelector(".buttonTypes");

types.addEventListener("click", toggleMenuType);

function toggleMenuType() {

if (menuGenerations.classList.contains("showMenuGenerations")) {
    menuGenerations.classList.remove("showMenuGenerations");
    menuTypes.classList.toggle("showMenuTypes");
} 
else {
    menuTypes.classList.toggle("showMenuTypes");
}
}


