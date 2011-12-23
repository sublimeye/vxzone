/**
 * Extension functions
 */

/**
 * Console for IE
 */
if (typeof window.console == 'undefined') {
	window.console = {};
	console.log = console.info = console.warn = console.debug = console.group = console.groupEnd = console.error = console.time = console.timeEnd = function(){};
} else if (typeof window.console == 'object' && ($.browser.msie && $.browser.version == 8)) {
	console.debug = console.group = console.groupEnd = console.time = console.timeEnd = function(){};
}

/**
 * Array object extension
 */
$A = Array.from = function(iterable) {
	if (!iterable) {
		return [];
	}
	if (iterable.toArray) {
		return iterable.toArray();
	} else {
		var results = [];
		for (var i = 0, length = iterable.length; i < length; i++) {
			results.push(iterable[i]);
		}
		return results;
	}
};

/**
 * bind method support for older browsers
 */
$.extend( Function.prototype, {
	bind: function() {
		var __method = this, args = $A(arguments), object = args.shift();
		return function() {
			return __method.apply(object, args.concat($A(arguments)));
		};
	}
});


/*
 * jQuery shuffle
 *
 * Copyright (c) 2008 Ca-Phun Ung <caphun at yelotofu dot com>
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://yelotofu.com/labs/jquery/snippets/shuffle/
 *
 * Shuffles an array or the children of a element container.
 * This uses the Fisher-Yates shuffle algorithm <http://jsfromhell.com/array/shuffle [v1.0]>
 */

(function ($) {

	$.fn.shuffle = function () {
		return this.each( function () {
			var items = $( this ).children().clone( true );
			return (items.length) ? $( this ).html( $.shuffle( items ) ) : this;
		} );
	};

	$.shuffle = function (arr) {
		for ( var j, x, i = arr.length; i; j = parseInt( Math.random() * i ), x = arr[--i], arr[i] = arr[j], arr[j] = x ) {/*operations inside of for statement*/}
		return arr;
	}

})( jQuery );

require( ["jquery", "vxz"] , function ($) {
	//the jquery.alpha.js and jquery.beta.js plugins have been loaded.
	$( function () {
		$( VXZ.init() );
	} );
} );
