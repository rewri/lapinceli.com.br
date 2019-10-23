<div class="container-fluid block-footer">
    <div class="row">
        <div class="col-md-7 col-xs-12 map-div">
            <div id="map"></div>
        </div>
        <div class="col-md-5 col-xs-12 address-div">
            <?= $this->Html->link(
                $this->Html->image('logo_lapinceli.png', array('width' => '230px')),
                array(
                    'plugin' => null,
                    'controller' => 'home',
                    'action' => 'index',
                ),
                array(
                    'escape' => false
                )
            ) ?>
            <p style="padding-top: 30px;">Avenida Santana, 360 - Centro - Botucatu/SP<br><br>+55 (14) 3880.9221</p>
            <p><a href="mailto:contato@lapinceli.com.br" style="color: #fff">contato@lapinceli.com.br</a></p>
        </div>
    </div>
</div>

