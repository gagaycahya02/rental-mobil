$(function()
{
	$('img').on('dragstart',function(event)
	{
		event.preventDefault();
	});

	$('a[href^="#"]').on('click',function(event)
	{
		event.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html,body').stop().animate({
			'scrollTop' : $target.offset().top
		}),900,'swing',function()
		{
			window.location.hash = target;
                                               
		};
	});
});  