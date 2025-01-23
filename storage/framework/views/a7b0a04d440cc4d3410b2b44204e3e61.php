<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/indexAuthor.css')); ?>">

    <p><a href="<?php echo e(route('authors.create')); ?>" class="button-link">Aggiungi un nuovo autore</a></p>
    <h1>Elenco degli Autori</h1>

    <!-- Contenitore Flexbox per gli autori -->
    <div class="author-list-container">
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="author-item">
                <p><?php echo e($author->name); ?></p>
                <p class="birthday">(Data di nascita: <?php echo e($author->birthday ?? 'Non specificata'); ?>)</p>
                <a href="<?php echo e(route('authors.edit', $author->id)); ?>" class="button-link">Modifica</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SCUOLA\PROFESSIONALE\Anno4\Laboratorio2_Laravel\BOOK\resources\views/authors/index.blade.php ENDPATH**/ ?>