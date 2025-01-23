<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Libri</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('books.index')); ?>" class="button-link">Libri</a></li>
            <li><a href="<?php echo e(route('authors.index')); ?>" class="button-link">Autori</a></li>
            <li><a href="<?php echo e(route('categories.index')); ?>" class="button-link">Categorie</a></li>
        </ul>
    </nav>
</header>
<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>
</body>
</html>
<?php /**PATH E:\SCUOLA\PROFESSIONALE\Anno4\Laboratorio2_Laravel\BOOK\resources\views/layouts/app.blade.php ENDPATH**/ ?>