 $(document).ready(function() {
	$(function() {
	    $('#slideshow').cycle(
		{
	        fx:     'fade',
	        speed:  '500',
	        timeout: 0,
	        pager:  '#nav2',
	        pagerAnchorBuilder: function(idx, slide) 
			{
	            // return sel string for existing anchor
	            return '#nav2 li:eq(' + (idx) + ') a';
	        }
	    });
	});

});
