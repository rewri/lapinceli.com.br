<div class="container-fluid block-newsletter gradient-bottom">
    <div class="row">
        <div class="col-md-5 col-xs-12 hero-image-bottom-div">
            <div class="hero-image-bottom">
                <div class="hero-bottom-text">
                    <h2>curta nossa página no facebook </h2>
                    <h2>
                        <?= $this->Html->link('<i class="fab fa-facebook" style="font-size: 30px"></i> /lapinceli',
                            'https://www.facebook.com/lapinceli/',
                            array(
                                'target' => '_blank',
                                'escape' => false,
                                'class' => 'social'
                            )
                        ); ?>
                    </h2>
                </div>
                <div class="pixel-overlay"></div>
            </div>
        </div>
        <div class="col-md-7 col-xs-12 form gradient-bottom">
            <h3><i class="fas fa-paper-plane"></i> Seja um distribuidor</h3>
            <p>Cadastre-se e seja um distribuidor exclusivo La Pinceli:</p>
            <?= $this->Form->create('Newsletter', array('url' => array('plugin' => null, 'controller' => 'home', 'action' => 'saveNews'), 'id' => 'save-news')); ?>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="sr-only" for="name">Nome</label>
                            <?= $this->Form->control('name', array('class' => 'form-control input-large', 'placeholder' => 'Seu nome', 'label' => false, 'required' => true, 'id' => 'name')); ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <?= $this->Form->control('email', array('class' => 'form-control input-medium', 'placeholder' => 'Seu email', 'label' => false, 'required' => true, 'id' => 'email', 'type' => 'email')); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-xs-12" style="padding-bottom: 10px">
                        <?= $this->Form->button('Cadastrar', array('class' => 'form-submit', 'id' => 'btn-submit-news')) ; ?>
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <div class="g-recaptcha" data-sitekey="6Ldr2p8UAAAAANtsYeATr-TLY831Xr6G9X3FaFoN" id="recaptcha" style="display: inline-block;"></div>
                    </div>
                </div>
            <?= $this->Form->end(); ?>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        </div>
    </div>
</div>
