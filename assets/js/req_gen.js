let generation = "";

document.querySelectorAll('.menuLinkGenerations').forEach(button => {
    button.addEventListener('click', function(e){


        generation = this.getAttribute("value");
            console.log(generation);
            $(".section_ajax").innerHTML="";
            loadData();
            }
        )
    }
)
        
function loadData() {
    $.ajax({
    url: "./controller/index_generation_controller.php",
    type: "POST",
    cache: false,
    data: { generation: generation},
    success: function (response) {
        $(".section_ajax").html(response);
    },
    });
}


