define(['lib/jquery'], function ($) {
    var toggle = '#map',
        map = function (element, options) {
            $.extend(this, options);
            this.el = $(element)
                .on('hover', 'a', $.proxy(this.onHover, this));
            
            this.R = new Raphael('map', 525, 760);
            
            this.setInterval();
            
            /*
            var self = this;
            this.el.on('click', function (e) {
                console.log('left: ' + (e.pageX - self.el.offset().left) + 'px; top: ' + (e.pageY - self.el.offset().top) + 'px;');
            });
            */
        };
    
    map.prototype = {
        constructor: map,
        speed: 200,
        
        setInterval: function (stop) {
            this.interval = clearTimeout(this.interval);
            if (!stop) this.interval = setInterval($.proxy(this.onInterval, this), 5000);
        },
        
        onInterval: function () {
            var pins = $('a', this.el),
                rand = Math.floor((Math.random()*(pins.size()-1))+1);
            
            this.onHover({
                currentTarget: pins.eq(rand)[0],
                type: 'mouseenter'
            }, true);
        },
        
        getEnd: function (start) {
            var x2 = 485,
                y2 = 345,
                x1 = start.split(' ')[0],
                y1 = start.split(' ')[1],
                x = x2 - x1,
                y = y2 - y1,
                d = Math.sqrt(x*x+y*y);
            
            return (x2 - (x1 > x2 ? -d/10 : d/10)) + ' ' + (y2 - (y1 < y2 ? -d/3 : d/3)) + ' ' + x2 + ' ' + y2;
        },
        
        onHover: function (e, auto) {
            var pins = $('a', this.el),
                $this = $(e.currentTarget),
                start = parseInt($this.css('left')) + ' ' + parseInt($this.css('top'));
            
            if (e.type == 'mouseenter') {
                pins.find('b:visible:first').parent().trigger('mouseleave');
                $('b', $this.addClass('active')).stop().show().animate($.browser.msie && $.browser.version < 9 ? {} : {opacity: 1}, this.speed);
                this.line = this.R.path('M ' + start + ' Q ' + this.getEnd(start)).attr({
                    stroke: '#999',
                    strokeWidth: 1,
                    opacity: 0
                }).animate({
                    opacity: 1
                }, this.speed, 'easeIn');
                if (!auto) this.setInterval(1);
            } else {
                if (this.line) {
                    $('b', $this.removeClass('active')).stop().animate($.browser.msie && $.browser.version < 9 ? {} : {opacity: 0}, this.speed, function () {
                        $(this).hide();
                    });
                    this.line.animate({
                        opacity: 0
                    }, this.speed, 'easeOut');
                }
                if (!auto) this.setInterval();
            }
        }
    };
    
    $.fn.map = function (option) {
        return this.each(function () {
            var $this = $(this),
                data = $this.data('map'),
                options = typeof option == 'object' && option;
            
            if (!data) $this.data('map', (data = new map(this, options)));
            if (typeof option == 'string') data[option].call($this);
        });
    };
    
    $.fn.map.Constructor = map;
    
    $(toggle).map();
});