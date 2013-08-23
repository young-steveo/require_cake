/* globals requirejs */

/**
 * Basic Require.js Configuration
 */
requirejs.config({
	baseUrl : '/js',
	paths : {
		bootstrap : 'vendor/bootstrap.min',
		jquery : '//codeorigin.jquery.com/jquery-2.0.3.min'
	},
	shim : {
		bootstrap : ['jquery']
	}
});

// Load main module
require(["lib/basic-app"]);