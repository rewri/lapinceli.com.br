<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"  style="background-color: #C99B3E; padding: 7px 10px 2px 10px !important;">
                <i class="fas fa-bars" style="color: #fff"></i>
            </button>
                <?= $this->Html->link(
                    $this->Html->image('logo_lapinceli.png', array('class' => 'logo', 'alt' => 'Logotipo la Pinceli')),
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
            <ul class="nav navbar-nav navbar-right" style="padding-top: 30px">
                <?php
                    switch (strtolower($this->request->getParam('controller'))) {
                        case 'company' :
                            $activeHome = null;
                            $activeCompany = 'active';
                            $activeProducts = null;
                            $activeTips = null;
                            break;
                        case 'products' :
                            $activeHome = null;
                            $activeCompany = null;
                            $activeProducts = 'active';
                            $activeTips = null;
                            break;
                        case 'tips' :
                            $activeHome = null;
                            $activeCompany = null;
                            $activeProducts = null;
                            $activeTips = 'active';
                            break;
                        default :
                            $activeHome = 'active';
                            $activeCompany = null;
                            $activeProducts = null;
                            $activeTips = null;
                            break;
                    }
                ?>
                <li class="<?php echo $activeHome; ?>">
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
                </li>
                <li class="<?php echo $activeCompany; ?>">
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
                <li class="<?php echo $activeProducts; ?>">
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
                <li class="<?php echo $activeTips; ?> hidden">
                    <?php echo $this->Html->link('Dicas e Tutoriais <i class="fas fa-angle-double-right text-12"></i>',
                        array(
                            'plugin' => null,
                            'controller' => 'tips',
                            'action' => 'index',
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
