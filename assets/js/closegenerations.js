const btngen = document.querySelector(".menuLinkGenerations");
const menu_Generations = document.querySelector(".menuGenerations");
const show_gen = document.querySelector(".showMenuGenerations");
function hide(){
    menu_Generations.classList.toggle("showMenuGenerations");
  console.log("test");
}
btngen.addEventListener("click", function(){
    hide();
});