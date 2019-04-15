<div class="container-fluid block-newsletter gradient-bottom">
    <div class="row">
        <div class="col-md-5 col-xs-12 hero-image-bottom-div">
            <div class="hero-image-bottom">
                <div class="hero-bottom-text">
                    <h2>curta nossa página no facebook </h2>
                    <h2>
                        <?= $this->Html->link('<i class="fab fa-facebook" style="font-size: 30px"></i> /lapinceli',
                            'facebook.com',
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
        <div class="col-md-7 col-xs-12 form  gradient-bottom">
            <h3><i class="fas fa-paper-plane"></i> Newsletter</h3>
            <p>Cadastre-se para receber novidades e promoções exclusivas:</p>
            <?= $this->Form->create('', array()); ?>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="sr-only" for="name">Nome</label>
                            <?= $this->Form->input('name', array('class' => 'form-control input-medium', 'placeholder' => 'Seu nome', 'label' => false, 'required' => true, 'id' => 'name')); ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <?= $this->Form->input('email', array('class' => 'form-control input-medium', 'placeholder' => 'Seu email', 'label' => false, 'required' => true, 'id' => 'email', 'type' => 'email')); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <?= $this->Form->submit('Cadastrar', array('class' => 'form-submit')) ; ?>
                    </div>
                </div>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
