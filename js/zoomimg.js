window.addEventListener('load', () => {
	var images = document.querySelectorAll('img');
	images.forEach((item, i) => {
		item.addEventListener('click', () => {
			history.pushState(null, null, '');
		});
	});

	var style = document.createElement('style');
	style.textContent =
		`img {
			cursor: pointer;
		}`;
	document.head.appendChild(style);

	console.log('zoomimg.js was loaded');
});
