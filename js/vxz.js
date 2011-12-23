/* vxzone common script
*
* @Author sublimeye
* @Date 23.12.2011
*
* */

/*
Main VXZone Module
 */
var VXZ = {
	cfg: {
		sShowcase: '.intro-showcase',
		sSwitcher: '.switcher',
		sSwitcherList: '.switcher-list',
		sSwitcherItem: '.switcher-item'
	},

	init: function() {
		this.showcase();
		this.vxzSwitcher();
	},

	/**
	 * Header Showcase-items randomizer
	 */
	showcase: function() {
		var $sc = $(this.cfg.sShowcase);

		if ( $sc.length ) {
			$sc.addClass('enabled');
			$sc.shuffle();
		}
	},

	vxzSwitcher: function() {
		var $switchers = $(this.cfg.sSwitcher);

		$.each($switchers, function(i, el) {
			var $el = $(el),
					$swList = $el.find(this.cfg.sSwitcherList),
					$swButtons = $swList.find('li'),
					$swItems = $el.find(this.cfg.sSwitcherItem),
					$active = $swList.find('.active'),
					activeId = 1*$active.attr('class').replace(/\D/g,'') - 1;

			$swItems.eq(activeId).show();

			$swButtons.bind('click', function(e) {
				var $target = $(e.currentTarget);

				/**
				 * if not active tab
				 */
				if ( !$target.hasClass('active') ) {
					var name = this.className,
							id = 1*name.replace(/\D/g,'') - 1;

					$swButtons.removeClass('active');
					$(this).addClass('active');

					$swItems.hide();
					$swItems.eq(id).show();
				}

				return false

			});
		}.bind(this));
	}
};
