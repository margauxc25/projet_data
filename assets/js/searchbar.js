var search = "";
console.log("test");
$("#search_text").keyup(function () {
  search = $(this).val();
  // Remplacer les espaces par des _ pour la recherche PHP
  search = search.replace(/ /g, "_");
  console.log(search);
  loadSearch();
});

function loadSearch() {
  $(document).ready(function () {
    $.ajax({
      success: function () {
        $(".livesearch-section").load(
          "./controller/search_controller.php?search=" + search
        );
      },
    });
  });
}
