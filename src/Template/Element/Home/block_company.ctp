<div class="container-fluid block-company">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h1 class="strike" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><span class="text-emphasis">&bull;</span> La Pinceli Professional</h1>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <p style="margin-top: 20px; font-size: 18px">
                            Há mais de 14 anos, nossa equipe vem estudando os melhores produtos e agentes ao que se refere à cabelos.
                            <br>
                            Com o compromisso de satisfazer os consumidores, desenvolvemos uma <span class="text-emphasis">aliança entre bem estar, saúde e ciência</span>.
                            <br>
                            Cada produto e cada avanço foram trazidos para revolucionar os tratamentos capilares, gerado por pessoas que buscam fazer a diferença na área da beleza.
                            <br>
                        </p>
                        <p style="margin-top: 10px; font-size: 16px; font-weight: 600; display: none">
                            Assim chegamos ao nosso resultado final e é com grande alegria que apresentamos a vocês a primeira linha de produtos <span class="text-emphasis">LA PINCELI PROFESSIONAL</span>.
                        </p>
                        <div class="row" style="padding-top: 50px">
                            <div class="col-md-4 col-xs-12">
                                <?= $this->Html->link(
                                    'CT LA PINCELI',
                                    array(
                                        'plugin' => null,
                                        'controller' => 'company',
                                        'action' => 'index',
                                    ),
                                    array(
                                        'title' => 'Conheça nossa história',
                                        'escape' => false,
                                        'class' => 'btn btn-block btn-home',
                                    )
                                ); ?>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <?= $this->Html->link(
                                    'LOJA ONLINE',
                                    'https://lapinceliprofessional.mercadoshops.com.br/',
                                    array(
                                        'title' => 'Veja nossa loja online',
                                        'escape' => false,
                                        'class' => 'btn btn-block btn-home',
                                        'target' => '_blank'
                                    )
                                ); ?>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <?= $this->Html->link(
                                    'SEJA UM DISTRIBUIDOR',
                                    'javascript:;',
                                    array(
                                        'title' => 'Seja um distribuidor La Pinceli',
                                        'escape' => false,
                                        'class' => 'btn btn-block btn-home',
                                        'id' => 'go-to-distributor'
                                    )
                                ); ?>
                            </div>
                        </div>
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12 text-right" style="margin-top: 20px;">
                        <a href="../../img/layout/fachada_la_pinceli.jpg" title="Fachada La Pinceli" data-lightbox="Fachada La Pinceli" data-title="Fachada La Pinceli">
                            <?php echo $this->Html->image("layout/fachada_la_pinceli.jpg", array('style' => 'max-width: 95%; max-height: 90%; border: 1px solid #fff; border-radius: 10px', 'alt' => 'Fachada La Pinceli',)); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
