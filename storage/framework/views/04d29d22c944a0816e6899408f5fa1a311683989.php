

<?php $__env->startSection('title', 'Новости Бюро'); ?>

<?php $__env->startSection('content'); ?>
    <div class="projects">
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <div class="project">
                    <a href=" <?php echo e(route('news_item', $news_item['id'])); ?>" class="project_link"><?php echo e($news_item['titleName']); ?></a>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.second-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\test\resources\views\pages\news.blade.php ENDPATH**/ ?>