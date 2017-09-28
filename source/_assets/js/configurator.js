var Configurator = new Vue({
	el: '#modalWidget',

	data: {
		text: 'oh, hello',
		size: {
			height: 240,
			width: 320
		},
		colorScheme: {
			Flowers: {
				background: '#76B041',
				text: '#FFC914'
			},
			Rivers: {
				background: '#698F3F',
				text: '#804E49'
			},
			Sand: {
				background: '#D58936',
				text: '#A44200'
			},
			Snow: {
				background: '#F8FFF4',
				text: '#474350'
			},
			Storm: {
				background: '#031926',
				text: '#7CA5B8'
			},
			'Custom...': {
				background: '#868e96',
				text: '#f8f9fa'
			}
		},
		selectedColorScheme: ''
	},

	computed: {
		productImageURL: function () {
			var self = this;
			var url = buildURL();
			return url;

			function buildURL () {
				var base = 'https://placehold.it/';
				var size = self.size.width + 'x' + self.size.height + '/';
				var colors = colorsURLPart(self);
				var text = textURLPart(self);

				return base + size + colors + text;
			}

			function colorsURLPart () {
				var scheme = self.selectedColorScheme.length ? self.selectedColorScheme : 'Custom...';
				var bg = self.colorScheme[scheme].background.slice(1);
				var text = self.colorScheme[scheme].text.slice(1);

				return bg + '/' + text + '/';
			}

			function textURLPart() {
				var text = self.text.length ? '?text=' + encodeURIComponent(self.text) + '&' : '';

				return text;
			}
		}
	}
});