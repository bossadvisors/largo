<?php

include_once __DIR__ . '/HomepageSingle.php';

class HomepageSingleWithSeriesStories extends HomepageSingle {
	var $name = 'One big story and list of stories from the same series';
	var $type = 'series';
	var $description = 'A single story with full-width image treatment. Series stories appear to the right of the big story\'s headline and excerpt.';
	var $sidebars = array(
		'Home Bottom Left', 'Home Bottom Center', 'Home Bottom Right'
	);

	public function moreStories() {
		return homepage_series_stories_list();
	}
}
