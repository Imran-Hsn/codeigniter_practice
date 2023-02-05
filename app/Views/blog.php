<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter 4</title>
</head>

<body>
    <h1>Hello CodeIgniter</h1>
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