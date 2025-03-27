<form action="<?php echo e(route('import.excel')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label>Select Excel File:</label>
        <input type="file" name="file" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Import Students</button>
</form>
<?php /**PATH C:\xampp\htdocs\new_laravel\resources\views/import.blade.php ENDPATH**/ ?>