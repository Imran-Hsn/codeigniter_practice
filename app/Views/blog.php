<?= $this->extend('layouts/main.php') ?>
    <h1 class="text-primary">Hello CodeIgniter</h1>
    <h2>Today's best book is: <?= $bb; ?></h2>
    <p><?php echo $author; ?></p>
    <p><?= $author; ?> </p>

    <h1>Books List</h1>
    <ul>
        <?php foreach($books as $book): ?>
        <li><?= $book ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>