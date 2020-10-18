window.addEventListener('load', () => {
	var images = document.querySelectorAll('img');
	images.forEach(item => {
		item.addEventListener('click', event => {
			imgPopup.src = item.src;
			wrapperPopup.classList.add('dis-flex');
		});
	});

	var wrapperPopup = document.createElement('div');
	wrapperPopup.id = 'wrapper-popup';
	wrapperPopup.addEventListener('click', event => {
		wrapperPopup.classList.remove('dis-flex');
	});
	document.body.appendChild(wrapperPopup);

	var imgPopup = document.createElement('img');
	imgPopup.addEventListener('click', event => {
		event.stopPropagation();
	});
	wrapperPopup.appendChild(imgPopup);

	var style = document.createElement('style');
	style.textContent = `
		img {
			cursor: pointer;
		}

		#wrapper-popup {
			position: fixed;
			z-index: 1;

			display: none;

			width: 100%;
			height: 100%;

			cursor: default;

			background-color: rgba(0, 0, 0, 0.2);
		}

		#wrapper-popup.dis-flex {
			display: flex;
		}

		#wrapper-popup img {
			min-width: 300px;
			max-width: 90%;
			min-height: 300px;
			max-height: 90%;
			margin: auto;

			cursor: inherit;

			background-image: url('/resources/transpalent_texture.png');
		}`;
	document.head.appendChild(style);

	console.log('img_popup.js was loaded');
});
