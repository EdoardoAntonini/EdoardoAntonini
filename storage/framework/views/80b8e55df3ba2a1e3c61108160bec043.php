<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/indexBook.css')); ?>">
    <a href="<?php echo e(route('books.create')); ?>" class="button-link">Aggiungi un nuovo libro</a>
    <h2>Elenco dei Libri</h2>


    <!-- Mostra un messaggio di successo se presente -->
    <?php if(session('success')): ?>
        <div class="alert success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="book-list-container">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="book-item">
                <h3><?php echo e($book->title); ?></h3>
                <p><strong>Autore:</strong> <?php echo e($book->author->name); ?></p>
                <p><strong>Categoria:</strong> <?php echo e($book->category->name); ?></p>
                <p><strong>Pagine:</strong> <?php echo e($book->pages); ?></p>
                <p><strong>Descrizione:</strong> <?php echo e($book->description); ?></p>
                <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="button-link">Modifica</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SCUOLA\PROFESSIONALE\Anno4\Laboratorio2_Laravel\BOOK\resources\views/books/index.blade.php ENDPATH**/ ?>