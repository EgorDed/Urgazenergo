

<?php $__env->startSection('title', 'Практика'); ?>

<?php $__env->startSection('content'); ?>
    <div class="projects">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <div class="project">
                    <a href=" <?php echo e(route('project', $project['id'])); ?>" class="project_link"><?php echo e($project['titleName']); ?></a>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.second-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\test\resources\views\pages\projects.blade.php ENDPATH**/ ?>