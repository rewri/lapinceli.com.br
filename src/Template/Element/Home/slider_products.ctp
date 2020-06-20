<?php use Cake\Routing\Router; ?>
<div class="container block-products">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="strike" style="margin-bottom: 15px; text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">Nossos produtos</h2>
            <p>
                <?= $this->Html->link(
                    '&bull; Conheça aqui toda a linha de produtos La Pinceli &bull; ',
                    array(
                        'plugin' => null,
                        'controller' => 'products',
                        'action' => 'index'
                    ),
                    array('class' => '', 'escape' => false, 'style' => 'text-decoration: none; color: #AC7833; font-size: 16px; margin-bottom: 25px; display: inline-block')
                ); ?>
            </p>
        </div>
    </div>
    <div class="row block-products-slider">
        <div class="col-md-12 col-xs-12">
            <div class="owl-carousel owl-theme">
                <?php if (!empty($products)) : ?>
                    <?php foreach($products as $row) : ?>
                        <?php $url = Router::fullBaseUrl() . Router::url(['plugin' => null,
                            'controller' => 'products',
                            'action' => 'detail',
                            'slug' => strtolower(\Cake\Utility\Text::slug($row['title'], '-')),
                            'id' => $row['id']]); ?>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <a href="<?php echo $url; ?>" style="color: #282828; text-decoration: none" title="Ver mais detalhes de <?php echo $row['title']; ?>">
                                    <div class="text-center product-box">
                                        <?php $image = "img/products/{$row['id']}/{$row['image']}"; ?>
                                        <div class="product-image" style="background-image: url('<?php echo $image ?>');"></div>
                                        <p class="product-title"><?php echo $row['title']; ?></p>
                                        <p class="product-info"><?php echo $row['info']; ?></p>
                                        <p class="product-subtitle"><?php echo $row['subtitle']; ?></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <p style="padding-top: 10px">
                                <?= $this->Html->link(
                                    'Ver mais detalhes',
                                    array(
                                        'plugin' => null,
                                        'controller' => 'products',
                                        'action' => 'detail',
                                        'slug' => strtolower(\Cake\Utility\Text::slug($row['title'], '-')),
                                        'id' => $row['id']
                                    ),
                                    array('class' => 'btn-product-detail', 'escape' => false)
                                ); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
