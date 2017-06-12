/**
 * Timeline script
 * Uses JQuery
 * 
 * Jim Sangwine
 * 04.02.2010
 */

/*
 * timeline nav vars
 */
var currentPanel;
var currentNum;
var start;
var end;

/*
 * tooltip vars
 */
var hideDelay = 160;
var hideTimer = Array();
var suppressTooltips = false;

 (function($)
{
	$.fn.jimTimeline = function(thePanels) 
	{
		// do initial setup
		start = currentNum = thePanels[0].num;
		end = thePanels[thePanels.length-1].num;
		
		doSlide();
		
		for (var i in thePanels)
		{
			// click nav event listener for timeline years
			$("img[name='trigger_"+thePanels[i].num+"']").click(triggerClick).mouseout(tooltipOut).mouseover(tooltipOver);
			
			// turn the tooltips back into block elements so height analysis works
			//$('#tooltip_'+thePanels[i].num).css({ display: 'block' });
			
			// account for IE 
			var ttHeight = (isIE) ? $('#tipInner_'+thePanels[i].num).height() + 26 : $('#tipInner_'+thePanels[i].num).height();
			
			// add tooltip event listeners and resize tooltips to avoid under-hanging wasted space
			if (isIE)
				$('#tooltip_'+thePanels[i].num).mouseout(tooltipOut).mouseover(tooltipOutTip).css({ display: 'block', height: ttHeight });
			else
				$('#tooltip_'+thePanels[i].num).mouseout(tooltipOut).mouseover(tooltipOutTip).css({ display: 'block', height: ttHeight });
			
			// prepare tooltip timer slot
			hideTimer[thePanels[i].num] = null;
		}
		
		// next and prev timeline button event listeners
		$('#next_button').click(navClick);
		$('#prev_button').click(navClick);
	};
})(jQuery);

function triggerClick()
{
	currentNum = this.name.split('_')[1];
	
	currentPanel.css({ display: 'none' });
	
	// suppress tooltip hovers until the slide is finished
	suppressTooltips = true;
	
	// hide the tooltips and clear the timers where necessary
	for (var i=0; i<=end; i++)
	{
		$('#tooltip_'+i).css({ top:-500 });
		
		if (hideTimer[i])
			hideTimer[i] = null;
	}
	
	doSlide();
}

function navClick()
{
	//force to int
	currentNum = parseInt(currentNum);
	
	if (this.id == 'next_button')
		currentNum += ((currentNum + 12) <= end) ? 12 : end - currentNum;
	else if (this.id == 'prev_button')
		currentNum -= (currentNum - 12 >= start) ? 12 : currentNum - start;
	else
		return;
	
	currentPanel.css({ display:'none' });
	
	doSlide(); 
}

function doSlide()
{
	currentPanel = $('#panel_'+currentNum);
	currentPanel.css({ display: 'block' });
	
	$('#timelineList').stop(true, true).animate(
	{
		left: -(51 * (currentNum-1))
	}, 
	1000,
	'swing',
	function() { suppressTooltips = false; });
}

function tooltipOver()
{
	if (suppressTooltips)
		return;
	
	var num = this.name.split('_')[1];
	var trigger = $("img[name='trigger_"+num+"']");
	var tooltip = $('#tooltip_'+num);
	var top = trigger.offset().top - tooltip.height();
	top -= (isIE) ? 6 : 36;
	
	if (hideTimer[num])
		clearTimeout(hideTimer[num]);
	else
	{
		tooltip.css({
			top: (top) + 'px',
			left: (trigger.offset().left - 25) + 'px',
			opacity: 0
		});
		
		tooltip.animate({
			opacity: 1,
			top: '-=10'
		}, 500);
	}
}

function tooltipOut()
{
	if (suppressTooltips)
		return;
	
	var num = (this.id) ? this.id.split('_')[1] : this.name.split('_')[1];
	var tooltip = $('#tooltip_'+num);
	
	clearTimeout(hideTimer[num]);
	
	hideTimer[num] = setTimeout(function()
	{
		hideTimer[num] = null;
		tooltip.stop(true, true).animate({
			top: '+=10',
			opacity: 0
		}, 
		500, 
		'swing', 
		function() { tooltip.css({ top: -500 }); } );
	}, hideDelay);
	
}

function tooltipOutTip()
{
	var num = this.id.split('_')[1];
	
	if (hideTimer[num]) 
		clearTimeout(hideTimer[num]);
}
