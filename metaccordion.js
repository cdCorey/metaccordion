(function($) {
	$(function(){
		var $m = $('#post-body.columns-2 #postbox-container-1');
		var $boxes = $m.find('.postbox:not(#submitdiv)');

		$boxes.addClass('closed');
		$boxes.on('click', '.hndle', function(){
//			if ( $(this).parent().hasClass('closed') ) {

			var parent = $(this).parent()[0];
			$boxes.not(parent).addClass('closed');
//				$(this).parent().removeClass('closed');
//			}
//			else {
//				console.log('Not closed!');
//				$(this).parent().addClass('closed');
//			}
		});
	});
})(jQuery);
