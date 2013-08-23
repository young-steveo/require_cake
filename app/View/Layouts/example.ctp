<?php echo $this->Html->docType('html5'); ?>
<html>
    <head>
        <?php
            echo $this->Html->charset();
            echo $this->Html->tag('title', 'Require.js + CakePHP | ' . $title_for_layout);

            echo $this->Html->meta(array(
                'http-equiv' => 'X-UA-Compatible',
                'content' => 'IE=edge,chrome=1'
            ));
            echo $this->Html->meta('description', 'Using require.js with CakePHP');
            echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width'));

            echo $this->Html->css(array(
                'bootstrap.min.css',
                'main.css'
            ));
        ?>
    </head>
    <body data-view="<?php echo $this->request->action; ?>">
        <?php
            echo $this->element('Layouts/navigation', array(
                'activeLink' => $this->request->params['controller']
            ));
        ?>
        <div class="container">
            <?php
                echo $this->Session->flash();
                echo $this->fetch('content');
                echo $this->element('Layouts/footer');
            ?>
        </div>
        <?php echo $this->fetch('script'); ?>
    </body>
</html>