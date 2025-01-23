<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/indexCategory.css')); ?>">
    <p><a href="<?php echo e(route('categories.create')); ?>" class="button-link">Aggiungi una nuova categoria</a></p>
    <h1>Elenco delle Categorie</h1>

    <!-- Contenitore Flexbox per le categorie -->
    <div class="category-list-container">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="category-item">
                <p><?php echo e($category->name); ?></p>
                <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="button-link">Modifica</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SCUOLA\PROFESSIONALE\Anno4\Laboratorio2_Laravel\BOOK\resources\views/categories/index.blade.php ENDPATH**/ ?>