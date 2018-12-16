<?php
/**
 * @file
 * Add hook_library ().
 */
function my_subtheme_library () {
    // Ziehharmonika library declare.
    $libraries['ziehharmonika'] = [
        'title' => 'Ziehharmonika',
        'website' => 'https://github.com/Arcwise/ziehharmonika',
        'version' => '1.0',
        'js' => [
            'sites/all/libraries/ziehharmonika/ziehharmonika.js' => [],
        ],
        'css' => [
            'sites/all/libraries/ziehharmonika/ziehharmonika.css' => [],
        ],
    ];

    return $libraries;
}

/*
 * Implements hook_preprocess_views_view().
 * Attaching library and js behavior to FAQ page.
 */
function my_subtheme_preprocess_views_view(&$variables) {
	// Check if the view is faq page
	if ($variables['name'] == 'faq') {
		$options_JS = [
			'group' => JS_THEME,
		];
		drupal_add_library('my_subtheme', 'ziehharmonika');
		drupal_add_js(drupal_get_path('theme', 'my_subtheme') .'/js/behavior.js', $options_JS);
	}
}
