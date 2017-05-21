$(document).ready(function(){

	(function($) {

		$('#icone-header').click(function(e){
			e.preventDefault();
			$('body').toggleClass('with--sidebar');
		});

    $('#site-cache').click(function(e){
      $('body').removeClass('with--sidebar');
    });

	})(jQuery);

});
