<?php $__env->startSection('content'); ?>
    <h1 align="center"><br/>Posts</h1>
    <?php if(count($posts) > 0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class ="well">
                <h3 align="center"><a href="/list/public/posts/<?php echo e($post->id); ?>"><br/><?php echo e($post->title); ?></a></h3>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p align=center><br/>No entries found</p>
    <?php endif; ?>
    <a href="/list/public/posts/create" class="btn btn-primary" align="center"><b><big>New Entry</big></b></a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list\resources\views/posts/index.blade.php ENDPATH**/ ?>