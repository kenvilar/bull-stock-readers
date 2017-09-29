(function( $ ) {

	$( document ).ready( function() {
		// Text typing animation
		var TxtType = function( el, toType, period ) {
			this.toType = toType;
			this.el = el;
			this.loop = 0;
			this.period = parseInt( period, 10 ) || 2000;
			this.txt = '';
			this.tick();
			this.toDelete = false;
		};
	} );

})( jQuery );
