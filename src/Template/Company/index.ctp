<a id="toTopButton" title="Ir para o topo">
    <span class="fa fa-arrow-up"></span>
</a>

<?= $this->element('Pages/navbar'); ?>

<section class="hero-company">
    <div class="hero-inner">
        <h1 class="strike strike-white" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">La Pinceli Professional</h1>
        <h2 style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">Conheça nossa história</h2>
    </div>
</section>

<div class="container-fluid block-company" style="margin: 30px 0 50px 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h1 class="strike" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><span class="text-emphasis">&bull;</span> La Pinceli Professional</h1>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <p style="margin-top: 20px; font-size: 18px">
                            Há mais de 14 anos, nossa equipe vem estudando os melhores produtos e agentes ao que se refere à cabelos.
                            <br>
                            Com o compromisso de satisfazer os consumidores, desenvolvemos uma <span class="text-emphasis">aliança entre bem estar, saúde e ciência</span>.
                            <br><br>
                            Cada produto e cada avanço foram trazidos para revolucionar os tratamentos capilares, gerado por pessoas que buscam fazer a diferença na área da beleza.
                            <br>
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12 text-right" style="margin-top: 20px;">
                        <a href="../../img/layout/fachada_la_pinceli.jpg" title="Fachada La Pinceli" data-lightbox="La Pinceli" data-title="La Pinceli">
                            <?php echo $this->Html->image("layout/fachada_la_pinceli.jpg", array('style' => 'max-width: 100%; max-height: 100%; border: 1px solid #fff; border-radius: 10px', 'alt' => 'La Pinceli',)); ?>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 text-right" style="margin-top: 20px;">
                        <a href="../../img/layout/recepcao_la_pinceli.jpg" title="La Pinceli" data-lightbox="La Pinceli" data-title="La Pinceli">
                            <?php echo $this->Html->image("layout/recepcao_la_pinceli.jpg", array('style' => 'max-width: 100%; max-height: 100%; border: 1px solid #fff; border-radius: 10px', 'alt' => 'La Pinceli',)); ?>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 text-right" style="margin-top: 20px;">
                        <a href="../../img/layout/reuniao_la_pinceli.jpg" title="La Pinceli" data-lightbox="La Pinceli" data-title="La Pinceli">
                            <?php echo $this->Html->image("layout/reuniao_la_pinceli.jpg", array('style' => 'max-width: 100%; max-height: 100%; border: 1px solid #fff; border-radius: 10px', 'alt' => 'La Pinceli',)); ?>
                        </a>
                    </div>
                </div>
                <div class="row" style="padding-top: 50px;">
                    <div class="col-md-6 col-xs-12">
                        <?= $this->Html->link(
                            'CONHEÇA NOSSA LOJA ONLINE',
                            'https://lapinceliprofessional.mercadoshops.com.br/',
                            array(
                                'title' => 'Veja nossa loja online',
                                'escape' => false,
                                'class' => 'btn btn-block btn-home',
                                'target' => '_blank'
                            )
                        ); ?>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <?= $this->Html->link(
                            'CONHEÇA NOSSO CATÁLOGO VIRTUAL',
                            'http://www.lapinceli.com.br/catalogo_2020_La_Pinceli_Professional.pdf',
                            array(
                                'title' => 'Conheça nosso catálogo',
                                'escape' => false,
                                'class' => 'btn btn-block btn-home',
                                'target' => '_blank'
                            )
                        ); ?>
                    </div>
                </div>

                <div class="row" style="margin: 30px 0 40px 0">
                    <div class="col-md-12 col-xs-12">
                        <h1 class="strike" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><span class="text-emphasis">&bull;</span> CT La Pinceli</h1>
                        <p style="margin-top: 20px; font-size: 18px">O Centro Técnico La Pinceli foi desenvolvido com a finalidade de cuidar dos nossos clientes de maneira exclusiva e essencial. <br><br>
                        Unindo beleza e bem estar, criamos esse espaço tanto para atender nossos clientes, quanto para desenvolvermos novos produtos, pois daqui saem os produtos exclusivos que chegam nos salões de beleza (Linha Profissional) e na casa de nossos clientes (Linha Home Care). <br><br>
                        No CT La Pinceli, você pode cuidar dos seus cabelos (Cabeleireiros) e das unhas (Pedicure e Podologia). <br><br>
                        Nosso CT ainda conta com uma sala para noivas totalmente intimista e exclusiva, para que o dia da noiva seja inesquecível.
                        </p>
                        <div class="row">
                        <?php for($i = 1; $i < 6; $i++) : ?>
                            <div class="col-md-4 col-xs-12 text-right" style="margin-top: 20px;">
                                <a href="../../img/layout/CT_<?php echo $i; ?>.jpg" title="CT La Pinceli" data-lightbox="CT La Pinceli" data-title="CT La Pinceli">
                                    <?php echo $this->Html->image("layout/CT_{$i}.jpg", array('style' => 'max-width: 100%; max-height: 100%; border: 1px solid #fff; border-radius: 10px', 'alt' => 'CT La Pinceli',)); ?>
                                </a>
                            </div>
                        <?php endfor; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

