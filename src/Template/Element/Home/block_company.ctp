<div class="container-fluid block-company">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="strike" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><span class="text-emphasis">&bull;</span> La Pinceli Professional</h1>
                <div class="row">
                    <div class="col-md-9 col-xs-12">
                        <p style="margin-top: 20px; font-size: 16px">
                            Há mais de 14 anos, nossa equipe vem estudando os melhores produtos e agentes ao que se refere à cabelos.
                            <br>
                            Com o compromisso de satisfazer os consumidores, desenvolvemos uma <span class="text-emphasis">aliança entre bem estar, saúde e ciência</span>.
                            <br>
                            Cada produto e cada avanço foram trazidos para revolucionar os tratamentos capilares, gerado por pessoas que buscam fazer a diferença na área da beleza.
                            <br>
                        </p>
                        <p style="margin-top: 10px; font-size: 16px; font-weight: 600">
                            Assim chegamos ao nosso resultado final e é com grande alegria que apresentamos a vocês a primeira linha de produtos <span class="text-emphasis">LA PINCELI PROFESSIONAL</span>.
                        </p>
                        <p style="padding-top: 20px">
                            <?= $this->Html->link(
                                'Veja mais',
                                array(
                                    'plugin' => null,
                                    'controller' => 'company',
                                    'action' => 'index',
                                ),
                                array(
                                    'class' => 'btn-detail btn-ghost'
                                )
                            ); ?>
                        </p>
                    </div>
                    <div class="col-md-3 hidden-sm hidden-xs text-right">
                        <?= $this->Html->image('layout/produtos.jpg', array('class' => 'block-company-image', 'alt' => 'Imagem produtos'))?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
