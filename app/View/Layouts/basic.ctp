<?php
	// extend the primary layout
	$this->extend('example');

	// define the require.js script
	$this->Html->script('vendor/require.min.js', array(
    	'data-main' => '/js/basic',
    	'inline' => false
    ));

	// fetch the view
	echo $this->fetch('content');