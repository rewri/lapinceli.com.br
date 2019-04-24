<a id="toTopButton" title="Ir para o topo">
    <span class="fa fa-arrow-up"></span>
</a>

<?= $this->element('Pages/navbar'); ?>

<section class="hero">
    <div class="hero-inner">
        <h1>La Pinceli Professional</h1>
        <h2><?php echo $data[0]['title']; ?></h2>
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
                            <h1 style="font-size: 52px"><?php echo $data[0]['title']; ?></h1>
                            <h2 style="font-size: 36px"><?php echo $data[0]['subtitle']; ?></h2>
                            <p><?php echo $data[0]['info']; ?></p>
                            <?php echo $this->Html->image("products/{$data[0]['image']}"); ?>
                            <p class="text-justify" style="padding: 30px"><?php echo nl2br($data[0]['description']); ?></p>
                            <p style="padding-top: 30px">
                                <?php $link = array($data[0]['sell_link']); ?>
                                <?= $this->Html->link(
                                    'Comprar',
                                    $link,
                                    array('class' => 'btn-detail btn-ghost', 'escape' => false, 'style' => 'display: inline-block; width: 100%; padding: 10px 0; font-size: 22px; text-transform: uppercase')
                                ); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
