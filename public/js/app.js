requirejs.config({
    shim: {
        'lib/jquery': {
            exports: '$'
        },
        'lib/easing': {
            deps: ['lib/jquery']
        },
        'plugin/iosslider': {
            deps: ['lib/jquery']
        }
    }
});

requirejs(['lib/easing', 'plugin/slides', 'plugin/portfolio', 'plugin/map'], function () {

});