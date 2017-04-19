// Jquery Library
$(document).ready(function()
{
	// var config
	var unma = $("#euname");
	var upass = $("#upass");
	var fsub = $("#subLogin");
	var lf = $("#lf");
	
	var btnRegister = $("#btn-register");
	var lRedirect = "<?php echo site_url('home'); ?>";

	$("a").on('click',function(event)
	{
		event.preventDefault();
	});

	$(fsub).on('click',function()
	{

	});

	$(btnRegister).on('click',function()
	{
		window.location.assign(lRedirect);
	});
});