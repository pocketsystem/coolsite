$(function() {
	if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
		$('.qrcode').hide();
	} else {
		$('.qrcode').show();
	}
});
