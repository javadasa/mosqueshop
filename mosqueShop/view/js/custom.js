$.simpleTicker($("#demo"),{
    speed : 1000,
    delay : 3000,
    easing : 'swing',
    effectType : 'roll'
});


// start-news-box

$(function () {
    $(".demo").bootstrapNews({
        newsPerPage: 3,
        navigation: true,
        autoplay: true,
        direction:'up', // up or down
        animationSpeed: 'normal',
        newsTickerInterval: 3000, //4 secs
        pauseOnHover: true
        // onStop: null,
        // onPause: null,
        // onReset: null,
        // onPrev: null,
        // onNext: null,
        // onToDo: null
    });
});

// end-news-box
