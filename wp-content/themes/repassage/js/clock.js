
    const outputCounts1 = $('.carouse-output__count1');
    const outputCurrents1 = $('.carouse-output__current1');
    $(".our-company-carousel").on('init', function() {
      outputCounts1.html($('.our-company-carousel .slick-slide').length);
      outputCurrents1.html(1);
    });
    $(".our-company-carousel").on('afterChange', function(event, slick, current){
      outputCounts1.html($('.our-company-carousel .slick-slide').length);
      outputCurrents1.html(current+1);
    });

    const outputServiceCounts = $('.services-home__carouse-output__count');
    const outputServiceCurrents = $('.services-home__carouse-output__current');
    $(".services-home ul").on('init', function() {
      outputServiceCounts.html($('.services-home ul .slick-slide').length);
      outputServiceCurrents.html(1);
    });
    $(".services-home ul").on('afterChange', function(event, slick, current){
        outputServiceCounts.html($('.services-home ul .slick-slide').length);
    outputServiceCurrents.html(current+1);
    });

    const outputCount = $('.carouse-output__count');
    const outputCurrent = $('.carouse-output__current');
    $(".home-slide").on('init', function() {
      outputCount.html($('.home-slide .slick-slide').length);
      outputCurrent.html(1);
    });
    $(".home-slide").on('afterChange', function(event, slick, current){
      outputCount.html($('.home-slide .slick-slide').length);
      outputCurrent.html(current+1);
    });


    const outputCount2 = $('.carouse-output__count2');
    const outputCurrent2 = $('.carouse-output__current2');
    $(".slider-result").on('init', function() {
      outputCount2.html($('.slider-result .slick-slide').length);
      outputCurrent2.html(1);
    });
    $(".slider-result").on('afterChange', function(event, slick, current){
      outputCount2.html($('.slider-result .slick-slide').length);
      outputCurrent2.html(current+1);
    });


    const work_outputCount1 = $('.carouse-count1');
    const work_outputCurrent1 = $('.carouse-current1');
    $(".slider-info-work1").on('init', function() {
      work_outputCount1.html($('.slider-info-work1 .slick-slide').length);
      work_outputCurrent1.html(1);
    });
    $(".slider-info-work1").on('afterChange', function(event, slick, current){
      work_outputCount1.html($('.slider-info-work1 .slick-slide').length);
      work_outputCurrent1.html(current+1);
    });

    const work_outputCount2 = $('.carouse-count2');
    const work_outputCurrent2 = $('.carouse-current2');
    $(".slider-info-work2").on('init', function() {
      work_outputCount2.html($('.slider-info-work2 .slick-slide').length);
      work_outputCurrent2.html(1);
    });
    $(".slider-info-work2").on('afterChange', function(event, slick, current){
      work_outputCount2.html($('.slider-info-work2 .slick-slide').length);
      work_outputCurrent2.html(current+1);
    });


    const work_outputCount3 = $('.carouse-count3');
    const work_outputCurrent3 = $('.carouse-current3');
    $(".slider-info-work3").on('init', function() {
      work_outputCount3.html($('.slider-info-work3 .slick-slide').length);
      work_outputCurrent3.html(1);
    });
    $(".slider-info-work3").on('afterChange', function(event, slick, current){
      work_outputCount3.html($('.slider-info-work3 .slick-slide').length);
      work_outputCurrent3.html(current+1);
    });

    const work_outputCount4 = $('.carouse-count4');
    const work_outputCurrent4 = $('.carouse-current4');
    $(".slider-info-work4").on('init', function() {
      work_outputCount4.html($('.slider-info-work4 .slick-slide').length);
      work_outputCurrent4.html(1);
    });
    $(".slider-info-work4").on('afterChange', function(event, slick, current){
      work_outputCount4.html($('.slider-info-work4 .slick-slide').length);
      work_outputCurrent4.html(current+1);
    });

    const work_outputCount5 = $('.carouse-count5');
    const work_outputCurrent5 = $('.carouse-current5');
    $(".slider-info-work5").on('init', function() {
      work_outputCount5.html($('.slider-info-work5 .slick-slide').length);
      work_outputCurrent5.html(1);
    });
    $(".slider-info-work5").on('afterChange', function(event, slick, current){
      work_outputCount5.html($('.slider-info-work5 .slick-slide').length);
      work_outputCurrent5.html(current+1);
    });

       const work_outputCount6 = $('.carouse-count6');
    const work_outputCurrent6 = $('.carouse-current6');
    $(".slider-info-work6").on('init', function() {
      work_outputCount6.html($('.slider-info-work6 .slick-slide').length);
      work_outputCurrent6.html(1);
    });
    $(".slider-info-work6").on('afterChange', function(event, slick, current){
      work_outputCount6.html($('.slider-info-work6 .slick-slide').length);
      work_outputCurrent6.html(current+1);
    });


    const work_outputCount_info_mob = $('.carouse-count_info-mob');
    const work_outputCurrent_info_mob = $('.carouse-current_info-mob');
    $(".items-info-slider").on('init', function() {
      work_outputCount_info_mob.html($('.items-info-slider .slick-slide').length);
      work_outputCurrent_info_mob.html(1);
    });
    $(".items-info-slider").on('afterChange', function(event, slick, current){
      work_outputCount_info_mob.html($('.items-info-slider .slick-slide').length);
      work_outputCurrent_info_mob.html(current+1);
    });

    const list_blog_count_works = $('.carouse-count_works');
    const list_blog_current_works = $('.carouse-current_works');
    $(".tabs-works ul").on('init', function() {
      list_blog_count_works.html($('.tabs-works .slick-slide').length);
      list_blog_current_works.html(1);
    });
    $(".tabs-works ul").on('afterChange', function(event, slick, current){
      list_blog_count_works.html($('.tabs-works .slick-slide').length);
      list_blog_current_works.html(current+1);
    });

    const items_info_number_count = $('.items-info-number-count');
    const items_info_number_current = $('.items-info-number-current');
    $(".items-info-content .items-info-slider").on('init', function () {
      items_info_number_count.html($('.items-info-slider .slick-slide').length);
      items_info_number_current.html(1);
    });
    $(".items-info-content .items-info-slider").on('afterChange', function(event, slick, current){
      items_info_number_count.html($('.items-info-slider .slick-slide').length);
      items_info_number_current.html(current+1);
    });


    $(".our-company-carousel,.slider-result").slick({
      infinite: true,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 7000,
      dots: false,
      adaptiveHeight: true,
      pauseOnHover:false,
      pauseOnFocus:false
    });

