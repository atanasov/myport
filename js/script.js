var $j = jQuery;
$j(document).ready(function () {	
	$j('a[href^="#"]').click(function() {
		var aHrefName = $j(this).attr('href').substring(1);
		var headingPos = $j('#content').find('#' + aHrefName).offset().top;
		$j('html, body').animate({scrollTop: headingPos - 100}, 1000);
		return false;
	});
	$j('[id^="gallery-"]').photobox('a',{ time:0 });
});