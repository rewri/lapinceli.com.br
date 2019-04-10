<div class="container-fluid gradient-header" style="height: 80px; margin-top: 50px;">
  <div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-12" style="line-height: 80px">
            <?= $this->Html->image('logo_test.png', array('width' => '250px')); ?>
        </div>
        <div class="col-md-2  hidden-xs" style="text-align: right">
            <a href="" style="line-height: 83px; font-size: 18px; color: #f2f2f2; font-weight: 300">A empresa <i class="fas fa-angle-double-right" style="font-size: 12px;"></i></a>
        </div>
        <div class="col-md-2 hidden-xs" style="text-align: right">
            <a href="" style="line-height: 83px; font-size: 18px; color: #f2f2f2; font-weight: 300">Produtos <i class="fas fa-angle-double-right" style="font-size: 12px;"></i></a>
        </div>
        <div class="col-md-2 hidden-xs" style="text-align: right">
            <a href="" style="line-height: 83px; font-size: 18px; color: #f2f2f2; font-weight: 300">Serviços <i class="fas fa-angle-double-right" style="font-size: 12px;"></i></a>
        </div>
        <div class="col-md-2 hidden-xs" style="text-align: right">
            <a href="" style="line-height: 83px; font-size: 18px; color: #f2f2f2; font-weight: 300">Contato <i class="fas fa-angle-double-right" style="font-size: 12px;"></i></a>
        </div>
    </div>
  </div>
</div>

<div class="hero-image hidden-xs" style="height: 520px;">
    <div class="pixel-overlay"></div>
</div>

<div class="container-fluid" style="background-color: #f1f1f1; min-height: 350px; border-top: 20px solid #fff;">
    <div class="container" style="padding-bottom: 30px">
        <div class="row" style="padding: 35px 0 10px 0">
            <div class="col-md-12 col-xs-12">
                <h1 class="strike" style="overflow: hidden">La Pinceli Professional</h1>
                <h3>Lorem ipsum, dolor onsectetur <span style="color: #AC7834; font-weight: 600">adipisicing elitnsectetur</span>, cupiditate tempore!</h3>
                <div class="row">
                    <div class="col-md-9 col-xs-12" style="padding-top: 25px">
                        <p>
                            Vivamus vestibulum accumsan augue, vitae congue massa semper sit amet. Vestibulum sit amet laoreet tortor, in rutrum tortor. Cras in nunc vitae mauris ornare ullamcorper
                            in eget nisl. <span style="color: #AC7834; font-weight: 600">Quisque commodo</span> accumsan quam, id rutrum sem. Duis velit leo, molestie eu eleifend eget, convallis eu arcu. Nullam pretium nibh sed metus dictum.
                        </p>
                        <p>
                            Quis venenatis neque volutpat. Morbi in velit quis enim feugiat vulputate non id enim. Proin condimentum augue ut lectus tristique, ac imperdiet lectus efficitur.
                            Vivamus commodo mattis ligula, vel vehicula <span style="color: #AC7834; font-weight: 600">odio porta et</span>. Nulla eu erat commodo, rutrum purus in, 
                            <span style="color: #AC7834; font-weight: 600">vestibulum</span> magna. Sed elit mi, aliquam eu posuere vel, venenatis et urna.
                            Curabitur et ante non dui lacinia pulvinar non at erat. Sed bibendum est sit amet sem ultricies.
                        </p>
                        <p><a href="" style="font-weight: 500; color: #AC7833; font-size: 14px; border: 1px solid #AC7833; border-radius: 15px; padding: 3px 8px">conheça mais</a></p>
                    </div>
                    <div class="col-md-3 col-xs-12" style="text-align: right">
                        <?= $this->Html->image('layout/produtos.jpg', array('width' => 200, 'height' => 200, 'style' => 'border-radius: 8px'))?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="padding: 35px 0 15px 0">
        <div class="col-md-12 col-xs-12" style="text-align: center">
            <h2 class="strike" style="overflow: hidden;">Nossos produtos</h2>
        </div>
    </div>
    <div class="row" style="min-height: 150px;">
        <div class="col-md-12 col-xs-12">
            <div class="owl-carousel owl-theme">
                <div class="product-box" style="text-align: center">
                    <?= $this->Html->image('products/produto_01.jpg', array('height' => 350, 'width' => 350)) ?>
                    <p style="font-weight: 700">Shampoo Anti-Resíduos</p>
                    <p><a href="" style="font-weight: 500; color: #AC7833; font-size: 14px; border: 1px solid #AC7833; border-radius: 15px; padding: 3px 8px">ver + detalhes</a></p>
                </div>
                <div class="product-box" style="text-align: center">
                    <?= $this->Html->image('products/produto_02.jpg', array('height' => 350, 'width' => 350)) ?>
                    <p style="font-weight: 700">Shock Keratin</p>
                    <p><a href="" style="font-weight: 500; color: #AC7833; font-size: 14px; border: 1px solid #AC7833; border-radius: 15px; padding: 3px 8px">ver + detalhes</a></p>
                </div>
                <div class="product-box" style="text-align: center">
                    <?= $this->Html->image('products/produto_03.jpg', array('height' => 350, 'width' => 350)) ?>
                    <p style="font-weight: 700">Reconstruor Térmico Capilar</p>
                    <p><a href="" style="font-weight: 500; color: #AC7833; font-size: 14px; border: 1px solid #AC7833; border-radius: 15px; padding: 3px 8px">ver + detalhes</a></p>
                </div>
                <div class="product-box" style="text-align: center">
                    <?= $this->Html->image('products/produto_04.jpg', array('height' => 350, 'width' => 350)) ?>
                    <p style="font-weight: 700">Máscara Teia</p>
                    <p><a href="" style="font-weight: 500; color: #AC7833; font-size: 14px; border: 1px solid #AC7833; border-radius: 15px; padding: 3px 8px">ver + detalhes</a></p>
                </div>
                <div class="product-box" style="text-align: center">
                    <?= $this->Html->image('products/produto_02.jpg', array('height' => 350, 'width' => 350)) ?>
                    <p style="font-weight: 700">Sérum Reconstrutor</p>
                    <p><a href="" style="font-weight: 500; color: #AC7833; font-size: 14px; border: 1px solid #AC7833; border-radius: 15px; padding: 3px 8px">ver + detalhes</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="padding: 35px 0 15px 0">
        <div class="col-md-12 col-xs-12" style="text-align: right;">
            <h2 class="strike" style="overflow: hidden">Serviços</h2>
        </div>
    </div>
    <div class="row" style="padding-bottom: 50px">
        <div class="col-md-7 col-xs-12" style="margin-bottom: 15px">
            <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/riCIYYzg6EA?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-5 col-xs-12">
            <h2 style="margin: 0; color: #AC7834; margin-bottom: 25px">Lorem ipsum, dolor sit amet elit</h2>
            <p>
                Vivamus vestibulum accumsan augue, vitae congue massa semper sit amere ullamcorper
                in eget nisl. <span style="color: #AC7834; font-weight: 600">Quisque commodo</span> accumsan quam, id rutrum sem. Duis velit leo, molestie eu eleifend eget, convallis eu arcu. Nullam pretium nibh sed metus dictum.
            </p>
            <p>
                Quis venenatis neque volutpat. Morbi in velit quis enim feugiat vuet lectus efficitur.
                Vivamus commodo mattis ligula, vel vehicula <span style="color: #AC7834; font-weight: 600">odio porta et</span>. Nulla eu erat commodo, rutrum purus in, 
                <span style="color: #AC7834; font-weight: 600">vestibulum</span> magna. Sed elit mi, aliquam eu posuere vel, venenatis et urna.
                Curabitur et ante non dui lacinia sem ultricies.
            </p>
            <p><a href="" style="font-weight: 500; color: #AC7833; font-size: 14px; border: 1px solid #AC7833; border-radius: 15px; padding: 3px 8px">conheça mais</a></p>    
        </div>        
    </div>
