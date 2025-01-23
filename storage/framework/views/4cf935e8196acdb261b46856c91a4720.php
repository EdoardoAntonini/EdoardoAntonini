<?php $__env->startSection('content'); ?>
    <div class="book-details">
        <h3><?php echo e($book->title); ?></h3>
        <p><strong>Autore:</strong> <?php echo e($book->author->name); ?></p>
        <p><strong>Categoria:</strong> <?php echo e($book->category->name); ?></p>
        <p><strong>Descrizione:</strong> <?php echo e($book->description ?? 'Nessuna descrizione disponibile.'); ?></p>
        <p><strong>Numero di pagine:</strong> <?php echo e($book->pages ?? 'N/A'); ?></p>
        <a href="<?php echo e(route('books.edit', $book->id)); ?>">Modifica</a>
        <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" style="display:inline;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo libro?')">Elimina</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SCUOLA\PROFESSIONALE\Anno4\Laboratorio2_Laravel\BOOK\resources\views/books/show.blade.php ENDPATH**/ ?>