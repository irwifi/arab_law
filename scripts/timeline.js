  $(function() {
		$('#slideshow_timeline').cycle({
			fx:     'scrollHorz',
			speed:  1000,
			timeout: 0,
			pager:  '#nav_timeline',
			pagerAnchorBuilder: function(idx, slide) {
				// return sel string for existing anchor
				return '#nav_timeline li:eq(' + (idx) + ') a';
			}
		});
	});