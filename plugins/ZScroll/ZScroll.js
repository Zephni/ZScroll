$.fn.extend({
	ZScroll: function(options = {}){
		// Variables
		HoveringDraggingBar = false;
		DraggingBar = false;
		DraggingBarOffset = 0;
		ScrollPercentage = 0;

		// Default options
		Options = {
			ScrollBarColor:"orange",
			ScrollBarWidth:5,
			ScrollBarHeight:null,
			ScrollBarMinHeight:10,
			ScrollBarPadding:5,
			ScrollWheelDistance:50,
			Display:"auto"
		};

		// Apply custom options
		for(var key in options)
			Options[key] = options[key];

		// Do not apply if not needed
		if(!Options.Display || (Options.Display == "auto" && $(this).prop("scrollHeight") < $(this).height()))
			return;

		// Setup		
		$(this).css({"width":$(this).width() - (Options.ScrollBarWidth + Options.ScrollBarPadding), "padding-right":Options.ScrollBarWidth + Options.ScrollBarPadding}); // This changes this
		$(this).scrollTop(ScrollPercentage * $(this).height());

		ScrollBar = $("<div class='ScrollBar'></div>");
		ScrollBar.css({"position":"absolute", "right":0, "top":0, "width":Options.ScrollBarWidth, "min-height":Options.ScrollBarMinHeight, "background":Options.ScrollBarColor});

		if(Options.ScrollBarHeight == null)
			ScrollBar.css({"height":($(this).height() / $(this).prop("scrollHeight")) * $(this).height()});
		else
			ScrollBar.css({"height":Options.ScrollBarHeight});

		ScrollBar.mousedown(function(e){
			DraggingBar = $(this);
			DraggingBarOffset = DraggingBar.parent().offset().top + (e.pageY - DraggingBar.offset().top);

			if(!$(this).hasClass("Highlighted"))
				$(this).addClass("Highlighted");
		});
		ScrollBar.mouseover(function(){
			HoveringDraggingBar = true;

			if(!$(this).hasClass("Highlighted"))
				$(this).addClass("Highlighted");
		});
		ScrollBar.mouseleave(function(){
			HoveringDraggingBar = false;

			if(!DraggingBar)
				$(this).removeClass("Highlighted");
		});

		$(this).append(ScrollBar);

		// Events
		$(document).mousemove(function(e){
			if(!DraggingBar) return;

			newPosY = e.pageY - DraggingBarOffset;
			if(newPosY < 0) newPosY = 0;
			else if(newPosY > DraggingBar.parent().height() - DraggingBar.height()) newPosY = DraggingBar.parent().height() - DraggingBar.height();

			ScrollPercentage = newPosY / (DraggingBar.parent().height() - DraggingBar.height());
			DraggingBar.parent().scrollTop(ScrollPercentage * (DraggingBar.parent().prop("scrollHeight") - DraggingBar.parent().height()));
			DraggingBar.css({"top":DraggingBar.parent().scrollTop() + newPosY});

			return false;
		});

		$(document).mouseup(function(){
			if(DraggingBar && !HoveringDraggingBar)
			{
				DraggingBar.removeClass("Highlighted");
				DraggingBar = false;
				return false;
			}

			DraggingBar = false;
		});

		$(this).bind('mousewheel', function(e){
			if(e.originalEvent.wheelDelta < 0)
				$(this).scrollTop($(this).scrollTop() + Options.ScrollWheelDistance);
			else
				$(this).scrollTop($(this).scrollTop() - Options.ScrollWheelDistance);

			ScrollPercentage = ($(this).scrollTop() / ($(this).prop("scrollHeight") - $(this).height()));
			$(this).find(".ScrollBar").css({"top":$(this).scrollTop() + (ScrollPercentage * ($(this).height() - $(this).find(".ScrollBar").height()))});

			return false;
		});
	}
});