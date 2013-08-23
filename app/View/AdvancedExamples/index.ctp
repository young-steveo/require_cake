<p>
	<?php
		echo $this->Html->link('Gray',
			array('controller' => 'advanced_examples', 'action' => 'gray'),
			array('class' => 'btn btn-default')
		);
		echo $this->Html->link('Red',
			array('controller' => 'advanced_examples', 'action' => 'red'),
			array('class' => 'btn btn-primary')
		);
		echo $this->Html->link('Green',
			array('controller' => 'advanced_examples', 'action' => 'green'),
			array('class' => 'btn btn-success')
		);
		echo $this->Html->link('Yellow',
			array('controller' => 'advanced_examples', 'action' => 'yellow'),
			array('class' => 'btn btn-warning')
		);
	?>
</p>
<?php $this->fetch('content'); ?>