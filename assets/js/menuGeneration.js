var generations = document.querySelector(".buttonGenerations");
var menuTypes = document.querySelector(".menuTypes");
var menuGenerations = document.querySelector(".menuGenerations");

generations.addEventListener("click", toggleMenuGeneration);


function toggleMenuGeneration() {
    if(menuTypes.classList.contains("showMenuTypes") ){
        menuTypes.classList.remove("showMenuTypes");
        menuGenerations.classList.toggle("showMenuGenerations");
    }
    
    else{
    menuGenerations.classList.toggle("showMenuGenerations");
    }
}