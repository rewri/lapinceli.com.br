<div class="container-fluid">
    <div class="row" style="padding: 35px 0; background-color: #F1F1F1">
        <div class="col-md-12 col-xs-12 text-center">
            <a href="https://lapinceliprofessional.mercadoshops.com.br" target="_blank" class="btn-loja">ACESSE NOSSA LOJA ONLINE</a>
        </div>
    </div>
</div>
<div class="container-fluid block-newsletter gradient-bottom">
    <div class="row">
        <div class="col-md-4 col-xs-12 hero-image-bottom-div">
            <div class="hero-image-bottom">
                <div class="hero-bottom-text">
                    <h2 style="text-transform: uppercase; font-family: 'Bebas', Arial, Helvetica, sans-serif">curta nossas redes sociais </h2>
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
                    <h2>
                        <?= $this->Html->link('<i class="fab fa-instagram" style="font-size: 30px"></i> lapinceli',
                            'https://www.instagram.com/lapinceli/',
                            array(
                                'target' => '_blank',
                                'escape' => false,
                                'class' => 'social',
                            )
                        ); ?>
                    </h2>
                </div>
                <div class="pixel-overlay"></div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12 form gradient-bottom">
            <h3 id="distribuitor"><i class="fas fa-paper-plane"></i> Seja um distribuidor!</h3>
            <p>Venha conhecer as vantagens de ser um distribuidor credenciado da La Pinceli Professional.<br>Cadastre-se que entraremos em contato imediatamente:</p>
            <?= $this->Form->create('Newsletter', array('url' => array('plugin' => null, 'controller' => 'home', 'action' => 'saveNews'), 'id' => 'save-news')); ?>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="sr-only" for="name">Nome</label>
                            <?= $this->Form->control('name', array('class' => 'form-control input-large', 'placeholder' => 'Seu nome', 'label' => false, 'required' => true, 'id' => 'name')); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <?= $this->Form->control('email', array('class' => 'form-control input-medium', 'placeholder' => 'Seu email', 'label' => false, 'required' => true, 'id' => 'email', 'type' => 'email')); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label class="sr-only" for="phone">Telefone</label>
                            <?= $this->Form->control('phone', array('class' => 'form-control input-medium', 'placeholder' => 'Seu telefone', 'label' => false, 'required' => true, 'id' => 'phone', 'type' => 'text')); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-xs-12" style="padding-bottom: 10px">
                        <?= $this->Form->button('Cadastrar', array('class' => 'form-submit', 'id' => 'btn-submit-news')) ; ?>
                    </div>
                </div>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
