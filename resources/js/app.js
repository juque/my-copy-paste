import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

// Native Clipboard
document.querySelectorAll('.btn-copy').forEach((button, index) => {

	button.addEventListener('click', function () {

		const textToCopy = document.querySelectorAll('.clipboard')[index].textContent;

		navigator.clipboard.writeText(textToCopy)
			.then(() => {
				console.log('Text copied to clipboard: ', textToCopy);
			})
			.catch(err => {
				console.error('Error copying the text: ', err);
			});

	});

});
