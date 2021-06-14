$(document).ready(function() {
    //desing using mixtup library
    var mixer = mixitup('.trendingTVShow__Gallary', {
        selectors: {
            control: '.tvshowFilter'
        }
    });
    var mixer2 = mixitup('.topMovie__content', {
        selectors: {
            control: '.movieFilter'
        }
    });
});