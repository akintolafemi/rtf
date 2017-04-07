document.addEventListener('DOMContentLoaded', function (event) {

	'use strict';

	// Initialise resize library
	var resize = new window.resize();
	resize.init();

	// Upload photo
	var upload = function (photo, callback) {
		var formData = new FormData();
		formData.append('photo', photo);
		var request = new XMLHttpRequest();
		request.onreadystatechange = function() {
			if (request.readyState === 4) {
				callback(request.response);
			}
		}
		request.open('POST', './processavatar.php');
		request.responseType = 'json';
		request.send(formData);
	};

	document.querySelector('form input[type=file]').addEventListener('change', function (event) {
		event.preventDefault();
		var files = event.target.files;
		for (var i in files) {
			if (typeof files[i] !== 'object') return false;
			(function () {
				var initialSize = files[i].size;
				resize.photo(files[i], 1200, 'file', function (resizedFile) {
					var resizedSize = resizedFile.size;
					upload(resizedFile, function (response) {
						location.reload();
					});
				});

			}());

		}

	});

});
