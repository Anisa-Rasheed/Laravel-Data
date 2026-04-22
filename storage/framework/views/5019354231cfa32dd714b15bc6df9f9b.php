<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload File</h2>

<?php if($errors->any()): ?>
<ul style="color:red;">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>

<form method="POST" action="/upload" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <input type="file" name="file"><br><br>

    <button type="submit">Upload</button>
</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\studentlab\resources\views/upload.blade.php ENDPATH**/ ?>