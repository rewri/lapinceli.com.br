<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <?= $this->element('Default/metaTags') ?>
    <title><?= $defaultPageTitle ?> | <?= $title ?></title>

    <?= $this->Html->css(array(
        'bootstrap.min.css',
        'font-awesome.css',
    )) ?>

    <?= $this->Html->css('base.css') ?>

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
    'custom.js',
)) ?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
<?= $this->fetch('scriptBottom') ?>
<script>
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
