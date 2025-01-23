<!-- resources/views/categories/edit.blade.php -->


<?php $__env->startSection('content'); ?>
    <h2>Modifica Categoria</h2>

    <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="name">Nome Categoria</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name', $category->name)); ?>" required>

        <button type="submit">Salva modifiche</button>
    </form>

    <!-- Form per eliminare la categoria -->
    <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questa categoria?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>

        <button type="submit" class="button-link" style="background-color: red; border-color: red;">Elimina Categoria</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SCUOLA\PROFESSIONALE\Anno4\Laboratorio2_Laravel\BOOK\resources\views/categories/edit.blade.php ENDPATH**/ ?>