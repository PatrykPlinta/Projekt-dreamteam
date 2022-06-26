<?php $__env->startSection('content'); ?>
    <div id="container">
        <div class="navbar-nav" id="lewy">
            <a class="navbar-brand" href="<?php echo e(url('/dreamteam')); ?>">
                Dreamteam
            </a>
            <?php if($role->power<3): ?>
            <a class="navbar-brand" href="<?php echo e(url('/addplayer')); ?>">
                Dodaj Gracza
            </a>
            <?php endif; ?>
            <?php if($role->power<2): ?>
            <a class="navbar-brand" href="<?php echo e(url('/userremove')); ?>">
                Usuń użytkownika
            </a>
            <?php endif; ?>
        </div>
        <div id="prawy">

            <?php echo $__env->yieldContent("card"); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dreamteam\resources\views/home.blade.php ENDPATH**/ ?>