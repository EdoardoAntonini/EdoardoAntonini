<?php $__env->startSection('content'); ?>
    <h2>Aggiungi un Nuovo Libro</h2>
    <form action="<?php echo e(route('books.store')); ?>" method="POST" id="bookForm">
        <?php echo csrf_field(); ?>
        <label for="title">Titolo</label>
        <input type="text" id="title" name="title" value="<?php echo e(old('title')); ?>" required>

        <label for="author_id">Autore</label>
        <select id="author_id" name="author_id" required>
            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($author->id); ?>" <?php echo e(old('author_id') == $author->id ? 'selected' : ''); ?>><?php echo e($author->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <label for="category_id">Categoria</label>
        <select id="category_id" name="category_id" required>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <label for="description">Descrizione (facoltativa)</label>
        <textarea id="description" name="description"><?php echo e(old('description')); ?></textarea>

        <label for="pages">Numero di pagine (facoltativo, non deve essere sotto 1)</label>
        <input type="number" id="pages" name="pages" value="<?php echo e(old('pages')); ?>" min="1">

        <!-- Bottone di salvataggio nascosto inizialmente -->
        <button type="submit" id="saveButton" style="display:none;">Salva</button>
    </form>

    <script>
        // Funzione per verificare la validità del form
        function checkForm() {
            const form = document.getElementById('bookForm');
            const saveButton = document.getElementById('saveButton');
            const pagesField = document.getElementById('pages');

            // Verifica che tutti i campi obbligatori siano compilati
            const isFormValid = form.checkValidity();

            // Verifica che le pagine non siano inferiori a 0
            const isPagesValid = pagesField.value >= 0 || pagesField.value === '';  // Consente il campo vuoto

            // Mostra o nascondi il bottone di salvataggio
            if (isFormValid && isPagesValid) {
                saveButton.style.display = 'inline-block'; // Mostra il bottone
            } else {
                saveButton.style.display = 'none'; // Nascondi il bottone
            }
        }

        // Aggiungi un listener agli input per monitorare i cambiamenti
        document.querySelectorAll('#bookForm input, #bookForm select, #bookForm textarea').forEach(element => {
            element.addEventListener('input', checkForm);
        });

        // Verifica la validità del form quando la pagina è caricata
        window.onload = checkForm;
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SCUOLA\PROFESSIONALE\Anno4\Laboratorio2_Laravel\BOOK\resources\views/books/create.blade.php ENDPATH**/ ?>