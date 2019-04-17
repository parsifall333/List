<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <title><?php echo e(config('app.name', 'List')); ?></title>
    </head>
    <body>
        <h1 align ="center"><br/>Welcome to your To Do List</h1>
        <p align="center"><br/>This is your To Do List</p>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\list\resources\views/pages/index.blade.php ENDPATH**/ ?>