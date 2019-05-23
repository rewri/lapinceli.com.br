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

<div class="container padding-top-30 padding-bottom-60">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-18" style="min-height: 1000px; padding-top: 30px">
            <h1 class="strike" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><span class="text-emphasis">&bull;</span> La Pinceli Professional</h1>
            <p style="margin-top: 30px; font-size: 18px">
                Há mais de 14 anos, nossa equipe vem estudando os melhores produtos e agentes ao que se refere à cabelos.
                <br>
                Com o compromisso de satisfazer os consumidores, desenvolvemos uma <span class="text-emphasis">aliança entre bem estar, saúde e ciência</span>.
                <br>
                Cada produto e cada avanço foram trazidos para revolucionar os tratamentos capilares, gerado por pessoas que buscam fazer a diferença na área da cosmetologia.
                <br>
            </p>
            <p style="margin-top: 20px; font-size: 18px; font-weight: 600">
                Assim chegamos ao nosso resultado final e é com grande alegria que apresentamos a vocês a primeira linha de produtos <span class="text-emphasis">LA PINCELI PROFESSIONAL</span>.
            </p>
            <div class="text-center">
                <?= $this->Html->image('layout/produtos.jpg', array('width' => '90%', 'alt' => 'Imagem produtos', 'style' => 'padding: 30px 0 60px 0'))?>
            </div>
        </div>
    </div>
</div>
