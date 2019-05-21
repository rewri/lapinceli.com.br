<div class="container block-products">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center">
            <h2 class="strike" style="margin-bottom: 35px; text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">Nossos produtos</h2>
        </div>
    </div>
    <div class="row block-products-slider">
        <div class="col-md-12 col-xs-12">
            <div class="owl-carousel owl-theme">

                <?php if (!empty($products)) : ?>
                    <?php foreach($products as $row) : ?>

                        <div class="text-center product-box" style="height: 400px;">
                            <?php $image = "img/products/{$row['image']}"; ?>
                            <div class="product-image" style="background-image: url('<?php echo $image ?>');"></div>
                            <p class="product-title" style="font-family: 'Bebas', Arial, Helvetica, sans-serif; font-size: 26px; font-weight: 400"><?php echo $row['title']; ?></p>
                            <p class="product-subtitle"><?php echo $row['subtitle']; ?></p>
                            <p class="product-subtitle"><?php echo $row['info']; ?></p>
                            <?php if ($row['id'] == 6) : ?>
                                <p style="padding-top: 10px">
                                    <!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7UVQfDTur/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/160x20-pagar-preto.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO -->
                                </p>
                            <?php endif; ?>
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
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
