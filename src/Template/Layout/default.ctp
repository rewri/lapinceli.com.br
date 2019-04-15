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

<?= $this->fetch('scriptBottom') ?>

</body>
</html>
