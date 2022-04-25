<div style="margin-left: -100px">
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" >
        <h6 class="text-uppercase font-weight-bold">
            <strong><?php echo e(__('main.products')); ?></strong>
        </h6>
        <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <p style="width: 250px">
            <a href="<?php echo e(route('detail', ['slug' => $item->slug])); ?>"><?php echo e($item->name); ?></a>
        </p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH D:\OpenServer\domains\onshopuz\resources\views/livewire/footer-component.blade.php ENDPATH**/ ?>