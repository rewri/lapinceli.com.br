<a id="toTopButton" title="Ir para o topo">
    <span class="fa fa-arrow-up"></span>
</a>

<?= $this->element('Pages/navbar'); ?>

<section class="hero">
    <div class="hero-inner">
        <h1 class="strike strike-white" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">La Pinceli Professional</h1>
        <h2 style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">Conheça todos nossos produtos</h2>
    </div>
</section>

<div class="container" style="padding-top: 30px">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center" style="min-height: 1000px">
            <h2 class="strike" style="padding-bottom: 40px; text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">Nossos produtos</h2>
            <?php if (!empty($data)) : ?>
                <div class="row" style="margin-bottom: 40px">
                    <?php foreach ($data as $row) : ?>
                        <div class="col-md-6 col-xs-12 text-center" style="margin-bottom: 60px;">

                            <div class="text-center product-box" style="border: 1px solid #ccc; padding: 20px 0; border-radius: 10px; height: 560px">
                                <?php $image = "img/products/{$row['image']}"; ?>
                                <div class="product-image" style="background-image: url('<?php echo $image ?>'); min-height: 350px; background-repeat: no-repeat; background-position: center center"></div>
                                <p class="product-title" style="font-size: 26px; font-weight: 400; margin-top: 15px; font-family: 'Bebas', Arial, Helvetica, sans-serif"><?php echo $row['title']; ?></p>
                                <p class="product-subtitle" style="font-size: 16px; font-weight: 600"><?php echo $row['subtitle']; ?></p>
                                <p class="product-subtitle" style="font-size: 16px; font-weight: 300"><?php echo $row['info']; ?></p>
                                <?php if ($row['id'] == 6) : ?>
                                    <p style="padding-top: 10px">
                                        <!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7UVQfDTur/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar-preto.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO -->
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
                                        array('class' => 'btn-detail btn-ghost', 'escape' => false, 'style' => 'display: inline-block; width: 70%; text-transform: uppercase')
                                    ); ?>
                                </p>
                            </div>


                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
