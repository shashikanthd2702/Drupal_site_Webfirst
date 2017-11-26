<?php

function custom_preprocess_html(&$vars) {
	
}


function custom_preprocess_page(&$vars) {
/* 	echo "<pre>";
	print_r($vars); die; */
	drupal_add_library('system', 'ui');
}


function custom_preprocess_node(&$vars) {
/* 	echo "<pre>";
	print_r($vars); die; */
}

function custom_preprocess_views_view(&$vars) {
$view = '';
	$view = $vars['view'];
/* 	echo "<pre>";
	print_r($view); die; */
    if ($view->name == 'task_a1') {
       // add stylesheet
       drupal_add_css(drupal_get_path('theme', 'custom') .'/css/task_a1.css');
   }	
}

