(function ($) {
    "use strict";


    jQuery(document).ready(function ($) {


        /*---------------------------------------------*
        * Carousel
        ---------------------------------------------*/
        $('#Carousel').carousel({
                interval: 5000,
                item: 2
            })
            /*------------------------*/

        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        var map;
        $(document).ready(function () {
            map = new GMaps({
                el: '#map',
                lat: 23.6911078,
                lng: 90.5112799,
                zoomControl: true,
                zoomControlOpt: {
                    style: 'SMALL',
                    position: 'LEFT_BOTTOM'
                },
                panControl: false,
                streetViewControl: false,
                mapTypeControl: false,
                overviewMapControl: false,
                scrollwheel: false,
            });


            map.addMarker({
                lat: 23.6911078,
                lng: 90.5112799,
                title: 'Office',
                details: {
                    database_id: 42,
                    author: 'Foysal'
                },
                click: function (e) {
                    if (console.log)
                        console.log(e);
                    alert('You clicked in this marker');
                },
                mouseover: function (e) {
                    if (console.log)
                        console.log(e);
                }
            });
        });

        new WOW().init();

    });

    /*---------------------------------------------*
        * STICKY scroll
    ---------------------------------------------*/

    $.localScroll();

    /**************************/


    jQuery(window).load(function () {


    });



}(jQuery));
