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
            <p>Avenida Santana, 360 - Centro - Botucatu/SP<br><br>+55 (14) 3880.9221 / +55 (14) 99737.9599</p>
            <p><a href="mailto:contato@lapinceli.com.br" style="color: #fff">contato@lapinceli.com.br</a></p>
            <p>
                <a href="https://www.facebook.com/lapinceli/" class="social-icon" style="padding-right: 15px" title="/lapinceli" target="_blank"><span class="fab fa-facebook-square"></span></a>
                <a href="https://www.instagram.com/lapinceli/" class="social-icon" title="@lapinceli" target="_blank"><span class="fab fa-instagram"></span></a>
            </p>
        </div>
    </div>
</div>

