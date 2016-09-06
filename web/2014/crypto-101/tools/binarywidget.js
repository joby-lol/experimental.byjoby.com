$(function(){
    var $widgets = $('input[type=binary-widget]').hide();
    $widgets.each(function(){
        var $input = $(this);
        var length = $input.attr('data-length')*1;
        length = length?length:32;
        var $widget = $('<div class="binary-widget binary-widget-interactive"></div>').insertAfter($input);
        //add bit controls
        var bitsHtml = "<div class='binary-widget-bits'>";
        for (i = 0; i < length; i++) {
            bitsHtml += '<div class="binary-widget-bit" data-bit="'+i+'"></div>';
        }
        bitsHtml += "</div>";
        $widget.append(bitsHtml);
        //set bit control widths
        var $bits = $widget.find('.binary-widget-bit');
        $bits.css('width',100/length+'%');
        //array to hold value
        var value = [];
        //update view
        this.draw = function() {
            for (i = 0; i < length; i++) {
                $bits.eq(i).attr('class','binary-widget-bit binary-widget-bit-'+value[i]);
            }
        }
        //initialize value
        this.set = function(input) {
            for (i = 0; i < length; i++) {
                if (input == 'random') {
                    value[i] = Math.random()<0.5?1:0;
                }else {
                    if (input[i] == 1) {
                        value[i] = 1;
                    }else {
                        value[i] = 0;
                    }
                }
            }
            this.draw();
        }
        this.set($input.val());
        console.log(value);
    });
});