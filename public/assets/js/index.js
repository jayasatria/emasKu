$(document).ready(function() {
    $('#banner-area .owl-carousel').owlCarousel({
        loop: false,
        dots: true,
        nav: false,
        items: 1,
    })

    // top sale owl-carousel
    $('#top-sale .container .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    // isotop filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
    // filter item command click
    $(".button-group").on("click", "button", function() {
        var filteValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filteValue });
    });

    // new phones owl-carousel
    $('#new-phones .container .owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // blog owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    // product qty
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty_input");

    // click on pty up
    $qty_up.click(function(e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() >= 1 && $input.val() <= 9) {
            $input.val(function(i, oldval) {
                return ++oldval;
            });
        }
    });

    // click on pty down
    $qty_down.click(function(e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() > 1 && $input.val() <= 10) {
            $input.val(function(i, oldval) {
                return --oldval;
            });
        }
    });

});