$(document).ready(function() {
	var wd_width = $(window).width();
	if(wd_width < 1220 && $('.subcategories-bar')) {
		$('.subcategories-bar').click(function(event) {
			$(this).parents('.homepage-category').find('.subcategories-list').slideToggle();
			event.preventDefault();
		});
	}
	$('.subcategories-list, .subcategories-bar').click(function(e) { 
		var e = window.event || e; 
		e.stopPropagation(); 
	});
	// $(document).click(function(e) { 
		// $('.homepage-category .subcategories-list').hide(); 
	// });
});


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}