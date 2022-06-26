<?php $__env->startSection('card'); ?>

    <?php if(empty($dreamteam_players)): ?>
        <form method="POST" action="<?php echo e(route('dreamteam.create')); ?>">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <br>
                <h3><?php echo e($position->position); ?></h3>
                <select name="position[<?php echo e($position->id); ?>]" class="form-select">
                    <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($player->id); ?>"><?php echo e($player->name." ".$player->surname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <br>
            <button type="submit" class="btn btn-success">Utwórz</button>
        </form>
    <?php else: ?>
        <?php $__currentLoopData = $dreamteam_players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dreamteam_player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <center><div class="row">
                <div class="col"
                     style="width: 15vw; background-color:<?php echo e($dreamteam_player['team_first_color']); ?>;color: <?php echo e($dreamteam_player['team_second_color']); ?> ">
                    <h2>
                        <?php echo e($dreamteam_player['jersay']); ?>

                    </h2>
                    <?php echo e($dreamteam_player['name']); ?>

                    <?php echo e($dreamteam_player['surname']); ?>

                </div>
            </div>
            <?php echo e($dreamteam_player['position_name']); ?>

            </center>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <form method="POST" action="<?php echo e(route('dreamteam.delete')); ?>" >
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger">Usuń</button>
        </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dreamteam\resources\views/dreamteam/index.blade.php ENDPATH**/ ?>