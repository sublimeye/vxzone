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
		sSwitcherItem: '.switcher-item',
		sArticleVoting: '#article-voting',
		sVotingNotification: '.voting-notification'
	},

	init: function() {
		this.vxzSwitcher();
		this.voting();
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
	},

	voting: function() {
		var _vxz = this,
			url,
			voting = $(this.cfg.sArticleVoting),
			counter, voteBtn;

		if ( voting.length ) {
			voteBtn = voting.find('.btn-counter');
			counter = voting.find('.rating-data');

			voteBtn.bind('click.vote_action', function(e) {
				e.preventDefault();

				// send request
				$.ajax({
					type:'POST',
					url: e.target.href,
					dataType:'json',
					success:function (data, status, jqXHR) {
						if (status === "success") {
							// show notification text
							_vxz.showVotingNotification(voting, data['msg']);
							// update voting caounter
							counter.text(data['count']);
						}
					},
					complete:function (jqXHR, status) {
						if (status !== "success") {
							console.log('Bad request');
						}
					}
				});
			}.bind(this));
		}
	},

	showVotingNotification: function(container, message) {
		var notification = container.find(this.cfg.sVotingNotification);

		notification.text(message);
		notification.stop(false,false).fadeIn(200);
		setTimeout(function() {
			notification.stop(false,false).fadeOut();
		}, 3000);
	}
};
