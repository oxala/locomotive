define(['lib/jquery', 'plugin/iosslider'], function ($) {
    var toggle = '[data-toggle="portfolio"]',
        portfolio = function (element, options) {
            $.extend(this, options);
            this.el = $(element)
                .on(this.event, '.switch a', $.proxy(this.onSwitch, this));
            
            this.holder = $('ul', this.el)
            this.projects = $('li', this.holder);
            this.slider = $('.slider', this.el);
            
            if (this.projects.size() > 1) {
                if (!$('.prev', this.el).size() || !$('.next', this.el).size()) {
                    $('<a class="prev prev-project"></a><a class="next next-project"></a>').appendTo(this.el);
                }
            
    			this.slider.iosSlider({
    				snapToChildren: true,
    				desktopClickDrag: true,
    				infiniteSlider: true,
    				startAtSlide: 1,
    				autoSlide: true,
    				navPrevSelector: $('.prev-project'),
    				navNextSelector: $('.next-project'),
    				onSlideComplete: $.proxy(this.onSlideOver, this),
    				onSliderLoaded: $.proxy(this.onSlideStart, this)
    			});
            }
        };
    
    portfolio.prototype = {
        constructor: portfolio,
        speed: 400,
        event: navigator.userAgent.match(/iPad/i) ? 'touchstart' : 'click',
        active: 0,
        
        onSlideOver: function (args) {
			$('.text', $(args.sliderObject)).attr('style', '');
			
			$(args.currentSlideObject).children('.text').stop().animate({opacity: 1}, this.speed / 2, 'easeOutQuint');
			window.project = args.targetSlideNumber;
        },
        
        onSlideStart: function (args) {
            $('li:first', this.slider).find('.text').css({opacity: 1});
        },
        
        onSwitch: function (e) {
            var $this = $(e.currentTarget);
            
            if ($this.hasClass('active')) return;
            
            var block = $this.closest('.container'),
                parent = $this.closest('div');
            
            $('> a', parent).removeClass('active').eq(block.toggleClass('results').hasClass('results') ? 1 : 0).addClass('active')
        }
    };
    
    $.fn.portfolio = function (option) {
        return this.each(function () {
            var $this = $(this),
                data = $this.data('portfolio'),
                options = typeof option == 'object' && option;
            
            if (!data) $this.data('portfolio', (data = new portfolio(this, options)));
            if (typeof option == 'string') data[option].call($this);
        });
    };
    
    $.fn.portfolio.Constructor = portfolio;
    
    $(toggle).portfolio();
    
    return portfolio;
});