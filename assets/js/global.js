(function( $ ) {

	$( document ).ready( function() {

		// Text typing animation
		var TxtType = function( el, toType, period ) {
			this.toType = toType;
			this.el = el;
			this.loop = 0;
			this.period = parseInt( period, 10 ) || 2000;
			this.txt = "";
			this.tick();
			this.toDelete = false;
		};

		TxtType.prototype.tick = function() {
			var i = this.loop % this.toType.length;
			var textToType = this.toType[i];

			if ( this.toDelete ) {
				this.text = textToType.substring( 0, this.text.length - 1 );
			} else {
				this.text = textToType.substring( 0, this.text.length + 1 );
			}

			this.el.innerHTML = '<span class="text-type-wrap">' + this.text + '</span>';

			var that = this;
			var delta = 300 - Math.random() * 100;

			if ( this.toDelete ) {
				delta /= 2;
			}

			if ( !this.toDelete && this.text === textToType ) {
				delta = this.period;
				this.toDelete = true;
			} else if ( this.toDelete && this.text === "" ) {
				this.toDelete = false;
				this.loop++;
				delta = 500;
			}

			setTimeout( function() {
				that.tick();
			}, delta );
		};

	} ); // End of document ready function

})( jQuery );
