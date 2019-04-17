<?php $__env->startSection('content'); ?>
    <a href="/list/public/posts" class="btn btn-default"><b><big>Back</big></b></a>
    <h1 align="center"><br/><?php echo e($post->title); ?></h1>
    <div align="center"><br/>
        <?php echo e($post->body); ?>

    </div>
    <hr>
    <div align="center"><small>Written on <?php echo e($post->created_at); ?></small></div>
    <hr>
    <a href="/list/public/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary">Edit</a>

    <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list\resources\views/posts/show.blade.php ENDPATH**/ ?>