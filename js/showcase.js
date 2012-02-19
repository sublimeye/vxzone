var showcaseMaxItems = 8;

function getNumber( idx , max ) {
	var id = parseInt( Math.random() * max + 1 );

	if ( idx.indexOf( id ) >= 0 ) {
		id = getNumber( idx , max );
	}
	return id.toString();
}

function createShowcases() {
	var id = 0,
			idx = '',
			items = '',
			sc;

	for ( var i = 1; i <= showcaseMaxItems; i++ ) {
		id = getNumber( idx , showcaseMaxItems );
		idx += id;

		items += '<div class="scitem scitem-' + id + '"></div>';
	}

	sc = document.getElementById( 'showcase' );
	sc.innerHTML = "";
	sc.innerHTML = items;
}
