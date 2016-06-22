$(document).ready(function() {
    $.getJSON("js/flickr.json", function(data) {
        $.each(data.items, function(i,item){
            var flickrData = $(".flickr-content");
            var flickrGallery = $(".flickr-gallery");
            var largerImg = item.media.m.split('m.jpg')[0] + 'b.jpg'; // the b.jpg will get the larger image from Flickr feed.

            $("<img/>").attr({src: item.media.m, class: "flickr_thump",  alt: "Flickr Picture -  " + item.title}).appendTo(flickrData)
                .wrap("<li><a href='" + item.link + "' target='_blank' class='flickr-image-item'></a></li>");

            $("<img/>").attr({src: item.media.m, class: "flickr_thump", alt: "Flickr Picture -  " + item.title}).appendTo(flickrGallery)
                .wrap("<li class='flickr-gallery-item'><span class='flickr_thump-wrapper'></span></li>")
                .on('click', function() {
                    if ($('.large-img-container')) {
                        $('.large-img-container').remove();
                        $('li.flickr-gallery-item').removeClass('expanded');
                        $(this).closest('li').append('<div class="large-img-container box-shadow"><div class="large-img-meta"><img src="' + largerImg + '" class="large-img"><h3 class="img-title">' + item.title + '</h3><a href="' + item.link + '" target="_blank" class="flickr-link">View it in Flickr</a></div><span class="close"><i class="fa fa-close"></i></span></div>');
                        $(this).closest('li.flickr-gallery-item').addClass('expanded');
                    }
                });
        });
    });

    $('body').on('click', '.close', function() {
        $(this).closest('li').removeClass('expanded');
        $(this).parent('.large-img-container').remove();
    });
});