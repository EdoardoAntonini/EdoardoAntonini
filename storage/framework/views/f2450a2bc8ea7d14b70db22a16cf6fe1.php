<!-- resources/views/authors/edit.blade.php -->


<?php $__env->startSection('content'); ?>
    <h2>Modifica Autore</h2>

    <form action="<?php echo e(route('authors.update', $author->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="name">Nome Completo</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name', $author->name)); ?>" required>

        <label for="birthday">Data di Nascita (facoltativo)</label>
        <input type="date" id="birthday" name="birthday" value="<?php echo e(old('birthday', $author->birthday)); ?>">

        <button type="submit">Salva modifiche</button>
    </form>

    <!-- Form per eliminare l'autore -->
    <form action="<?php echo e(route('authors.destroy', $author->id)); ?>" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo autore?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>

        <button type="submit" class="button-link" style="background-color: red; border-color: red;">Elimina Autore</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SCUOLA\PROFESSIONALE\Anno4\Laboratorio2_Laravel\BOOK\resources\views/authors/edit.blade.php ENDPATH**/ ?>