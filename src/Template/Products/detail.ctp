<a id="toTopButton" title="Ir para o topo">
    <span class="fa fa-arrow-up"></span>
</a>

<?= $this->element('Pages/navbar'); ?>

<section class="hero">
    <div class="hero-inner">
        <h1 style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">La Pinceli Professional</h1>
        <h2 style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><?php echo $data[0]['title']; ?></h2>
    </div>
</section>

<div class="container" style="padding-top: 30px">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <?php echo $this->Html->link('<span class="fas fa-arrow-left"></span> Voltar', array('action' => 'index'), array('style' => 'font-size: 22px; color: #B98B37; font-weight: 600', 'escape' => false)); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12" style="margin-bottom: 50px">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 text-center">
                            <h1 style="font-size: 52px; font-weight: 400; font-family: 'Bebas', Arial, Helvetica, sans-serif"><?php echo $data[0]['title']; ?></h1>
                            <h2 style="font-size: 36px"><?php echo $data[0]['subtitle']; ?></h2>
                            <p style="font-size: 20px"><?php echo $data[0]['info']; ?></p>
                            <?php echo $this->Html->image("products/{$data[0]['image']}"); ?>
                            <p class="text-left" style="padding: 30px; font-size: 24px; font-weight: 300; line-height: 1.7em"><?php echo nl2br($data[0]['description']); ?></p>
                            <?php if ($data[0]['id'] == 6) : ?>
                            <p style="padding-top: 30px">
                                <!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7UVQfDTur/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar-preto.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO -->
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
