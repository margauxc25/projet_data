// Generation menu script

var generations = document.querySelector(".buttonGenerations");
var menuTypes = document.querySelector(".menuTypes");
var menuGenerations = document.querySelector(".menuGenerations");

generations.addEventListener("click", toggleMenuGeneration);



// Close the types menu if it's open and open the generations menu when it's clicked

function toggleMenuGeneration() {
    if(menuTypes.classList.contains("showMenuTypes")) {
        menuTypes.classList.remove("showMenuTypes");
        menuGenerations.classList.toggle("showMenuGenerations");
    }
    
    else {
    menuGenerations.classList.toggle("showMenuGenerations");
    }
}



