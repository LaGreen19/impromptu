<script>
(function($) {
    $(window).on('load resize', function() {
        $('.et_fullscreen_slider').each(function() {
            et_fullscreen_slider($(this));
        });
    });
    function et_fullscreen_slider(et_slider) {
        var et_viewport_height = $(window).height(),
            et_slider_height = $(et_slider).find('.et_pb_slider_container_inner').innerHeight(),
            $admin_bar = $('#wpadminbar'),
            $main_header = $('#main-header'),
            $top_header = $('#top-header');
        $(et_slider).height('auto');
        if ($admin_bar.length) {
            var et_viewport_height = et_viewport_height - $admin_bar.height();
        }
        if ($top_header.length) {
            var et_viewport_height = et_viewport_height - $top_header.height();
        }
        if (!$('.et_transparent_nav').length && !$('.et_vertical_nav').length) {
            var et_viewport_height = et_viewport_height - $main_header.height();
        }
        if (et_viewport_height > et_slider_height) {
            $(et_slider).height(et_viewport_height);
        }
    }
  $(window).on("load",function() {
  $(window).scroll(function() {
    var windowTop = $(this).scrollTop();
    $(".et_pb_slide_image").each(function() {
      /* Check the location of each desired element */
      var objectTop = $(this).offset().top;

      /* If the element is completely within bounds of the window, fade it in */
      if (objectTop > windowTop) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});

})(jQuery);
</script>
