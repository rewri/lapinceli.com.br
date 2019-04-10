<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <?= $this->element('Default/metaTags') ?>
    <title><?= $defaultPageTitle ?> | <?= $this->fetch('title') ?></title>

    <?= $this->Html->css(array(
        'bootstrap.min.css',
        'font-awesome.css',
        'owl.carousel.min.css',
        'owl.theme.default.css'
    )) ?>

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
        'owl.carousel.js'
    )) ?>

    <?= $this->fetch('scriptBottom') ?>

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
                        items:3,
                        nav:false,
                        dots:false
                    },
                    1000:{
                        items:3,
                        nav:true,
                        loop:true,
                        autoplay:true,
                        dots:false
                    }
                }
            });

        });
    </script>

</body>
</html>
