<a id="toTopButton" title="Ir para o topo">
    <span class="fa fa-arrow-up"></span>
</a>

<?= $this->element('Pages/navbar'); ?>

<section class="hero">
    <div class="hero-inner">
        <h1 class="strike strike-white">La Pinceli Professional</h1>
        <h2>Conheça todos nossos produtos</h2>
    </div>
</section>

<div class="container" style="padding-top: 30px">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center" style="min-height: 1000px">
            <h2 class="strike" style="padding-bottom: 40px">Nossos produtos</h2>
            <?php if (!empty($data)) : ?>
                <div class="row" style="margin-bottom: 40px">
                    <?php foreach ($data as $row) : ?>
                        <div class="col-md-6 col-xs-12 text-center" style="margin-bottom: 30px">
                            <div class="text-center" style="border: 1px solid #ccc; border-radius: 15px; padding: 30px">
                                <?= $this->Html->link(
                                    $this->Html->image("products/{$row['image']}", array('height' => $row['image_height'], 'alt' => $row['title'], 'title' => $row['title'])),
                                    array(
                                        'plugin' => null,
                                        'controller' => 'products',
                                        'action' => 'detail',
                                        'slug' => strtolower(\Cake\Utility\Text::slug($row['title'], '-')),
                                        'id' => $row['id'],
                                    ),
                                    array('escape' => false)
                                ); ?>
                                <p class="product-title"><?php echo $row['title']; ?></p>
                                <p class="product-subtitle"><?php echo $row['subtitle']; ?></p>
                                <p class="product-subtitle"><?php echo $row['info']; ?></p>
                                <p class="product-subtitle"><?php echo $row['description']; ?></p>
                                <p style="padding: 20px 0 0 0">
                                    <?= $this->Html->link(
                                        'Comprar',
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
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
