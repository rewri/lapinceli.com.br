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

                        <div class="text-center product-box" style="height: 410px;">
                            <?php $image = "img/products/{$row['image']}"; ?>
                            <div class="product-image" style="background-image: url('<?php echo $image ?>');"></div>
                            <p class="product-title" style="font-family: 'Bebas', Arial, Helvetica, sans-serif; font-size: 26px; font-weight: 400"><?php echo $row['title']; ?></p>
                            <p class="product-subtitle"><?php echo $row['subtitle']; ?></p>
                            <p class="product-subtitle"><?php echo $row['info']; ?></p>
                            <?php if ($row['id'] == 6) : ?>
                                <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
                                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                    <input type="hidden" name="code" value="3B6DC486FBFB0B3EE4A6BF8D30EC8F23" />
                                    <input type="hidden" name="iot" value="button" />
                                    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-comprar-preto-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                </form>
                                <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
                                <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
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
