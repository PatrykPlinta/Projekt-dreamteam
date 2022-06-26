<?php $__env->startSection('card'); ?>
    <form method="POST" action="<?php echo e(route('userremove.remove')); ?>">
        <?php echo csrf_field(); ?>
        <select name="id" class="form-select">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option  value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>
    <button type="submit" class="btn btn-danger">Usuń</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dreamteam\resources\views/userremove/index.blade.php ENDPATH**/ ?>