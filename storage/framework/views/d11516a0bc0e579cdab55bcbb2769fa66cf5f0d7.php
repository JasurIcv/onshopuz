<?php if(session()->has('message')): ?>
<div class="alert alert-success">
    <span><?php echo e(session('message')); ?></span>
</div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="alert alert-success">
    <span><?php echo e(session('error')); ?></span>
</div>
<?php endif; ?>
<?php /**PATH D:\OpenServer\domains\onshopuz\resources\views/layouts/message.blade.php ENDPATH**/ ?>