$(document).ready(function () {
    window.onscroll = function () {
        var scrollLimit = 100;
        if (window.scrollY >= scrollLimit) {
            $("#main-header").addClass("topper");
        }

        if (window.scrollY <= scrollLimit) {
            $("#main-header").removeClass("topper");
        }
    };

    $("li.menu-item").on('click', function () {
        $(this).find("ul.sub-menu").toggleClass("open");
    });

    $("#burger-menu").on('click', function () {
        $("header#main-header").toggleClass('enter');
        $(this).toggleClass('exer');
    });


    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }

});

