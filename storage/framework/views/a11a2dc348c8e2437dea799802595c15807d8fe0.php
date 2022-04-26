

<?php $__env->startSection('title', ' Команда профессионалов своего дела '); ?>

<?php $__env->startSection('content'); ?>
    <div class="project_item curent_team">
        <div class="curent_team_item">
            <h1 class="project_item_title">
                <?php echo e($curent_team_item["name"]); ?>

            </h1>

            <p class="project_item_text"> 
                <?php echo e($curent_team_item["post"]); ?>

            </p>

            <p class="project_item_text"> 
                <span class="black_text">Специализация:</span><br> 
                <?php echo e($curent_team_item["specialization"]); ?>

            </p>
            
            <p class="project_item_text">
                <span class="black_text">Образовательное учреждение:</span><br> 
                <?php echo e($curent_team_item["education"]); ?>

            </p>

            <p class="project_item_text">
                <span class="black_text">Опыт:</span><br> 

                <?php
                    $experience_list = explode(";", $curent_team_item["experience"]);   
                ?>

                <?php $__currentLoopData = $experience_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <?php echo e($experience_item); ?><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>

            <?php
                $contacts_list = explode(";", $curent_team_item["contacts"]); 
            ?>
            <div class="curent_team_contacts">
                <?php if(count($contacts_list) == 2): ?>
                    <div class="contacts_item">
                        <p class="black_text">
                            Контактная почта: <br>
                            <span class="blue_text"><?php echo e($contacts_list[0]); ?></span>
                        </p>
                    </div> 

                    <div class="contacts_item">
                        <p class="black_text">
                            Контактный телефон: <br>
                            <span class="blue_text"><?php echo e($contacts_list[1]); ?></span>
                        </p>
                    </div>
                <?php else: ?>
                    <div class="contacts_item">
                        <p class="black_text">
                            Контактная почта: <br>
                            <span class="blue_text"><?php echo e($contacts_list[0]); ?></span>
                        </p>
                    </div> 
                <?php endif; ?>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <img class="team_profile_photo" src="/img/team/profile/<?php echo e($curent_team_item["profile_photo"]); ?>" alt="">
        </div>
    </div>

    <h1 class="page_title">Практика</h1>

    
    <div class="projects">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <div class="project">
                    <a href="<?php echo e(route('project', $project['id'])); ?> " class="project_link"><?php echo e($project['titleName']); ?></a>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.second-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\test\resources\views\pages\team_item.blade.php ENDPATH**/ ?>