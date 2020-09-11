window.addEventListener('load', () => {
	var headings = document.querySelectorAll('.smon-section');
	var i, j, k;
	i = j = k = 0;
	headings.forEach(item => {
		var sectionNumber = '';
		switch (item.tagName) {
			case 'H1':
				i++;
				j = k = 0;
				sectionNumber = String(i);
				break;
			case 'H2':
				j++;
				k = 0;
				sectionNumber = [i, j].join('.');
				break;
			case 'H3':
				k++;
				sectionNumber = [i, j, k].join('.');
				break;
		}
		item.setAttribute('data-sectionnum', sectionNumber);
	});
	
	console.log('numbering.js was loaded');
});
