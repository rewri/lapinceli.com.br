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

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
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
        function initMap() {
            var center = {lat: -22.880233, lng:  -48.443995};
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: center}
            );
            var marker = new google.maps.Marker({position: center, map: map});
        }
    </script>
</body>
</html>
