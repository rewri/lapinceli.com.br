<nav class="navbar navbar-inverse lp-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <?= $this->Html->link(
                    $this->Html->image('logo_lapinceli.png', array('height' => 48, 'class' => 'logo', 'alt' => 'Logotipo la Pinceli')),
                    array(
                        'plugin' => null,
                        'controller' => 'home',
                        'action' => 'index',
                    ),
                    array(
                        'escape' => false,
                        'title' => 'La Pinceli',
                        'class' => 'navbar-brand'
                    )
                ); ?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <?php echo $this->Html->link('<span class="fa fa-home"></span>',
                        array(
                            'plugin' => null,
                            'controller' => 'home',
                            'action' => 'index',
                        ),
                        array(
                            'class' => '',
                            'escape' => false,
                        )
                    ); ?>
                <li>
                    <?php echo $this->Html->link('A empresa <i class="fas fa-angle-double-right text-12"></i>',
                        array(
                            'plugin' => null,
                            'controller' => 'company',
                            'action' => 'index',
                        ),
                        array(
                            'class' => '',
                            'escape' => false,
                        )
                    ); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Produtos <i class="fas fa-angle-double-right text-12"></i>',
                        array(
                            'plugin' => null,
                            'controller' => 'products',
                            'action' => 'index',
                        ),
                        array(
                            'class' => '',
                            'escape' => false
                        )
                    ); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Serviços <i class="fas fa-angle-double-right text-12"></i>',
                        array(
                            'plugin' => null,
                            'controller' => 'company',
                            'action' => 'services',
                        ),
                        array(
                            'class' => '',
                            'escape' => false
                        )
                    ); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Contato <i class="fas fa-angle-double-right text-12"></i>',
                        'javascript:;',
                        array(
                            'class' => 'goToBottom',
                            'escape' => false
                        )
                    ); ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
