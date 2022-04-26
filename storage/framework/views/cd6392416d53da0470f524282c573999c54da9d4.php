

<?php $__env->startSection('title', 'Практика'); ?>

<?php $__env->startSection('content'); ?>
    <div class="project_item">
        <h1 class="project_item_title">
            <?php echo e($curent_project['name']); ?>

        </h1>

        <p class="project_item_text"> 
            <span class="black_text">Команда проекта:</span><br> 
            <?php
                $team_list = explode(";", $curent_project['team']);   
            ?>
            <?php $__currentLoopData = $team_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <a class="blue_text_hover" href=""><?php echo e($team_item.";"); ?></a> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </p>
           
        <p class="project_item_text">
            <span class="black_text">Задача:</span><br> 
            <?php echo e($curent_project['task']); ?>

        </p>

        <p class="project_item_text">
            <span class="black_text">Решение:</span><br> 
            <?php echo e($curent_project['solution']); ?>

        </p>

        <p class="project_item_text">
            <span class="black_text">Результат:</span><br> 
            <?php echo e($curent_project['result']); ?>

        </p>
 
        
        
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.second-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\test\resources\views\pages\project_item.blade.php ENDPATH**/ ?>