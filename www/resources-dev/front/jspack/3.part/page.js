"use strict";

(function($) {

	$(document).on('appinit', function() {
	});

	$(document).on('ready', function() {
		
		$('.lnb').each(function(){
			var $lnb = $(this);
			var $ul = $lnb.find('>ul');
			var $li = $ul.find('>li');
			var $depth2 = $li.find('>ul');
			var $depth2li = $depth2.find('>li');
			var $depth3 = $depth2li.find('>ul');
			var $depth3li = $depth3.find('>li');
			
			$li.on('mouseover',function(){
				$(this).addClass('on');
				if($(this).has('>ul').size()){
					$('#header').addClass('depth2');
					
				}
			});
			$depth2li.on('mouseover',function(){
				$(this).addClass('on');
				if($(this).has('>ul').size()){
					$('#header').addClass('depth3');
					
				}
			});
			$depth3li.on('mouseover',function(){
				$(this).addClass('on');
			});
			$li.on('mouseleave',function(){
				$(this).removeClass('on');
				$('#header').removeClass('depth2');
			});
			$depth2li.on('mouseleave',function(){
				$(this).removeClass('on');
				$('#header').removeClass('depth3');
			});
			$depth3li.on('mouseleave',function(){
				$(this).removeClass('on');
			});

		})


	});

})(jQuery);