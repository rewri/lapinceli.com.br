<a id="toTopButton" title="Ir para o topo">
    <span class="fa fa-arrow-up"></span>
</a>

<?= $this->element('Pages/navbar'); ?>

<section class="hero" style="height: 180px !important">
    <div class="hero-inner" style="height: 60px !important">
        <h1 style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><?php echo $data['title']; ?></h1>
        <h2 style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><?php echo $data[0]['title']; ?></h2>
    </div>
</section>

<style>
    .product-image {
        filter: brightness(100%);
        transition: all .8s ease;
    }
    .product-image:hover {
        filter: brightness(90%);
        transition: all .8s ease;
    }
    .breadcrumb {
        margin-bottom: 20px;
        padding-left: 0;
        background-color: #fcfcfc
    }
    .breadcrumb a {
        color: #545454;
        font-size: 14px;
    }
</style>

<div class="container" style="padding-top: 30px; margin-bottom: 50px">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <?php
            $this->Breadcrumbs->add([
                ['title' => '<span class="glyphicon glyphicon-home"></span>', 'url' => ['controller' => 'home', 'action' => 'index']],
                ['title' => 'Todos os produtos', 'url' => ['controller' => 'products', 'action' => 'index']],
                ['title' => $data['title']]
            ]);
            ?>
            <?php echo $this->Breadcrumbs->render(['class' => 'breadcrumb']); ?>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12" style="margin-bottom: 50px">
            <div class="panel-default" style="border: 0; background-color: #fcfcfc">
                <div class="panel-body">
                    <div class="row" style="">
                        <div class="col-md-7 col-xs-12">
                            <h1 style="margin:0; font-size: 52px; font-weight: 400; font-family: 'Bebas', Arial, Helvetica, sans-serif"><?php echo $data['title']; ?></h1>
                            <h2 style="font-size: 36px"><?php echo $data['subtitle']; ?></h2>
                            <p style="font-size: 20px"><?php echo $data['info']; ?></p>
                            <p class="text-left" style="padding-top: 30px; font-size: 18px; font-weight: 300; line-height: 1.7em"><?php echo nl2br($data['description']); ?></p>
                        </div>
                        <div class="col-md-5 col-xs-12 text-center">
                            <div class="row">
                                <div class="col-md-12 col-xs-12" style="">
                                    <a href="../../img/products/<?php echo $data['id']; ?>/<?php echo $data['image']; ?>" title="Clique para ampliar" class="product-image" data-lightbox="main-<?php echo $data['id']; ?>" data-title="<?php echo $data['title']; ?>">
                                        <?php echo $this->Html->image("products/{$data['id']}/{$data['image']}", array('style' => 'max-width:100%; max-height:100%; border: 1px solid #e8d3a7; border-radius: 8px')); ?>
                                    </a>
                                </div>
                            </div>
                            <?php if (!empty($data['product_images'])) : ?>
                                <div class="row" style="margin-top: 10px">
                                    <?php foreach($data['product_images'] as $image) : ?>
                                        <div class="col-md-4 col-xs-12 text-center"  style="margin-bottom: 10px">
                                            <a href="../../img/products/<?php echo $data['id']; ?>/<?php echo $image['image']; ?>" title="Clique para ampliar" class="product-image" data-lightbox="<?php echo $data['title']; ?>" data-title="<?php echo $image['title']; ?>">
                                                <?php echo $this->Html->image("products/{$data['id']}/{$image['image']}", array('style' => 'max-width:100%; max-height:100%; border: 1px solid #e8d3a7; border-radius: 8px')); ?>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xs-12" style="margin: 5px 0 25px 0">
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

    </div>
</div>

