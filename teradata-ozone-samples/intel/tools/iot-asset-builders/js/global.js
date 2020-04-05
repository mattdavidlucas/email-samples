$(function() {
	// HTML Title
	$('#lp-form #HTML-title').change(function() {
		var lpTitle = $(this).val();
		$('#typ-form #HTML-title').val(lpTitle);
		$('#lp-form #og-title, #typ-form #og-title').val(lpTitle);
	});

	// EDC Value
	$('#lp-form #edc-value').change(function() {
		var edcValue = $(this).val();
		$('#typ-form #edc-value').val(edcValue);
	});

	// Subhead
	$('#lp-form #subhead').change(function() {
		var lpSubhead = $(this).val();
		$('#typ-form #subhead').val(lpSubhead);
	});

	// Social Stuff
	// $('#lp-form #og-title').change(function() {
	// 	var ogTitle = $(this).val();
	// 	$('#typ-form #og-title').val(ogTitle);
	// });

	$('#lp-form #og-description').change(function() {
		var ogDescr = $(this).val();
		$('#typ-form #og-description').val(ogDescr);
	});

	// $('#lp-form #og-image').change(function() {
	// 	var ogImage = $(this).val();
	// 	$('#typ-form #og-image').val(ogImage);
	// });

	$('#lp-form #tw-copy').change(function() {
		var ogImage = $(this).val();
		$('#typ-form #tw-copy').val(ogImage);
	});

	// URL Builder Stuff
	var iotStage, iotStageText, iotStageNumber, assetDescription;

	// IoT Stage Select
	$('#iot-stage').change(function() {
		$(this).attr('selected', true);

		var iotStageValue = $(this).val(),
		iotStageTextVal   = $('#iot-stage option:selected').text();
		iotStage = iotStageValue;
		iotStageText = iotStageTextVal;
	});

	// IoT Stage Number
	$('#iot-stage-number').change(function() {
		$(this).attr('selected', true);

		var iotStageNumberValue = $(this).val();
		iotStageNumber = iotStageNumberValue;
	});

	// IoT Asset Description
	$('#asset-description').change(function() {
		var assetDescrValue = $(this).val();
		assetDescription = assetDescrValue;
	});

	// Create the URL's
	$('#create-url').click(function(e) {
		e.preventDefault();

		$('#gen-lp-url').val('https://plan.seek.intel.com/US.EN.Embedded.registration-form-' + iotStage + '-' + iotStageNumber + '-' + assetDescription);
		$('#gen-typ-url').val('https://plan.seek.intel.com/US.EN.Embedded.thank-you-' + iotStage + '-' + iotStageNumber + '-' + assetDescription);

		$('#lp-asset-name').text('Embedded.US.EN.IOT eNuture.683 - ' + iotStageText + ' ' + iotStageNumber + ' - LP');
		$('#typ-asset-name').text('Embedded.US.EN.IOT eNuture.683 - ' + iotStageText + ' ' + iotStageNumber + ' - TY');

		$('#lp-vanity-url').text('US.EN.Embedded.registration-form-' + iotStage + '-' + iotStageNumber + '-' + assetDescription);
		$('#typ-vanity-url').text('US.EN.Embedded.thank-you-' + iotStage + '-' + iotStageNumber + '-' + assetDescription);

		var genLPurl = $('#gen-lp-url').val(),
		genTYPurl    = $('#gen-typ-url').val();

		// TYP URL used for Facebook OG tags
		$("#typ-fb-url").val(genTYPurl);

		$('#typ-url').val(genTYPurl);
		$('#lp-form #form-url, #typ-form #form-url').val(genLPurl);
	});


	// Specific to Email Builder Form
	// Preheader Text
	$('.email-builder #sidebar-copy').change(function() {
		var preheaderText = $(this).val();
		$('#preheader').val(preheaderText);
	});

	// Email Asset Name
	// This creates the Eloqua asset name and sets the hero image selection
	$('#iot-stage-email, #iot-stage-number-email').change(function() {
		var emailAssetStage = $('#iot-stage-email option:selected').text();
		var emailAssetNumber = $('#iot-stage-number-email option:selected').text();

		$('#email-asset-name').text('Embedded.US.EN.IOT ' + emailAssetStage + ' ' + emailAssetNumber + ' Email');

		$( '#hero-images label' ).each(function( index ) {
			if ( $(this).text() === emailAssetStage ) {
				$(this).next().prop('checked', true);
			}
		});
	});
});