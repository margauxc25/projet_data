const btntype = document.querySelector(".menuLinkTypes");
const menu_Types = document.querySelector(".menuTypes");
const show_type = document.querySelector(".showMenuTypes");
function hide(){
    menu_Types.classList.toggle("showMenuTypes");
  console.log("test");
}
btntype.addEventListener("click", function(){
    hide();
});