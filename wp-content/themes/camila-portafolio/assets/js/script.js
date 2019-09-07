$( document ).ready(function() {
	$('.navbar__menu__icon').click(function(){
		$('.navbar__menu').removeClass('hidden');
		$(this).addClass('hidden');
		$('.navbar__menu__icon-2').removeClass('hidden');
	})
	$('.navbar__menu__icon-2').click(function(){
		$('.navbar__menu').addClass('hidden');
		$(this).addClass('hidden');
		$('.navbar__menu__icon').removeClass('hidden');
	})
});