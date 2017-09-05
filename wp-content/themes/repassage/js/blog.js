    const list_blog_count_info_mob = $('.carouse-count-blog');
    const list_blog_current_info_mob = $('.carouse-current-blog');

    $(".list-blog").on('init', function() {
      list_blog_count_info_mob.html($('.list-blog .slick-slide').length);
      list_blog_current_info_mob.html(1);
    });
    $(".list-blog").on('afterChange', function(event, slick, current){
      list_blog_count_info_mob.html($('.list-blog .slick-slide').length);
      list_blog_current_info_mob.html(current+1);
    });