<div class="container block-services">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-right">
            <h2 class="strike">Serviços <span class="text-emphasis">&bull;</span> </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <div class="video-div">
                <iframe class="video-iframe" src="https://www.youtube.com/embed/ujO6w-wHgUw?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            <h3>Lorem ipsum, dolor sit amet elit</h3>
            <p>
                Vivamus vestibulum accumsan augue, vitae congue massa semper sit amere ullamcorper
                in eget nisl. <span class="text-emphasis">Quisque commodo</span> accumsan quam, id rutrum sem. Duis velit leo, molestie eu eleifend eget, convallis eu arcu. Nullam pretium nibh sed metus dictum.
            </p>
            <p>
                Quis venenatis neque volutpat. Morbi in velit quis enim feugiat vuet lectus efficitur.
                Vivamus commodo mattis ligula, vel vehicula <span class="text-emphasis">odio porta et</span>. Nulla eu erat commodo, rutrum purus in,
                <span class="text-emphasis">vestibulum</span> magna. Sed elit mi, aliquam eu posuere vel, venenatis et urna.
                Curabitur et ante non dui lacinia sem ultricies.
            </p>
            <p style="margin-top: 25px">
                <?= $this->Html->link(
                    'Veja mais',
                    array(
                        'plugin' => null,
                        'controller' => 'services',
                        'action' => 'index',
                    ),
                    array(
                        'class' => 'btn-detail btn-ghost'
                    )
                ); ?>
            </p>
        </div>
    </div>
</div>