$(".slider-info-work").slick({
      infinite: true,
      fade: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      dots: false,
      pauseOnHover:false,
      pauseOnFocus:false
    });

    // <<<<<<<<< btn-up >>>>>>>>>

      var hours = document.getElementById("hours");
      var hours2 = document.getElementById("hours2");
      var hours3 = document.getElementById("hours3");
      var hours4 = document.getElementById("hours4");
      var hours5 = document.getElementById("hours5");
      var hours6 = document.getElementById("hours6");

      var minutes = document.getElementById("min");
      var minutes2 = document.getElementById("min2");
      var minutes3 = document.getElementById("min3");
      var minutes4 = document.getElementById("min4");
      var minutes5 = document.getElementById("min5");
      var minutes6 = document.getElementById("min6");


    function getNewTimezone (z) {

        var zone = z || 0;
        var localTime = new Date(); // получаем дату
        var UTCTime = localTime.toUTCString(); // получаем дату по гринвичу
        var dateArr = UTCTime.split(" ");
        var timeArr = dateArr[dateArr.length-2].split(":");

        // новое время согласно
        return new Date(dateArr[3],localTime.getMonth(),dateArr[1],timeArr[0],(+timeArr[1] + zone),timeArr[2]);
    }
    setInterval(function () {
        var time = getNewTimezone(180); //Харьков
        var time2 = getNewTimezone(120); //Париж
        var time3 = getNewTimezone(60); //Лондон
        var time4 = getNewTimezone(-240);// Нью-Йорк
        var time5 = getNewTimezone(540);
        var time6 = getNewTimezone(240);

        var h = time.getHours();
        var h2 = time2.getHours();
        var h3 = time3.getHours();
        var h4 = time4.getHours();
        var h5 = time5.getHours();
        var h6 = time6.getHours();

        var m = time.getMinutes();
        var m2 = time2.getMinutes();
        var m3 = time3.getMinutes();
        var m4 = time4.getMinutes();
        var m5 = time5.getMinutes();
        var m6 = time6.getMinutes();

        hours.innerHTML = (h.toString().length == 1) ? "0" + h.toString() + " : " : h.toString() + " : ";
        hours2.innerHTML = (h2.toString().length == 1) ? "0" + h2.toString() + " : " : h2.toString() + " : ";
        hours3.innerHTML = (h3.toString().length == 1) ? "0" + h3.toString() + " : " : h3.toString() + " : ";
        hours4.innerHTML = (h4.toString().length == 1) ? "0" + h4.toString() + " : " : h4.toString() + " : ";
        hours5.innerHTML = (h5.toString().length == 1) ? "0" + h5.toString() + " : " : h5.toString() + " : ";
        hours6.innerHTML = (h6.toString().length == 1) ? "0" + h6.toString() + " : " : h6.toString() + " : ";


        minutes.innerHTML = (m.toString().length == 1) ? "0" + m.toString() : m.toString();
        minutes2.innerHTML = (m2.toString().length == 1) ? "0" + m2.toString() : m2.toString();
        minutes3.innerHTML = (m3.toString().length == 1) ? "0" + m3.toString() : m3.toString();
        minutes4.innerHTML = (m4.toString().length == 1) ? "0" + m4.toString() : m4.toString();
        minutes5.innerHTML = (m5.toString().length == 1) ? "0" + m5.toString() : m5.toString();
        minutes6.innerHTML = (m6.toString().length == 1) ? "0" + m6.toString() : m6.toString();

    },300);