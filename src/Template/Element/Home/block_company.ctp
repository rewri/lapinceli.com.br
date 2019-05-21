<div class="container-fluid block-company">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="strike" style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif"><span class="text-emphasis">&bull;</span> La Pinceli Professional</h1>
                <div class="row">
                    <div class="col-md-9 col-xs-12">
                        <p style="margin-top: 30px;">
                            Vivamus vestibulum accumsan augue, vitae congue massa semper sit amet. Vestibulum sit amet laoreet tortor, in rutrum tortor. Cras in nunc vitae mauris ornare ullamcorper
                            in eget nisl. <span class="text-emphasis">Quisque commodo</span> accumsan quam, id rutrum sem. Duis velit leo, molestie eu eleifend eget, convallis eu arcu. Nullam pretium nibh sed metus dictum.
                        </p>
                        <p>
                            Quis venenatis neque volutpat. Morbi in velit quis enim feugiat vulputate non id enim. Proin condimentum augue ut lectus tristique, ac imperdiet lectus efficitur.
                            Vivamus commodo mattis ligula, vel vehicula <span class="text-emphasis">odio porta et</span>. Nulla eu erat commodo, rutrum purus in,
                            <span class="text-emphasis">vestibulum</span> magna. Sed elit mi, aliquam eu posuere vel, venenatis et urna.
                            Curabitur et ante non dui lacinia pulvinar non at erat. Sed bibendum est sit amet sem ultricies.
                        </p>
                        <p>
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
