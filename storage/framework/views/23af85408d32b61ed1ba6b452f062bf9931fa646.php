

<?php $__env->startSection('title', " Команда профессионалов своего дела "); ?>

<?php $__env->startSection('content'); ?>
    <div class="team">
        <div class="left_team">
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <?php
                $post = explode(";", $team_item['post']);

                $title_name = explode(" ", $team_item['name']);
            ?>
                    <?php if(!($team_item["id"] % 2 == 0)): ?>
                        <div class="team_item">
                            <img src="/img/team/avatar/<?php echo e($team_item["avatar"]); ?>" alt="" class="team_avatar left_avatar">
                            
                            <div class="left team_item_div">
                                <a href="<?php echo e(route('curentTeamItem', $team_item["id"])); ?> " class="team_item_link"><?php echo e($title_name[0]); ?> <br> <?php echo e($title_name[1]); ?> <?php echo e($title_name[2]); ?></a>
                                <p class="team_item_text"><?php echo e($post[0]); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>       
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="line ">
            <img src="/img/2014.png" alt="" class="z-index">
            <img src="/img/Main_Line.png" alt="" class="main_line">
        </div>

        <div class="right_team">
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <?php
                $post = explode(";", $team_item['post']);

                $title_name = explode(" ", $team_item['name']);    
            ?>
                    <?php if($team_item["id"] % 2 == 0): ?>
                       <div class="team_item">
                            <img src="/img/team/avatar/<?php echo e($team_item["avatar"]); ?>" alt="" class="team_avatar right_avatar">
                            
                            <div class="right team_item_div">
                                <a href=" <?php echo e(route('curentTeamItem', $team_item["id"])); ?> " class="team_item_link"><?php echo e($title_name[0]); ?> <br> <?php echo e($title_name[1]); ?> <?php echo e($title_name[2]); ?></a>
                                <p class="team_item_text"><?php echo e($post[0]); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>       
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="building ">
        <img src="/img/team/building.png" alt="" class="building_img">
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.second-layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\test\resources\views\pages\team.blade.php ENDPATH**/ ?>