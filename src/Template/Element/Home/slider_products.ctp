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


                        <div class="text-center" style="border: 1px solid #ccc; border-radius: 15px; padding: 30px">
                            <?= $this->Html->link(
                                $this->Html->image("products/{$row['image']}", array('height' => 300, 'alt' => $row['title'], 'title' => $row['title'])),
                                array(
                                    'plugin' => null,
                                    'controller' => 'products',
                                    'action' => 'detail',
                                    'slug' => strtolower(\Cake\Utility\Text::slug($row['title'], '-')),
                                    'id' => $row['id'],
                                ),
                                array('escape' => false)
                            ); ?>
                            <p class="product-title"><?php echo $row['title']; ?></p>
                            <p class="product-subtitle"><?php echo $row['subtitle']; ?></p>
                            <p class="product-subtitle"><?php echo $row['info']; ?></p>
                            <p class="product-subtitle"><?php echo $row['description']; ?></p>
                            <p style="padding: 20px 0 0 0">
                                <?= $this->Html->link(
                                    'Comprar',
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
                        </div>


                    <?php endforeach; ?>
                <?php endif; ?>


            </div>
        </div>
    </div>
</div>
