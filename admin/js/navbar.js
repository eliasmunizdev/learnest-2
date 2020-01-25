$(document).ready(function () {
// Third Level Nav
	$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
		event.preventDefault(); 
		event.stopPropagation(); 
		$(this).parent().toggleClass('open');
		$(this).parent().siblings().removeClass('open');
	});

// Activate Bootstrap Sticky
	var offset = $('#sticky_side_nav').offset();
	$('#sticky_side_nav').affix({
		offset: {
			top: offset.top
		}
	}); 
});