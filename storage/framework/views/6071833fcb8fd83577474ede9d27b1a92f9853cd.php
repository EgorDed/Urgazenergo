

<?php $__env->startSection('title', 'Новости Бюро'); ?>

<?php $__env->startSection('content'); ?>
    <div class="project_item">
        <h1 class="project_item_title">
            <?php echo e($curent_news['name']); ?>

        </h1>

        <?php
            $text_list = explode("<br>", $curent_news["text"]);
        ?>
        <?php $__currentLoopData = $text_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class="project_item_text"> 
                <?php echo e($item); ?>

            </p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               

        <div class="news_item_img-div">
            <?php
                $img_list =  explode(";", $curent_news["photo"]); 
            ?>

            <?php $__currentLoopData = $img_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="/img/news/<?php echo e($item); ?>" alt="" class="news_item_img">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
           
        <?php
            $source_list = explode(";", $curent_news["source"]);
        ?>

       <?php for($i = 0; $i < count($source_list) ; $i = $i + 2): ?>
           <p class="project_item_text"> 
                <a  class="blue_text_hover" href="<?php echo e($source_list[$i+1]); ?>"><?php echo e($source_list[$i]); ?></a>
            </p>
       <?php endfor; ?>

        <?php $__currentLoopData = $source_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
        
        
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.second-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\test\resources\views\pages\news_item.blade.php ENDPATH**/ ?>