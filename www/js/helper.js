// helper.js
//
// helper functions
//
// meinside@gmail.com

//module: helper
window.helper = (function(helper, $, undefined){

	//for devices that are not able to scroll elements in div:
	//(referenced: http://chris-barr.com/index.php/entry/scrolling_a_overflowauto_element_on_a_touch_screen_device/)
	function enableTouchScroll(selector)
	{
		if(isTouchDevice())
		{
			var scrollStartPosY = 0, scrollStartPosX = 0;

			$('body').delegate(selector, 'touchstart', function(e){
				scrollStartPosY = this.scrollTop + e.originalEvent.touches[0].pageY;
				scrollStartPosX = this.scrollLeft + e.originalEvent.touches[0].pageX;
			});
			$('body').delegate(selector, 'touchmove', function(e){
				if((this.scrollTop < this.scrollHeight - this.offsetHeight && this.scrollTop + e.originalEvent.touches[0].pageY < scrollStartPosY - 5) || (this.scrollTop != 0 && this.scrollTop + e.originalEvent.touches[0].pageY > scrollStartPosY + 5))
					e.preventDefault(); 
				if((this.scrollLeft < this.scrollWidth - this.offsetWidth && this.scrollLeft + e.originalEvent.touches[0].pageX < scrollStartPosX - 5) || (this.scrollLeft != 0 && this.scrollLeft + e.originalEvent.touches[0].pageX > scrollStartPosX + 5))
					e.preventDefault(); 
				this.scrollTop = scrollStartPosY - e.originalEvent.touches[0].pageY;
				this.scrollLeft = scrollStartPosX - e.originalEvent.touches[0].pageX;
			});
		}
	}
	function isTouchDevice()
	{
		try
		{
			document.createEvent("TouchEvent");
			return true;
		}
		catch(e)
		{
			return false;
		}
	}

	return {
		enableTouchScroll: enableTouchScroll,
	};

})(window.helper || {}, jQuery);

