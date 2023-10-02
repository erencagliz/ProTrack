<?php $menu = include base_path('config/menu.php') ?>
<?php $perms = tr_group_permission(tr_user_details(null, 'group_id')) ?>
<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = json_decode($perms, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $value2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key2 == $value['permission_key']): ?>
            <?php if($value2 == true): ?>
                <div class="menu-item">
                    <a data-route="<?php echo e($value['route']); ?>" class="menu-link" href="<?php echo e(route($value['route'])); ?>">
                        <span class="menu-icon">
                            <i class="<?php echo e($value['icon']); ?>"></i>
                        </span>
                        <span class="menu-title"><?php echo e($value['title']); ?> </span>
                    </a>
                </div>
            <?php else: ?>
                <?php if(tr_user_permission_check(null, $value['permission_key']) == true): ?>
                    <div class="menu-item">
                        <a data-route="<?php echo e($value['route']); ?>" class="menu-link" href="<?php echo e(route($value['route'])); ?>">
                            <span class="menu-icon">
                                <i class="<?php echo e($value['icon']); ?>"></i>
                            </span>
                            <span class="menu-title"><?php echo e($value['title']); ?> </span>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH C:\Users\Spafoni\PhpstormProjects\time.triooz.com\resources\views/includes/sidebar/menu.blade.php ENDPATH**/ ?>