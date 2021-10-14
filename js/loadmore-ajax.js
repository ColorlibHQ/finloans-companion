(function ($) {
    'use strict';

    //  Finloans load more button Ajax

    var $loadbutton = $('.loadAjax');

    if ($loadbutton.length) {

        var postNumber = finloansloadajax.postNumber,
            Incr = 0;
        //
        $loadbutton.on('click', function () {


            Incr = Incr + parseInt(postNumber);

            var $button = $(this),
                $data;

            $data = {
                'action': 'finloans_finloans_ajax',
                'postNumber': postNumber,
                'postIncrNumber': Incr,
                'elsettings': finloansloadajax.elsettings
            };

            $.ajax({

                url: finloansloadajax.action_url,
                data: $data,
                type: 'POST',


                success: function (data) {

                    $('.finloans-finloans-load').html(data);

                    var $container = $('.finloans-finloans');

                    $container.isotope('reloadItems').isotope({
                        itemSelector: '.single_gallery_item',
                        percentPosition: true,
                        masonry: {
                            columnWidth: '.single_gallery_item'
                        }
                    });

                    var loaditems = parseInt(Incr) + parseInt(postNumber);

                    if (finloansloadajax.totalitems == loaditems) {
                        $button.hide();
                    }

                }

            });

            return false;

        });


    }


})(jQuery);