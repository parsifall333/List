<?php $__env->startSection('content'); ?>
    <h1 align="center"><br/>Create new entry</h1>
    <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST']); ?>


        <div class="form-group">
            <?php echo e(Form::label('title', 'Activity')); ?>

            <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' =>'Activity'])); ?>

        </div>

        <div class="form-group">
                <?php echo e(Form::label('body', 'Notes')); ?>

                <?php echo e(Form::textarea('body', '', ['class' => 'form-control', 'placeholder' =>'Notes'])); ?>

        </div>

        <a href="/list/public/posts" class="btn btn-default" align="center"><b><big>Back</big></b></a>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list\resources\views/posts/create.blade.php ENDPATH**/ ?>