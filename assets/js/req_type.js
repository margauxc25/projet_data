let type = "";

document.querySelectorAll(".menuLinkTypes").forEach((button) => {
  button.addEventListener("click", function (e) {
    type = this.getAttribute("value");
    console.log(type);
    $(".section_ajax").innerHTML = "";
    loadType();
  });
});

function loadType() {
  $.ajax({
    url: "./controller/index_type_controller.php",
    type: "POST",
    cache: false,
    data: { type: type },
    success: function (response) {
      $(".section_ajax").html(response);
    },
  });
}
