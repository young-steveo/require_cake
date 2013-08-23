/* globals define */

define(function(){

	var Green = function(){};

	Green.prototype.colorize = function(){
		$('body').animate({ backgroundColor : '#dfd' }, 500);
	};

	return Green;
});