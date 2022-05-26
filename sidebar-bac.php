<?php
/**
 * The sidebar containing bids
 *
 * @package WordPress
 * @subpackage Diana
 * subpackage Diana 1.0
 */
?>
<nav class="page-sub-menu scrolling-nav">
	<ul>
		<?php 
		$urls = array(
			array(
				regex => '/\/bids-and-awards-committee/',
				url => home_url('/bids-and-awards-committee'),
				name => 'All',
			),
			array(
				regex => '/\/category\/bac\/invitation-to-bid/',
				url => home_url('/category/bac/invitation-to-bid'),
				name => 'Invitation to Bid (ITB)',
			),
			array(
				regex => '/\/category\/bac\/notice-for-negotiated-procurement/',
				url => home_url('/category/bac/notice-for-negotiated-procurement'),
				name => 'Notice for Negotiated Procurement',
			),
			array(
				regex => '/\/category\/bac\/notice-of-award/',
				url => home_url('/category/bac/notice-of-award'),
				name => 'Notice of Award',
			),
			array(
				regex => '/\/category\/bac\/award-notices/',
				url => home_url('/category/bac/award-notices'),
				name => 'Award Notices',
			),
			array(
				regex => '/\/category\/bac\/bid-bulletin/',
				url => home_url('/category/bac/bid-bulletin'),
				name => 'Bid Bulletin',
			),
			array(
				regex => '/\/category\/bac\/project-monitoring-report/',
				url => home_url('/category/bac/project-monitoring-report'),
				name => 'Project Monitoring Report (PMR)',
			),
			array(
				regex => '/\/category\/bac\/annual-procurement-plan/',
				url => home_url('/category/bac/annual-procurement-plan'),
				name => 'Annual Procurement Plan (APP)',
			),
			array(
				regex => '/\/category\/bac\/small-value-procurement/',
				url => home_url('/category/bac/small-value-procurement'),
				name => 'Small Value Procurement (SVP)',
			),
		);
		for ($i = 0; $i < count($urls); $i++):
		?>
			<li class="<?= diana_is_current($urls[$i]['regex']); ?>"><a href="<?= $urls[$i]['url']; ?>"><?= $urls[$i]['name']; ?></a></li>
		<?php 
		endfor;
		?>
	</ul>
</nav>