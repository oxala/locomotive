define(['lib/jquery', 'plugin/portfolio'], function ($) {
    var toggle = 'body',
        slides = function (element, options) {
            $.extend(this, options);
            this.el = $(element);
            
            var self = this;
            
            this.nav = $('a', 'nav')
                .on(this.event, $.proxy(this.onNav, this));
            
            $('.nav', this.el)
                .on(this.event, $.proxy(this.onNav, this));
            
            this.content = $('#content', this.el);
            this.sections = $('section', this.el).show().each(function (i) {
                $(this).css('z-index', i + 1);
            });
            
            $(window).on('scroll', $.proxy(this.onScroll, this));
            this.onScroll();
        };
    
    slides.prototype = {
        constructor: slides,
        speed: 400,
        scroller: $.browser.webkit ? $('body') : $('html'),
        active: 0,
        event: navigator.userAgent.match(/iPad/i) ? 'touchstart' : 'click',
        header: $('header'),
        
        onScroll: function (e) {
            if ($(window).width() <= 640) return;
            var self = this,
                scrolled = this.scroller.scrollTop();
            
            for (this.active = 0; this.active < this.sections.size(); this.active++) {
                var $this = this.sections.eq(this.active),
                    top = $this.offset().top - (this.header.innerHeight() + 1);
                
                if (scrolled <= top + $this.innerHeight()) {
           //         self.content.attr({style: $this.attr('style'), 'class': $this.attr('class')}).html($this.html());
                    break;
                }
            }
            
            if (this.active < this.sections.size() - 1) {
           //     this.content.show();
                
                var content = this.content.attr('class');
                if (content == 'completed-projects') {
             //       new require('plugin/portfolio')($('> div', this.content));
                }
            } else this.content.hide();
            
            if (this.animated) return;
            
            this.timeout = clearTimeout(this.timeout);
            this.timeout = setTimeout(function () {
                self.onTimeout();
            }, 200);
            
            this.nav.removeClass('active').filter('[data-target="' + this.sections.eq(this.active).attr('id') + '"]').addClass('active');
        },
        
        onTimeout: function () {
            var prev = this.sections.eq(this.active - 1),
                current = this.sections.eq(this.active),
                next = this.sections.eq(this.active + 1),
                top = next.size() ? next.offset().top : 0;
            
            if (top < current.innerHeight() / 3 * 2 + this.scroller.scrollTop()) {
                this.nav.filter('[data-target="' + next.attr('id') + '"]').trigger(this.event);
            }
        },
        
        onNav: function (e) {
            var self = this,
                $this = $(e.currentTarget),
                target = $this.data('target'),
                section = $('#' + target),
                top = section.offset().top + ($(window).width() > 640 ? -(this.header.innerHeight() + 1) + 3 : -15);
            
            if (this.animated) return;
            this.animated = 1;
            
            this.scroller.stop().animate({scrollTop: top}, this.speed, function () {
                self.animated = 0;
            });
            
            $('a', $this.parent()).removeClass('active');
            $this.addClass('active');
        }
    };
    
    $.fn.slides = function (option) {
        return this.each(function () {
            var $this = $(this),
                data = $this.data('slides'),
                options = typeof option == 'object' && option;
            
            if (!data) $this.data('slides', (data = new slides(this, options)));
            if (typeof option == 'string') data[option].call($this);
        });
    };
    
    $.fn.slides.Constructor = slides;
    
    $(toggle).slides();
});