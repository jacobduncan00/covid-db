$(document).ready(() => {
	console.log(1);
	$.get('fetch.php', function(data) {
		$('#result').html(data);
	});
	console.log(1);
});
