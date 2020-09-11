class SmonVerb extends HTMLElement {
	constructor() {
		super();

		var wrapper = document.createElement('span');
		wrapper.setAttribute('class', 'smon-verb');
		wrapper.textContent = this.textContent;
		this.innerHTML = '';
		this.appendChild(wrapper);
	}
}

class SmonTag extends HTMLElement {
	constructor() {
		super();

		var wrapper = document.createElement('span');
		wrapper.setAttribute('class', 'smon-verb');
		wrapper.textContent = `<${this.textContent}>`;
		this.innerHTML = '';
		this.appendChild(wrapper);
	}
}

window.addEventListener('load', () => {
	customElements.define('smon-verb', SmonVerb);
	customElements.define('smon-tag', SmonTag);
	var style = document.createElement('style');
	style.textContent =
		`.smon-verb {
			font-family: 'Source Code Pro', 'Consolas', 'Lucida Console', 'MS Gothic', monospace;

			margin: 0 2px;
			padding: 0 2px;

			color: #800;
		}`;
	document.head.appendChild(style);

	console.log('custom_elements.js was loaded');
});
