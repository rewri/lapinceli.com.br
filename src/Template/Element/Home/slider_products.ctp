<div class="container block-products">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="strike">Nossos produtos</h2>
        </div>
    </div>
    <div class="row block-products-slider">
        <div class="col-md-12 col-xs-12">
            <div class="owl-carousel owl-theme">

                <div class="product-box text-center">
                    <?= $this->Html->link(
                        $this->Html->image('products/produto_01.jpg', array('height' => 350, 'width' => 350, 'alt' => 'Shampoo Anti-Resíduos', 'title' => 'Shampoo Anti-Resíduos')),
                        array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 1),
                        array('escape' => false)
                    ); ?>
                    <p class="product-title">Shampoo Anti-Resíduos</p>
                    <p class="product-subtitle">Shampoo especial com óleo de côco - 30ml</p>
                    <p>
                        <?= $this->Html->link(
                            'Veja mais detalhes',
                            array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 1),
                            array('class' => 'btn-detail btn-ghost', 'escape' => false)
                        ); ?>
                    </p>
                </div>

                <div class="product-box text-center">
                    <?= $this->Html->link(
                        $this->Html->image('products/produto_02.jpg', array('height' => 350, 'width' => 350, 'alt' => 'Shock Keratin', 'title' => 'Shock Keratin')),
                        array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 2),
                        array('escape' => false)
                    ); ?>
                    <p class="product-title">Shock Keratin</p>
                    <p class="product-subtitle">Luxe oil keration - 210ml</p>
                    <p>
                        <?= $this->Html->link(
                            'Veja mais detalhes',
                            array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 2),
                            array('class' => 'btn-detail btn-ghost', 'escape' => false)
                        ); ?>
                    </p>
                </div>

                <div class="product-box text-center">
                    <?= $this->Html->link(
                        $this->Html->image('products/produto_03.jpg', array('height' => 350, 'width' => 350, 'alt' => 'Shock Keratin', 'title' => 'Shock Keratin')),
                        array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 3),
                        array('escape' => false)
                    ); ?>
                    <p class="product-title">Reconstruor Térmico Capilar</p>
                    <p class="product-subtitle">Dermo Expertise Bifásica - 100ml</p>
                    <p>
                        <?= $this->Html->link(
                            'Veja mais detalhes',
                            array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 3),
                            array('class' => 'btn-detail btn-ghost', 'escape' => false)
                        ); ?>
                    </p>
                </div>

                <div class="product-box text-center">
                    <?= $this->Html->link(
                        $this->Html->image('products/produto_04.jpg', array('height' => 350, 'width' => 350, 'alt' => 'Shock Keratin', 'title' => 'Shock Keratin')),
                        array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 4),
                        array('escape' => false)
                    ); ?>
                    <p class="product-title">Máscara Teia</p>
                    <p class="product-subtitle">Máscara para Cílios</p>
                    <p>
                        <?= $this->Html->link(
                            'Veja mais detalhes',
                            array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 4),
                            array('class' => 'btn-detail btn-ghost', 'escape' => false)
                        ); ?>
                    </p>
                </div>

                <div class="product-box text-center">
                    <?= $this->Html->link(
                        $this->Html->image('products/produto_02.jpg', array('height' => 350, 'width' => 350, 'alt' => 'Shock Keratin', 'title' => 'Shock Keratin')),
                        array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 2),
                        array('escape' => false)
                    ); ?>
                    <p class="product-title">Shock Keratin</p>
                    <p class="product-subtitle">Luxe oil keration - 210ml</p>
                    <p>
                        <?= $this->Html->link(
                            'Veja mais detalhes',
                            array('plugin' => null, 'controller' => 'products', 'action' => 'detail', 'id' => 2),
                            array('class' => 'btn-detail btn-ghost', 'escape' => false)
                        ); ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
