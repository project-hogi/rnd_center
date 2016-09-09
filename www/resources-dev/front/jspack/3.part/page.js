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

		});
		
		$(".rolling").marquee({
			container : '>ul',
			prev : '.roll_prev',
			next : '.roll_next',
		});
		
		$('.visual-content').each(function() {
			var $visual = $(this);
			var $visualContent = $('>ul', $visual);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'on'
			};
			var $prev = $('.btn-prev').each(function() {
				options.prev = this;
			});
			var $next = $('.btn-next').each(function() {
				options.next = this;

				setTimeout(function() {
					$next.click();
				}, 1200);
			});
			var $pager = $('.visual-pager', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$visualContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$visualContent.cycle('destroy');
			});
		});
		
		$('.container .banner').each(function() {
			var $visual = $(this);
			var $visualContent = $('>.roll-banner', $visual);
			var options = {
				slides : '>a',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'on'
			};
			var $prev = $('.btn-prev').each(function() {
				options.prev = this;
			});
			var $next = $('.btn-next').each(function() {
				options.next = this;

				setTimeout(function() {
					$next.click();
				}, 1200);
			});
			var $pager = $('.roll-banner-pager', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$visualContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$visualContent.cycle('destroy');
			});
		});


	});

})(jQuery);