</div>

<div class="container-fluid" style="background-color: #ccc">
    <div class="container">
        <div class="row" style="height: 150px; line-height: 150px">
            <div class="col-md-12 col-xs-12">
                marcas
            </div>
        </div>
    </div>
</div>

<div class="container-fluid gradient-bottom">
    <div class="row" style="height: 350px">
        <div class="col-md-5 col-xs-12" style="padding: 0">
        <div class="hero-image-bottom" style="height: 350px">
        <div class="hero-bottom-text">
            <h2>curta nossa página no facebook </h2>
            <h2><i class="fab fa-facebook" style="font-size: 30px"></i> /lapinceli</h2>
        </div>
        <div class="pixel-overlay"></div>
        </div>
        </div>
        <div class="col-md-7 col-xs-12">
            <div style="padding: 7% 0 30px 30px">
                <h3 style="color: #fff">Newsletter</h3>
                <p style="color: #fff">Cadastre aqui seu email e receba nossas novidades:</p>
                <input type="text" style="width: 60%; height: 55px; border-radius: 5px; border: 2px solid #fff">
                <a href="" style="height: 55px; padding: 12px 25px; background-color: transparent; border: 2px solid #fff; border-radius: 5px; color: #fff; font-weight: 800">ENVIAR</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #010">
    <div class="container">
        <div class="row" style="height: 200px; line-height: 200px">
            <div class="col-md-4 col-xs-12" style="text-align: left">
                <p>logo</p>
            </div>
            <div class="col-md-4 col-xs-12" style="text-align: center">
                <p style="font-size: 26px; color: #fff">endereço</p>
            </div>
            <div class="col-md-4 col-xs-12" style="text-align: center">
                <p style="font-size: 26px; color: #fff">telefone</p>
            </div>
        </div>
    </div>
</div>
