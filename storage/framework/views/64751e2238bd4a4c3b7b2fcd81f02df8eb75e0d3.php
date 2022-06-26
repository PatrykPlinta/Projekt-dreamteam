<?php $__env->startSection('card'); ?>
<form id="form" method="POST" action="<?php echo e(route('playeradd.create')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-floating">
        <input name="name" id="name" class="form-control" placeholder="Podaj Nazwisko Gracza">
        <label for="name">Imie</label>
    </div>
    <div class="form-floating">
        <input name="surname" id="surname" class="form-control" placeholder="Podaj Nazwisko Gracza">
        <label for="surname">Nazwisko</label>
    </div>
    <div class="form-floating">
        <input name="jersay" id="jersay" class="form-control" placeholder="Podaj Numer Gracza">
        <label for="jersay">Numer Gracza</label>
    </div>
    <select name="id_team" class="form-select">
        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($team->id); ?>"><?php echo e($team->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <br>

    <button type="submit" class="btn btn-success" >Dodaj</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dreamteam\resources\views/playeradd/index.blade.php ENDPATH**/ ?>