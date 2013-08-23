/* globals define */

define(
	[
		'jquery',
		'views/gray',
		'views/red',
		'views/green',
		'views/yellow'
	],
	function($, Gray, Red, Green, Yellow){
		var App, views;

		/**
		 * Map used for dynamic view loading
		 * @type Object
		 */
		views = {
			gray : Gray,
			red : Red,
			green : Green,
			yellow : Yellow
		};

		/**
		 * Main Application Object
		 *
		 * @constructor
		 */
		App = function(){};

		/**
		 * Dynamically loads a view object based on the body's data-view attribute
		 *
		 * @return void
		 */
		App.prototype.init = function(){
			var key = $('body').data('view'),
				View = views[key];

			if (View){
				this.currentView = new View();
			}
		};

		/**
		 * Delegates to the currentView.colorize method
		 *
		 * @return void
		 */
		App.prototype.colorize = function(){
			if (this.currentView){
				this.currentView.colorize();
			}
		};

		return App;
	}
);