$(document).ready(function () {
    window.onscroll = function () {
        var scrollLimit = 100;
        if (window.scrollY >= scrollLimit) {
            $("#main-header").addClass("topper");
            $("#cta-bottom").addClass("enter");
        }

        if (window.scrollY <= scrollLimit) {
            $("#main-header").removeClass("topper");
            $("#cta-bottom").removeClass("enter");
        }
    };

    $("li.menu-item").on('click', function () {
        $(this).find("ul.sub-menu").toggleClass("open");
    });

    $("#burger-menu").on('click', function () {
        $("header#main-header").toggleClass('enter');
        $(this).toggleClass('exer');
    });

    $("#resp-filter-toggle").on('click', function () {
        $("#sidebar").toggleClass('enter');
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







    $("#audio-toggle").click(function () {
        $("video").prop('muted', !$("video").prop('muted'));
        $(this).toggleClass('audio-on');
    });







});

