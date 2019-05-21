<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <?= $this->element('Default/metaTags') ?>
    <title><?= $defaultPageTitle ?></title>

    <?= $this->Html->css(array(
        'bootstrap.min.css',
        'font-awesome.css',
        'owl.carousel.css',
        'owl.theme.default.css'
    )) ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('home.css') ?>

    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->element('Pages/header'); ?>
    <?= $this->fetch('content') ?>
    <?= $this->element('Pages/footer'); ?>

    <?= $this->Html->script(array(
        'jquery-3.3.1.min.js',
        'bootstrap.min.js',
        'font-awesome.min.js',
        'owl.carousel.js',
        'custom.js',
    )) ?>

    <?= $this->fetch('scriptBottom') ?>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxIWs74ryPOv3q19aGpoXIqfaFVQtIw_U&callback=initMap"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:50,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        dots:false
                    },
                    600:{
                        items:4,
                        nav:false,
                        dots:false
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:true,
                        autoplay:true,
                        dots:false
                    }
                }
            });


            const newsForm = $('#save-news');
            const newsBtn = $('#btn-submit-news');

            function isCaptchaChecked() {
                return grecaptcha && grecaptcha.getResponse().length !== 0;
            }

            newsBtn.bind('click', function(e) {
                e.preventDefault();
                newsBtn.attr('disabled', true).text('Enviando...');
                if (isCaptchaChecked()) {
                    const inputName = $('#name');
                    const inputEmail = $('#email');
                    const url = newsForm.attr('action');
                    if (inputName.val() !== '' && inputEmail.val() !== '') {
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: newsForm.serialize(),
                            success: function(data)
                            {
                                newsBtn.hide();
                                $('#recaptcha').hide();
                                alert('Contato cadastrado com sucesso! Em breve entraremos em contato!');
                            },
                            error: function(err) {
                                console.log(err);
                            }
                        });
                    } else {
                        alert('Preencha todos os campos.');
                        newsBtn.removeAttr('disabled').text('Enviar');
                    }
                } else {
                    alert('Marque a opção "Não sou um robô."');
                    newsBtn.removeAttr('disabled').text('Enviar');
                }
            });
        });

        function initMap() {
            var center = {lat: -22.880233, lng:  -48.443995};
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: center}
            );
            var marker = new google.maps.Marker({position: center, map: map});
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138969362-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-138969362-1');
    </script>
</body>
</html>
