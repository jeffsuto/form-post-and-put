<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('methodtitle'); ?>
    <strong><?php echo e($methodtitle); ?></strong>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="panel panel-default col-md-8 col-md-offset-2" style="margin-top:10px">
        <div class="panel-body" style="margin-top:10px">
            <div class="form-group">
                <label class="control-label col-md-4">Nama</label>
                <p>: <?php echo e($nama); ?></p>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Tempat Lahir</label>
                <p>: <?php echo e($tempat); ?></p>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Tanggal Lahir</label>
                <p>: <?php echo e($tanggal); ?></p>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Jenis Kelamin</label>
                <p>: <?php echo e($sex); ?></p>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4">Email</label>
                <p>: <?php echo e($email); ?></p>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-4">Alamat</label>
                <p>: <?php echo e($alamat); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>