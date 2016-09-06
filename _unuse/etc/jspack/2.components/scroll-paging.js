"use strict";

/*
 * body에 data-scroll-paging-enabled 가 있을경우 작동
 */
(function($) {

	$(document).on('ready', function() {
		$("body").filter("[data-scroll-paging-enabled][data-scroll-paging-container-selector]").each(function() {
			var $body = $(this);
			var $window = $(window);
			var $document = $(document);
			var windowHeight = $window.height();
			var $container = $($body.attr("data-scroll-paging-container-selector"));
			var totalPage = $body.attr("data-scroll-paging-total-page") * 1;

			if ($container.size() == 0)
				return;

			if (totalPage <= 1)
				return;

			$body.attr("data-scroll-paging-page", 1);

			$window.on("resize", function() {
				windowHeight = $window.height();
			});
			$window.on("scroll", function() {
				var nextPageNo = $body.attr("data-scroll-paging-page") * 1 + 1;

				if ($body.attr("data-scroll-paging-enabled") != "true" || $body.attr("data-scroll-paging-loading") == "true" || totalPage < nextPageNo)
					return;

				var needNextPageData = $document.height() - $window.scrollTop() <= windowHeight * 2;

				if (!needNextPageData)
					return;

				$body.attr("data-scroll-paging-loading", "true");

				var requestUrl = location.href.indexOf("?") === -1 ? location.href + "?page=" + nextPageNo : location.href + "&page=" + nextPageNo;

				$.ajax({
					url : requestUrl,
					success : function(data) {
						$container.append(data);
						$body.attr("data-scroll-paging-page", nextPageNo);
					},
					complete : function() {
						$body.attr("data-scroll-paging-loading", "false");
					}
				});

			});
		});
	});

})(jQuery);