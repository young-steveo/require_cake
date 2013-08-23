<?php
    $types = array(
        'basic' => $activeLink === 'basic_examples' ? 'active' : '',
        'advanced' => $activeLink === 'advanced_examples' ? 'active' : ''
    );
?>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                echo $this->Html->link(
                    'CakePHP + Require.js',
                    array('controller' => 'basic_examples', 'action' => 'index'),
                    array('class' => 'navbar-brand')
                );
            ?>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach($types as $type => $active) : ?>
                    <li class="<?php echo $active; ?>">
                        <?php
                            echo $this->Html->link(ucfirst($type), array(
                                'controller' => $type . '_examples',
                                'action' => 'index'
                            ));
                        ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>