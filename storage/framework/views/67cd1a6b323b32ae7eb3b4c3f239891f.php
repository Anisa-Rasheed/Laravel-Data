<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>

<h2>Simple Form</h2>

<?php if($errors->any()): ?>
    <ul style="color:red;">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<form method="POST" action="/form-submit">
    <?php echo csrf_field(); ?>

    Name:
    <input type="text" name="name"><br><br>

    Email:
    <input type="text" name="email"><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\studentlab\resources\views/form.blade.php ENDPATH**/ ?>