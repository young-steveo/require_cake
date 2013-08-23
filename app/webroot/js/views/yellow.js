/* globals define */

define(function(){

	var Yellow = function(){};

	Yellow.prototype.colorize = function(){
		$('body').animate({ backgroundColor : '#ffd' }, 500);
	};

	return Yellow;
});