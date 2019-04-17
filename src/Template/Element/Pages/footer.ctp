<div class="container-fluid block-footer">
    <div class="row">
        <div class="col-md-7 col-xs-12 map-div">
            <div id="map"></div>
        </div>
        <div class="col-md-5 col-xs-12 address-div">
            <?= $this->Html->link(
                $this->Html->image('logo_test.png', array('width' => '350px')),
                array(
                    'plugin' => null,
                    'controller' => 'home',
                    'action' => 'index',
                ),
                array(
                    'escape' => false
                )
            ) ?>
            <p>Avenida Santana, 360<br>Centro - Botucatu/SP<br><br>+55 (14) 3880.9221 / +55 (14) 99737.9599</p>
            <p><a href="mailto:contato@lapinceli.com.br" style="color: #fff">contato@lapinceli.com.br</a></p>
            <p>
                <a href="javascript:;" class="social-icon" style="padding-right: 15px" title="/lapinceli"><span class="fab fa-facebook-square"></span></a>
                <a href="javascript:;" class="social-icon" title="@lapinceli"><span class="fab fa-instagram"></span></a>
            </p>
        </div>
    </div>
</div>

