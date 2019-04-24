<div class="container block-products">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="strike" style="margin-bottom: 35px;">Nossos produtos</h2>
        </div>
    </div>
    <div class="row block-products-slider">
        <div class="col-md-12 col-xs-12">
            <div class="owl-carousel owl-theme">

                <?php if (!empty($products)) : ?>
                    <?php foreach($products as $row) : ?>

                        <div class="text-center product-box">
                            <?php $image = "img/products/{$row['image']}"; ?>
                            <div class="product-image" style="background-image: url('<?php echo $image ?>');"></div>
                            <p class="product-title"><?php echo $row['title']; ?></p>
                            <p class="product-subtitle"><?php echo $row['subtitle']; ?></p>
                            <p class="product-subtitle"><?php echo $row['info']; ?></p>
                            <p class="product-subtitle"><?php echo $row['description']; ?></p>
                            <p style="padding-top: 10px">
                                <?= $this->Html->link(
                                    'Ver + detalhes',
                                    array(
                                        'plugin' => null,
                                        'controller' => 'products',
                                        'action' => 'detail',
                                        'slug' => strtolower(\Cake\Utility\Text::slug($row['title'], '-')),
                                        'id' => $row['id']
                                    ),
                                    array('class' => 'btn-detail btn-ghost', 'escape' => false, 'style' => 'display: block; width: 100%; text-transform: uppercase')
                                ); ?>
                            </p>
                            <p style="padding-top: 10px">
                                <?php $link = array($row['sell_link']); ?>
                                <?= $this->Html->link(
                                    'Comprar <span class="fas fa-shopping-cart" style="font-size: 10px"></span>',
                                    $link,
                                    array('class' => 'btn-detail btn-ghost', 'escape' => false, 'style' => 'display: block; width: 100%; text-transform: uppercase')
                                ); ?>
                            </p>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
