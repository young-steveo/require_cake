/* globals define */

define(['jquery', 'advancedApp', 'jqueryUI', 'bootstrap'], function($, App) {
	$(function() {
		var app = new App();

		app.init();
		app.colorize();
	});
});