/* globals define */

define(function(){

	var Red = function(){};

	Red.prototype.colorize = function(){
		$('body').animate({ backgroundColor : '#fdd' }, 500);
	};

	return Red;
});