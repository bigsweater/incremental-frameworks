var Configurator = new Vue({
	el: '#modalWidget',

data: function () {
	return {
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

		maxTextLength: 140,
		maxDimension: 600,
		minDimension: 50,
		selectedColorScheme: '',
		url: 'https://placehold.it/320x240/868e96/f8f9fa?text=' + encodeURIComponent('Oh, hello')
	}
},

computed: {
	price: function () {
		var costPerLetter = 0.1;
		var costPerPixel = 0.005;
		var area = this.constrainDimension(this.size.width) * this.constrainDimension(this.size.height);
		var textLength = this.constrainTextLength(this.text);
		var price = (costPerLetter * textLength) + (costPerPixel * area);

		return '$' + price.toFixed(2);
	},

		productImageURL: function () {
			var self = this;
			var url = buildURL();
			return url;

			function buildURL () {
				var base = 'https://placehold.it/';
				var size = sizeURLPart();
				var colors = colorsURLPart();
				var text = textURLPart();

				return base + size + colors + text;
			}

			function colorsURLPart () {
				var scheme = self.selectedColorScheme.length ? self.selectedColorScheme : 'Custom...';
				var bg = self.colorScheme[scheme].background.slice(1);
				var text = self.colorScheme[scheme].text.slice(1);

				return bg + '/' + text + '/';
			}

			function sizeURLPart () {
				var height = self.constrainDimension(self.size.height);
				var width = self.constrainDimension(self.size.width);

				return width + 'x' + height + '/';
			}

			function textURLPart() {
				var text = self.text.length ? '?text=' + encodeURIComponent(self.text) + '&' : '';

				if (text.length > self.maxTextLength) {
					text = text.slice(0, self.maxTextLength - 1)
				}

				return text;
			}
		},

		textLengthDifference: function () {
			return this.maxTextLength - this.text.length;
		},

		validForm: function () {
			return this.validHeight && this.validText && this.validWidth
		},

		validHeight: function () {
			return this.validateNumber(this.size.height)
		},

		validText: function () {
			return this.text.length <= this.maxTextLength
		},

		validWidth: function () {
			return this.validateNumber(this.size.width)
		}
	},

	watch: {
		productImageURL: function (newURL) {
			this.delayedUpdateURL(newURL);
		}
	},

	methods: {
		constrainDimension: function (dimension) {
			return valBetween(dimension, this.minDimension, this.maxDimension)
		},

		constrainTextLength: function (text) {
			if (text.length > this.maxTextLength) {
				return this.maxTextLength
			}

			if (text.length == 0) {
				return 1
			}

			return text.length
		},

		delayedUpdateURL: debounce(function (newURL) {
			this.url = newURL;
		}, 1000),

		validateNumber: function (number) {
			return isInt(number) &&
				   number >= this.minDimension &&
				   number <= this.maxDimension
		},

		reset: function () {
			$.extend(true, this.$data, this.$options.data.call(this))
		}
	}
});

function debounce(fn, wait, immediate) {
	var timeout;

	return function() {
		var context = this;
		var args = arguments;
		
		function later () {
			timeout = null;

			if (!immediate) {
				fn.apply(context, args);
			}
		}

		var callNow = immediate && !timeout;

		clearTimeout(timeout);

		timeout = setTimeout(later, wait);

		if (callNow) {
			fn.apply(context, args);
		}
	}
}

function isInt(value) {
	return !isNaN(value) &&
		   parseInt(Number(value)) == value &&
		   !isNaN(parseInt(value, 10))
}

function valBetween (val, min, max) {
	return (val > min) ? ((val < max) ? val : max) : min
}
