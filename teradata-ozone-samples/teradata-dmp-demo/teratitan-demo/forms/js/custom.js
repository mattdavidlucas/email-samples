// Custom JavaScript Stuff
var yourJS = 'Goes here.';

$(function() {
	// Custom jQuery stuff

	// Some basic form stuff
	$('#first-name').focus();

	var hiddenFirst = $(".hidden.first");
	hiddenFirst.hide();

	// Show Hidden Field
	$("select").change(function() {
		var select = $(this).val();

		if (select == "Yes") {
			hiddenFirst.show();
		} else {
			hiddenFirst.hide();
		}
	});
});