<?php
	// extend the primary layout
	$this->extend('example');

	// define the require.js script
	$this->Html->script('vendor/require.min.js', array(
    	'inline' => false
    ));

	// buffer some javascript to load the proper module
	$this->Html->scriptStart(array('inline' => false));
?>
require(['/js/advanced.js'], function(){
	require(['modules/<?php echo $javascriptModule; ?>']);
});
<?php
	$this->Html->scriptEnd();

	// fetch the view
	echo $this->fetch('content');