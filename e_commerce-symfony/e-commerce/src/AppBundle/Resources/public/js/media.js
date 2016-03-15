$(document).ready(function() {
    $('.iframe-btn').fancybox({
        'type'		: 'iframe',
        'autoScale'    	: false,
        fitToView: false,
        autoSize: false,
        afterLoad: function () {
            this.width = $(this.element).data("width");
            this.height = $(this.element).data("height");
        }
    });

});