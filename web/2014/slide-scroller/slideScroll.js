(function($){
    $.fn.slideScroll = function () {
        return this.each(function(options){
            var $this = $(this);
            var settings = $.extend($.fn.slideScroll.defaults,options);
            //identify all the slides
            var $slides = $this.find(settings.slideSelector);
            //automatically position container if required
            var positionContainer = function() {
                $this.css({
                    'position':'absolute',
                    'top':'0',
                    'left':'0',
                    'right':'0',
                    'padding':'0',
                    'margin':'0',
                    'height':(settings.containerHeight=='auto'?'100%':settings.containerHeight)
                });
                var slideIndex = 0;
                $slides.each(function(){
                    var $slide = $(this);
                    $slide.css({
                        'position':'absolute',
                        'top':slideIndex*$this.height(),
                        'left':'0',
                        'right':'0',
                        'height':$this.height()+'px'
                    });
                    slideIndex++;
                });
                //size container to full height
                $this.css({
                    'position':'absolute'
                });
            }
            positionContainer();
            $(window).resize(throttle(positionContainer,250));
        });
    }
    $.fn.slideScroll.defaults = {
        animationQuietPeriod:500,
        slideSelector:".slideScroll-slide",
        containerHeight:'auto',
        snapInterval:200,
        startSlide:0
    };
    var throttle = function(func, wait, options) {
        var context, args, result;
        var timeout = null;
        var previous = 0;
        options || (options = {});
        var later = function() {
          previous = options.leading === false ? 0 : new Date().getTime();
          timeout = null;
          result = func.apply(context, args);
          context = args = null;
        };
        return function() {
          var now = new Date().getTime();
          if (!previous && options.leading === false) previous = now;
          var remaining = wait - (now - previous);
          context = this;
          args = arguments;
          if (remaining <= 0) {
            clearTimeout(timeout);
            timeout = null;
            previous = now;
            result = func.apply(context, args);
            context = args = null;
          } else if (!timeout && options.trailing !== false) {
            timeout = setTimeout(later, remaining);
          }
          return result;
        };
    };
})(jQuery);