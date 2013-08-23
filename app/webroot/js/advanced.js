/* globals requirejs */

/**
 * Advanced Require.js Configuration
 */
requirejs.config({
	baseUrl : '/js',
	paths : {
		advancedApp : 'lib/advanced-app',
		bootstrap : 'vendor/bootstrap.min',
		jquery : '//codeorigin.jquery.com/jquery-2.0.3.min',
		jqueryUI : '//codeorigin.jquery.com/ui/1.10.3/jquery-ui.min'
	},
	shim : {
		bootstrap : ['jquery'],
		jqueryUI : ['jquery']
	}
});