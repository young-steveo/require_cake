/* globals define */

define(['jquery'], function($){

	var Gray = function(){};

	Gray.prototype.colorize = function(){
		$('body').animate({ backgroundColor : '#ddd' }, 500);
	};

	return Gray;
});