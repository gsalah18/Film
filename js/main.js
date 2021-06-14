$(document).ready(function() {
    // select image and make it background of header
    let details = [
        { title: "Fantastic Beasts and Where to Find Them", year: 2016, type: "Action,Family", time: "2hr 13min" },
        { title: "The Convenient Groom", year: 2016, type: "Action", time: "1hr 24min" },
        { title: "Pacific Rim: Uprising", year: 2018, type: "Action,Sci-Fi", time: "1hr 51min" },
        { title: "Paradigm Lost", year: 2017, type: "Action,Documentay", time: "1hr 2min" },
        { title: "A Walk Among The Tombstones", year: 2014, type: "Action,Adventure", time: "1hr 45min" },
        { title: "The Accountant", year: 2016, type: "Action,Adventure,Comdey", time: "2hr 8min" }
    ];
    $('.figureImage').click(function() {
        let img = $(this).attr('src');
        let index = $(this).attr('id');

        $('.home').css('background-image', 'url(' + img + ')');
        $('.home__content__title h1').text(details[index].title);
        $('.home__content__details small:first').text(details[index].year);
        $('.home__content__details small:odd').text(details[index].type);
        $('.home__content__details small:last').text(details[index].time);
        $('.home__figure__fiqureImage').removeClass('figure__active');
        $(this).parent().addClass('figure__active');

    });
    //active link in tvshow trendeing
    $('.trendingTVShow__header__list li a').click(function() {
        $('.trendingTVShow__header__list li a').removeClass('active');
        $(this).addClass('active');
    });
    //active sort icon in tvshow trending
    $('.trendingTVShow__header__list i').click(function() {
        $('.trendingTVShow__header__list i').removeClass('active');
        $(this).addClass('active');
    });
    //make sroll up visible when scroll for
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('.scrollUp').css({ 'opacity': '1', 'transform': 'translateY(-50px)' })
        } else {
            $('.scrollUp').css({ 'opacity': '0', 'transform': 'translateY(0px)' });
        }
    });

    //active list item in topmovie section
    $('.topMovie__header li a').click(function() {
        $('.topMovie__header li a').removeClass('active');
        $(this).addClass('active');
    });
    //design slider in top movie section
    $('.topMovie__content').slick({
        dots: true,
        infinite: true,
        speed: 50,
        slidesToShow: 4,
        slidesToScroll: 1

    });
})