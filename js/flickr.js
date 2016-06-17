$(document).ready(function() {
    $.getJSON("js/flickr.json", function(data) {
        $.each(data.items, function(i,item){
            var flickrData = $(".flickr-content");

            $("<img/>").attr({src: item.media.m, class: "flickr_thump", alt: "Flickr Picture -  " + item.title}).appendTo(flickrData)
                .wrap("<li><a href='" + item.link + "' target='_blank' class='flickr-image-item'></a></li>");
        });
    });
});