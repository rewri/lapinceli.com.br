<a id="toTopButton" title="Ir para o topo">
    <span class="fa fa-arrow-up"></span>
</a>

<?= $this->element('Pages/navbar'); ?>

<section class="hero">
    <div class="hero-inner hidden-xs">
        <h1 class="strike strike-white" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">La Pinceli Professional</h1>
        <h2 style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">Conheça todos nossos produtos</h2>
    </div>
</section>

<style>
/*** BLOCK PRODUCTS ***/
.block-products {
    padding: 35px 0 15px 0;
}
.block-products .product-box {
    border: 1px solid #fff;
    border-radius: 15px;
    transition: border-color 0.6s linear, opacity .5s;
}
.block-products .product-box:hover {
    opacity: .9;
    border: 1px solid #AC7834;
    transition: border-color 0.6s linear, opacity .5s;
}
.block-products .product-image {
    background-position: center top;
    background-size: cover;
    background-repeat: no-repeat;
    margin-bottom: 15px;
}
.block-products .product-title {
    font-family: 'Bebas', Arial, Helvetica, sans-serif;
    font-size: 28px;
    font-weight: 400;
    letter-spacing: 1px;
    margin: 0;
    padding: 0;
}
.block-products .product-subtitle{
    font-size: 18px;
    font-weight: 300;
    margin: 0 0 10px 0;
    padding: 0;
}
.block-products .product-info{
    margin-top: 8px;
    font-size: 18px;
    font-weight: 500;
}
.block-products .btn-product-detail {
    font-weight: 600;
    text-transform: uppercase;
    font-size: 18px;
    background-color: #f7f7f4;
    border: 1px solid #AC7833;
    color: #AC7833;
    border-radius: 8px;
    padding: 8px 8px 4px 8px;
    text-decoration: none;
    transition: background-color 0.5s ease;
    margin-bottom: 5px;
    width: 80%;
    display: inline-block;
    text-align: center;
}
.block-products .btn-product-detail:hover {
    font-weight: 500;
    color: #fff;
    background-color: #AC7833;
    border: 1px solid #AC7833;
    text-decoration: none;
    transition: background-color 0.5s ease;
}

@media screen and (max-width: 600px) {

    .block-products .product-box {
        padding: 0;
    }
    .block-products .product-image {
        height: 200px;
        background-size: 50% auto;
    }
    .block-products .btn-product-detail {
        width: 70%;
    }
}

</style>

<div class="container block-products" style="padding-top: 30px; background-color: #fff">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center" style="min-height: 1000px">
            <h2 class="strike" style="padding-bottom: 20px; text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">Nossos produtos</h2>
            <?php if (!empty($data)) : ?>
                <div class="row" style="margin-bottom: 40px">

                    <div class="col-md-6 col-xs-12" style="margin: 5px 0 45px 0">
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
                    <div class="col-md-6 col-xs-12" style="margin: 5px 0 45px 0">
                        <?= $this->Html->link(
                            'CONHEÇA NOSSO CATÁLOGO VIRTUAL',
                            'http://www.lapinceli.com.br/catalogo_2020_La_Pinceli_Professional.pdf',
                            array(
                                'title' => 'Veja nosso catálogo',
                                'escape' => false,
                                'class' => 'btn btn-block btn-home',
                                'target' => '_blank'
                            )
                        ); ?>
                    </div>

                    <?php foreach ($data as $row) : ?>
                        <div class="col-md-6 col-xs-12 text-center" style="margin-bottom: 60px;">
                            <div class="text-center product-box">
                                <div class="row">
                                    <div class="col-cd-12 col-xs-12">
                                        <?php $image = "img/products/{$row['id']}/{$row['image']}"; ?>

                                        <a href="../../img/products/<?php echo $row['id']; ?>/<?php echo $row['image']; ?>" title="Clique para ampliar" class="product-image" data-lightbox="<?php echo $row['id']; ?>" data-title="<?php echo $row['title']; ?>">
                                            <?php echo $this->Html->image("products/{$row['id']}/{$row['image']}", array('style' => 'max-width: 80%; max-height:100%;')); ?>
                                        </a>

                                        <p class="product-title"><?php echo $row['title']; ?></p>
                                        <p class="product-subtitle"><?php echo $row['subtitle']; ?></p>
                                        <p class="product-subtitle"><?php echo $row['info']; ?></p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 text-center">
                                        <p style="padding-top: 10px">
                                        <?= $this->Html->link(
                                            'Ver mais detalhes',
                                            array(
                                                'plugin' => null,
                                                'controller' => 'products',
                                                'action' => 'detail',
                                                'slug' => strtolower(\Cake\Utility\Text::slug($row['title'], '-')),
                                                'id' => $row['id']
                                            ),
                                            array('class' => 'btn-product-detail', 'escape' => false)
                                        ); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-md-6 col-xs-12" style="margin: 5px 0 45px 0">
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
                <div class="col-md-6 col-xs-12" style="margin: 5px 0 45px 0">
                    <?= $this->Html->link(
                        'CONHEÇA NOSSO CATÁLOGO VIRTUAL',
                        'http://www.lapinceli.com.br/catalogo_2020_La_Pinceli_Professional.pdf',
                        array(
                            'title' => 'Veja nosso catálogo',
                            'escape' => false,
                            'class' => 'btn btn-block btn-home',
                            'target' => '_blank'
                        )
                    ); ?>
                </div>

            <?php endif; ?>
        </div>
    </div>
</div>
