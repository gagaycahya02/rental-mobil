// Jquery Library
		$(document).ready(function()
		{
			$("a").on('click',function(event)
			{
				event.preventDefault();
			});

			$('#kd-br').attr({
				'min' : 0
			});

			$('#kd-br').on('keydown',function(event)
			{
				if(event.keyCode == 69 || event.keyCode == 190 || event.keyCode == 189 || event.keyCode == 187)
				{
					event.preventDefault();
				}
			});

			$('#qty-br').on('keydown',function(event)
			{
				if(event.keyCode == 69 || event.keyCode == 190 || event.keyCode == 189 || event.keyCode == 187)
				{
					event.preventDefault();
				}
			});

			$('#kd-br').attr({
				'disabled' : true
			});

			$("#qty-br").attr({
				'autocomplete' : 'off',
				'min' : 0
			});
		});