<?= $this->extend('layouts/main.php') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="bg-light" style="height: 550px; width: 100%;">
        <h1>Hello World</h1>
    </div>
</div>





<?= $this->include('layouts/navbar.php') ?>
<?= $this->endSection() ?>